<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Series;
use Illuminate\Http\Request;

class SeriesController extends AppController
{

    public function index($categorySlug)
    {
        $page        = Page::find(4);
        $activeMenu  = $page->id;
        $category    = Category::where('slug',$categorySlug)->first();
        if(empty($category)) return abort(404);
        $series      = Series::orderBy('id','desc')->get();
        return view('series.index', compact('category','series','activeMenu','page'));
    }

    public function detail(Request $request, $slug)
    {
        $activeMenu      = 2;
        $product = $page = Series::where('slug', $slug)->firstOrFail();
        return view('series.detail', compact('product','activeMenu','page'));
    }
}
