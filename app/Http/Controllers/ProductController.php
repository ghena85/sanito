<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends AppController
{

    public function detail(Request $request, $slug)
    {
        $activeMenu      = 2;
        $product = $page = Product::where('slug', $slug)->with(['categories'])->firstOrFail();
        $similarProducts = Product::getSimilar($product);
        return view('product.detail', compact('product','activeMenu','page','similarProducts'));
    }
}
