<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Order;
use App\OrderProduct;
use App\Page;
use App\Product;
use Illuminate\Http\Request;

class CartController extends AppController
{

    public function index()
    {
        $page = Page::find(5);
        $cart = session('cart');

        if(!$cart) {
            return redirect()->route('home');
        }
        $products = [];

        $fullPrice = 0;

        foreach($cart as $key => $c) {

            $product = Product::find($key);
            $product->count = $c['count'];
            $product->full_price = $product->price*$product->count;
            $fullPrice += $product->full_price;

            array_push($products, $product);
        }
        return view('cart.index', compact('fullPrice','page', 'products'));
    }

    public function confirm()
    {
        $page = Page::find(5);
        $cart = session('cart');

        if(!$cart) {
            return redirect()->route('home');
        }
        $products = [];

        $fullPrice = 0;

        foreach($cart as $key => $c) {

            $product = Product::find($key);
            $product->count = $c['count'];
            $product->full_price = $product->price*$product->count;
            $fullPrice += $product->full_price;

            array_push($products, $product);
        }
        return view('cart.confirm', compact('fullPrice','page', 'products'));
    }


    public function doCheckout(CheckoutRequest $request)
    {
        $order = new Order();

        $order->email   = $request->email;
        $order->first_name   = $request->first_name;
        $order->last_name   = $request->last_name;
        $order->address1   = $request->address1;
        $order->address2   = $request->address2;
        $order->location   = $request->location;
        $order->country   = $request->country;
        $order->postal_code   = $request->postal_code;
        $order->phone   = $request->phone;
        $order->full_price = getPriceCart();// with delivery price
        $order->delivery_price   = $order->full_price < setting('.delivery_free_from_price') ? setting('.delivery_price') : 0;
        $order->delivery   = $request->delivery;// 1- Livrare, 2- Ridicare la oficiu
        $order->payment = $request->payment;// 1- Plata la livrare

        $order->save();

        $cart = session('cart');

        $products = [];
        foreach($cart as $key => $c) {
            $product = Product::find($key);

            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->product_id = $product->id;
            $orderProduct->count = $c['count'];
            $orderProduct->full_price = ($product->price_discount ? $product->price_discount : $product->price) * $c['count'];
            $orderProduct->price = ($product->price_discount ? $product->price_discount : $product->price);
            $orderProduct->save();
            $product = Product::find($product->id);
            if($product) {
                $products[] = [
                    'name' => $product->name,
                    'price' => $product->price,
                    'full_price' => $orderProduct->full_price,
                    'qt' => $c['count']
                ];
            }

        }
        $data = $order->toArray();
        $data['products'] = $products;
        send(env('TO_EMAIL'),'Comanda Produs' ,$data, 'order');

        session()->forget('cart');
        session(['cart' => '']);
        return redirect()->route('success-order');
    }


    public function successOrder(Request $request) {
        return view('cart.success-order');
    }

    public function checkout(){
        $page = Page::find(6);
        $cart = session('cart');

        if(!$cart) {
            return redirect()->route('home');
        }
        $products = [];

        $fullPrice = 0;

        foreach($cart as $key => $c) {

            $product = Product::find($key);
            $product->count = $c['count'];
            $product->full_price = $product->price*$product->count;
            $fullPrice += $product->full_price;

            array_push($products, $product);
        }
        return view('cart.checkout',compact('page','products','product'));
    }

}
