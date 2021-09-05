<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Product;
use App\Series;
use Illuminate\Http\Request;

class ProductController extends AppController
{
    public function detail(Request $request, $slug)
    {
        $activeMenu      = 2;
        $product = $page = Series::where('slug', $slug)->firstOrFail();
        return view('product.detail', compact('product','activeMenu','page'));
    }
}
