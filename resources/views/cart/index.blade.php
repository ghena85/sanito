@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

<main class="cart">
    <div class="container">
        <div class="back-breadcrumb">
            <div class="back-block">
                <a href="#" class="back-button"><span class="icon-chevron left"></span>Back</a>
            </div>
        </div>

        <h3>My Cart</h3>

        <div class="cart-grid">
            <div class="cart-body">
                <div class="cart-product__scroll no-scrollbar">
                    <div class="cart-product">
                        <div class="cart-product__lables">
                            <span class="product-lable product-label__hit">Hit</span>
                        </div>

                        <a class="cart-product__image" href="#">
                            <img src="img/product1.png" alt="product">
                        </a>

                        <div class="cart-product__title">
                            <a href="#" class="cart-product__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/Anthracite, 8.5 inch</a>
                            <div class="product-category">
                                <a href="#">Pots</a>
                                <a href="#">Flower pots</a>
                            </div>
                        </div>

                        <div class="cart-product__count">
                            <button class="minus icon-minus"></button>
                            <span class="count">1</span>
                            <button class="plus icon-plus"></button>
                        </div>

                        <div class="cart-product__price">
                            <p>de la <b>150 LEI</b></p>
                            
                        </div>

                        <button class="cart-product__trash icon-bin"></button>
                    </div>
               
                    <div class="cart-product">
                        <div class="cart-product__lables">
                            <span class="product-lable product-label__sale">-15%</span>
                        </div>

                        <a class="cart-product__image" href="#">
                            <img src="img/product1.png" alt="product">
                        </a>

                        <div class="cart-product__title">
                            <a href="#" class="cart-product__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/Anthracite, 8.5 inch</a>
                            <div class="product-category">
                                <a href="#">Pots</a>
                                <a href="#">Flower pots</a>
                            </div>
                        </div>

                        <div class="cart-product__count">
                            <button class="minus icon-minus"></button>
                            <span class="count">1</span>
                            <button class="plus icon-plus"></button>
                        </div>

                        <div class="cart-product__price">
                            <span class="discount">120LEI</span>
                            <p>de la <span>150LEI</span></p>
                        </div>

                        <button class="cart-product__trash icon-bin"></button>
                    </div>

                    <div class="cart-product">
                        <div class="cart-product__lables">
                            <span class="product-lable product-label__sale">-15%</span>
                            <span class="product-lable product-label__hit">Hit</span>
                        </div>

                        <a class="cart-product__image" href="single-product.html">
                            <img src="img/product1.png" alt="product">
                        </a>

                        <div class="cart-product__title">
                            <a href="single-product.html" class="cart-product__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/Anthracite, 8.5 inch</a>
                            <div class="product-category">
                                <a href="single-category.html">Pots</a>
                                <a href="single-category.html">Flower pots</a>
                            </div>
                        </div>

                        <div class="cart-product__count">
                            <button class="minus icon-minus"></button>
                            <span class="count">1</span>
                            <button class="plus icon-plus"></button>
                        </div>

                        <div class="cart-product__price">
                            <span class="discount">120LEI</span>
                            <p>de la <span>150LEI</span></p>
                        </div>

                        <button class="cart-product__trash icon-bin"></button>
                    </div>
                </div> 

            </div>

            <aside class="cart-sidebar">
                <h4 class="cart-sidebar__title">Payment information</h4>

                <div class="card-sidebar__prices">
                    <div class="price-row">
                        <p>Subtotal</p> <b>360 LEI</b>
                    </div>
                    <div class="price-row">
                        <p>Sale</p>
                        <b>-10%</b>
                    </div>
                    <div class="price-row">
                        <p>Delivery</p> 
                        <b>50 LEI</b>
                    </div>
                    <div class="price-row">
                        <p>Total</p>
                        <h4>370 LEI</h4>
                    </div>
                    <a href="checkout.html" class="accent-btn chekout-btn">Checkout</a>
                </div>
            </aside>
        </div>
    </div>
</main>

@stop