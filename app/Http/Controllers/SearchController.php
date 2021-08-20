<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Page;
use App\Product;
use App\Shop;
use App\Tag;
use Illuminate\Http\Request;

class SearchController extends AppController
{
    public function index(Request $request) {

        $page     = Page::find(13);
        // Search tags
        $productIDs = Tag::select("product_tags.product_id","tags.name")
                        ->where('tags.name', 'LIKE', '%'. $request->search .'%')
                        ->join('product_tags','product_tags.tag_id','=','tags.id')
                        ->groupBy('product_id')
                        ->pluck('product_id')
                        ->toArray();

        $products = Product::where('name', 'LIKE', '%'. $request->search .'%')->orderBy('created_at', 'desc');
        if($productIDs) {
            $products = $products->orWhereIn('id',$productIDs);
        }
        $products = $products->paginate(12);

        return view('search.index', compact('products','page'));
    }

}
