<?php

/**
 * @param Send Mail
 *
 * @return string
 */
function send($to,$subject = null ,$data,$mailView = '',$cc = '')
{
    $message = View::make('mail.'.$mailView)->with($data)->render();
    $subject = $subject ?? config('app.name') ;

    if($cc) {
        $headers = 'From: '.env('TO_EMAIL').'' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type:text/html;charset=UTF-8' . "\r\n" .
            'Cc: '.$cc . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    } else {
        $headers = 'From: '.env('TO_EMAIL').'' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type:text/html;charset=UTF-8' . "\r\n" .
            'Cc: satiricus@satiricus.md' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    }
    mail($to, $subject, $message, $headers);
}


function getDateArticle($article) {

    $time = strtotime($article->created_at);

    $month = date('F', $time);
    $day = date('d', $time);
    $year = date('Y', $time);

    return $month.', '. $day.' '. $year;

}

function getPriceCart() {
    $cart = session('cart');

    $price = 0;

    if($cart) {
        foreach($cart as $key => $c) {

            $product = \App\Product::find($key);
            $price+= ($product->price_discount ? $product->price_discount : $product->price) * $c['count'];

        }
    }
    return $price;
}


function getCartItem() {
    $cart = session('cart');

    $products = [];

    if($cart) {
        foreach($cart as $key => $c) {
            $product = \App\Product::find($key);
            if($product) {
                $product->count = $c['count'];
                $products[] = $product;
            }
        }
    }

    return $products;
}

function isEmptyArray($array)
{
    $totalEmpty = 0;
    foreach ($array as $element) {
        if (empty($element)) {
            $totalEmpty++;
        }
    }
    return count($array) == $totalEmpty ? true : false;
}

function getCartCount() {
    $cart = session('cart');

    $count = 0;

    if($cart) {
        foreach($cart as $key => $c) {
            $count = $count+$c['count'];
        }
    }

    return $count;
}