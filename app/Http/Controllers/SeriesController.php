<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use Illuminate\Http\Request;

class SeriesController extends AppController
{

    public function index($categorySlug)
    {
        $page        = Page::find(4);
        $activeMenu  = $page->id;
        $category    = Category::where('slug',$categorySlug)->first();
        if(empty($category)) return abort(404);
        return view('series.index', compact('category','activeMenu','page'));
    }
}
