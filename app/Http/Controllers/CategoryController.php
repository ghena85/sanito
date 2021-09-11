<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use Illuminate\Http\Request;

class CategoryController extends AppController
{
    public function index(Request $request)
    {
        $page        = Page::find(4);
        $activeMenu  = $page->id;

        $categories  = Category::Main()->with('childrens')->get();

        return view('category.index', compact('activeMenu','categories', 'page'));
    }
}
