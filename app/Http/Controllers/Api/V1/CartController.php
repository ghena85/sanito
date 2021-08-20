<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\APIExceptionTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Cache;

class CartController extends ApiController
{
    use APIExceptionTrait;

    /**
     * Add Product to cart list
     *
     */
    public function addToCart(Request $request)
    {
        $cart = empty(session('cart')) ? [] : session('cart');

        if($request->count) {
            $count = $request->count;
        }
        else {
            $count = 1;
        }

        if(isset($cart[$request->id])) {
            $cart[$request->id]['count'] = $cart[$request->id]['count'] + $count;
        }
        else {
            $cart[$request->id]['count'] = $count;
        }

        session(['cart' => $cart]);

        $vars             = Cache::get('vars');
        $popupCartContent = view("layouts.popup-cart-content",compact('vars'))->render();

        return $this->respond([
            'message' => $vars['adaugat_in_cos_cu_success'],
            'popupCartContent' => $popupCartContent,
            'totalQt' => getCartCount()
        ]);
    }

    /**
     * Remove Product to cart list
     *
     */
    public function removeFromCart(Request $request)
    {
        $cart = session('cart');

        unset($cart[$request->id]);

        session(['cart' => $cart]);

        $vars             = Cache::get('vars');
        $popupCartContent = view("layouts.popup-cart-content",compact('vars'))->render();

        $totalPrice = getPriceCart();
        $delivery   = (int)setting('.delivery_price');

        return $this->respond([
            'totalPrice'=> $totalPrice,
            'fullPrice' => $totalPrice+$delivery,// Total + Deliver
            'popupCartContent' => $popupCartContent,
            'totalQt' => getCartCount()
        ]);
    }

    /**
     * Plus Product to cart list
     *
     */
    public function plusToCart(Request $request)
    {
        $cart = session('cart');
        if($request->page == 'detail') {
            $cart[$request->id]['count'] = $cart[$request->id]['count'] + $request->total;
        } else {
            $cart[$request->id]['count'] = $cart[$request->id]['count'] + 1;
        }

        session(['cart' => $cart]);

        $totalPrice    = getPriceCart();
        $delivery                 = (int)setting('.delivery_price');
        $delivery_free_from_price = (int)setting('.delivery_free_from_price');
        $delivery                 = $totalPrice < (int)setting('.delivery_free_from_price') ? $delivery : 0;
        return $this->respond([
                'count'     => $cart[$request->id]['count'],
                'totalQt'   => getCartCount(),
                'totalPrice'=> $totalPrice,
                'delivery'  => $delivery,
                'fullPrice' => $totalPrice+$delivery,// Total + Deliver
        ]);
    }

    /**
     * Minus Product from cart list
     *
     */
    public function minusToCart(Request $request)
    {
        $cart = session('cart');

        $cart[$request->id]['count'] = $cart[$request->id]['count'] > 1 ? $cart[$request->id]['count'] - 1 : $cart[$request->id]['count'];

        session(['cart' => $cart]);

        $totalPrice    = getPriceCart();
        $delivery = (int)setting('.delivery_price');
        $delivery_free_from_price = (int)setting('.delivery_free_from_price');
        $delivery                 = $totalPrice < (int)setting('.delivery_free_from_price') ? $delivery : 0;
        return $this->respond([
            'count'     => $cart[$request->id]['count'],
            'totalPrice'=> $totalPrice,
            'totalQt'   => getCartCount(),
            'delivery'  => $delivery,
            'fullPrice' => $totalPrice+$delivery,// Total + Deliver
        ]);
    }

}
