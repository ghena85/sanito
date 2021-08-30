<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends AppController
{

    public function index($categorySlug)
    {
        $page        = Page::find(4);
        $activeMenu  = $page->id;
        $category    = Category::where('slug',$categorySlug)->first();
        if(empty($category)) return abort(404);
        return view('product.list', compact('category','activeMenu','page'));
    }
    public function detail(Request $request, $slug)
    {
        $activeMenu      = 2;
        $product = $page = Product::where('slug', $slug)->with(['categories'])->firstOrFail();
        $similarProducts = Product::getSimilar($product);
        return view('product.detail', compact('product','activeMenu','page','similarProducts'));
    }
}
