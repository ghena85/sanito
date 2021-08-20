<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Product;
use App\Shop;
use Illuminate\Http\Request;

class ShopController extends AppController
{

    public function shop(Request $request)
    {
        return $this->index('shop',$request);
    }

    public function shopAntreprenori(Request $request)
    {
        return $this->index('shop-antreprenori',$request);
    }

    public function index($slug = '',Request $request)
    {
        $page = Page::where('slug',$slug)->first();
        $activeMenu  = $page->id;
        $shop = Shop::where('slug',$slug)->first();
        if(empty($shop)) return abort(404);

        $categories = Category::whereHas('products', function ($query) use ($shop) {
                            $query->where('products.shop_id',$shop->id);
                        })->get();
        $category  = Category::find($request->category_id);

        $filters = [
            'price_start' => isset($_GET['price_start']) ? $_GET['price_start'] : '',// Pretul de la
            'price_end'   => isset($_GET['price_end']) ? $_GET['price_end'] : '', // Pretul pina la
            'category_id' => isset($_GET['category_id']) ? $_GET['category_id'] : '', // Pretul pina la
            'shop_id'     => $shop->id, // Shop
        ];

        $products  = Product::select("products.*")->where('shop_id',$shop->id);
        if($request->category_id) {
            $products  = $products->leftJoin('product_categories','product_categories.product_id','=','products.id')
                                  ->where('product_categories.category_id',$request->category_id)->groupBy('products.id');
        }
        $productPrices = clone $products;
        if($filters['price_start']) {
            $products  = $products->where('price','>=',$filters['price_start']);
        }
        if($filters['price_end']) {
            $products  = $products->where('price','<=',$filters['price_end']);
        }
        $products      = $products->paginate(28);

        $minPrice      = $productPrices->where('price','>',0)->min('price');
        $maxPrice      = $productPrices->where('price','>',0)->max('price');
        $filters['selected_min_price'] = empty($filters['price_start']) ? $minPrice : $filters['price_start'];
        $filters['selected_max_price'] = empty($filters['price_end']) ? $maxPrice : $filters['price_end'];



        $nrGrouped = $shop->id == 1 ? round(count($products)/2)-1: count($products);// prodocuts between banner

        return view('shop.index', compact('activeMenu','minPrice','filters','maxPrice','nrGrouped','categories','products','category','shop', 'page'));
    }
}
