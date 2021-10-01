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

                    @foreach ($products as $value)
                        <div class="cart-product">
                            <div class="cart-product__lables">

                                @if (!empty($value->label))
                                    <span class="product-lable product-label__hit">{{ $value->label }}</span>
                                @endif

                                @if (!empty($value->discount_percent))
                                    <span class="product-lable product-label__sale">{{ $value->getTranslatedAttribute('discount_percent') }}%</span>
                                @endif
                            </div>

                            <a class="cart-product__image" href="{{ route('series-detail',['slug' => $value->slug]) }}">
                                <img src="{{ url('storage/'.$value->image) }}" alt="product">
                            </a>

                            <div class="cart-product__title">
                                <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="cart-product__name">{{ $value->getTranslatedAttribute('name') }}</a>
                                <div class="product-category">
                                    @if($value->category)
                                    <a href="{{ route('categoryDetail',['slug' => $value->categoryId->parentId->slug]) }}">
                                        {{ $value->category }}
                                    </a>
                                    @endif
                                    @if($value->subcategory)
                                        <a href="{{ route('series',['slug' => $value->categoryId->slug]) }}">
                                            {{ $value->subcategory }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="cart-product__count">
                                <button class="minus icon-minus"></button>
                                <span class="count quantity_number">1</span>
                                <button class="plus icon-plus"></button>
                            </div>

                            @if (!empty($value->price))
                                <div class="cart-product__price">
                                    <p>{{ $vars['aboutp-pricet'] }} <b>{{ $value->getTranslatedAttribute('price') }} {{ $vars['valuta'] }}</b></p>
                                </div>
                            @endif

                            <button class="cart-product__trash icon-bin"></button>
                        </div>
                    @endforeach

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
                    <a href="{{ route('cart-checkout') }}" class="accent-btn chekout-btn">Checkout</a>
                </div>
            </aside>
        </div>
    </div>
</main>

@stop