<?php

namespace App\Http\Controllers\Api\V1;


use App\Product;
use App\Traits\APIExceptionTrait;
use App\Vars;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class ProductController extends ApiController
{
    use APIExceptionTrait;


    /***---- STAR SEARCH WITHOUT REFRESH ----**/
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function filterProducts(Request $request)
    {
        $this->lng = $lng = $request->input('lng');
        $vars      = Vars::getList($lng);
        $filters = [
            'price_start' => !empty($request->input('price_start')) ? $request->input('price_start') : '', // pret start
            'price_end'   => !empty($request->input('price_end')) ? $request->input('price_end') : '', // pret start
            'shop_id'     => !empty($request->input('shop_id')) ? $request->input('shop_id') : '1', // shop
            'category_id' => !empty($request->input('category_id')) ? $request->input('category_id') : '', // category
        ];

         // Produse
        $products  = Product::select("products.*")->where('shop_id',$filters['shop_id']);
        if($filters['category_id']) {
            $products  = $products->leftJoin('product_categories','product_categories.product_id','=','products.id')
                                  ->where('product_categories.category_id',$filters['category_id'])
                                  ->groupBy('products.id');
        }
        if($filters['price_start']) {
            $products  = $products->where('price','>=',$filters['price_start']);
        }
        if($filters['price_end']) {
            $products  = $products->where('price','<=',$filters['price_end']);
        }
        $products             = $products->paginate(28);
        $product_list_area    = view("shop.products",compact('products','filters','lng','vars'))->render();
        $pagination_list_area = view("shop.pagination",compact('products','filters'))->render();

        return $this->respond([
            'product_list_area' => $product_list_area,
            'pagination_list_area' => $pagination_list_area,
        ]);
    }
    /***---- END SEARCH WITHOUT REFRESH ----**/


}
