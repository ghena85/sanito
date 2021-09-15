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
        return view('category.index', compact('activeMenu', 'page'));
    }

    public function detail($slug = '')
    {
        $page           = Page::find(4);
        $activeMenu     = $page->id;
        $category       = Category::where('slug', $slug)->firstOrFail();
        $subCategories  = Category::where('parent_id',$category->id)->get();
        return view('category.index', compact('activeMenu','subCategories','category', 'page','slug'));
    }

}
