<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\Page;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends AppController
{
    public function index(Request $request)
    {
        $page        = Page::find(4);
        $activeMenu  = $page->id;

        $banner = Banner::find(2);

        return view('category.index', compact('activeMenu', 'page', 'banner'));
    }

    public function detail($slug = '')
    {
        $page           = Page::find(4);
        $activeMenu     = $page->id;
        $category       = Category::where('slug', $slug)->firstOrFail();
        $subCategories  = SubCategory::where('category_id', $category->id)->get();
        $banner = Banner::find(2);

        return view('category.index', compact('activeMenu', 'subCategories', 'category', 'page', 'slug', 'banner'));
    }
}
