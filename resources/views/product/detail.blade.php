@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    <!-- <div class="single_product">
        <div class="container">
            <div class="single_product-body">
                <div class="single_product-img">
                    <img src="{{ url('storage/'.$product->image) }}" alt="singleProduct">
                </div>
                <div class="single_product-about">
                    <h3 class="single_product-title">{{ $product->getTranslatedAttribute('name') }}</h3>
                    <p class="single_product-price">{{ $product->price }} {{ $vars['valuta'] }}</p>
                    @if($product->inStock)
                        <p class="single_product-availability">{{ $vars['in_stock'] }}</p>
                    @endif
                    <p class="single_product-intro">
                        {!! $product->getTranslatedAttribute('short_text') !!}
                    </p>
                    @if($product->categories)
                        <div class="single_product-buttons">
                            @foreach($product->categories as $value)
                                <button class="product_button">
                                    {{ $value->getTranslatedAttribute('name') }}
                                </button>
                            @endforeach
                        </div>
                    @endif
                    <div class="single_product-Buypreferences">
                        <a href="#" class="single_product-buyButton btn-add-cart" data-id="{{ $product->id }}" data-page="detail">
                            {{ $vars['cumpara'] }}
                        </a>
                        <div class="quantity_btn quantity">
                            <button class="minus_btn quantity_button btn-minus-product disabled" data-id="{{ $product->id }}" id="minus">
                                <svg width="14" height="3" viewBox="0 0 14 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5581 2.92041H1.21801C0.592038 2.92041 0.0839844 2.38897 0.0839844 1.73419C0.0839844 1.0794 0.592038 0.547967 1.21801 0.547967H12.5581C13.184 0.547967 13.6921 1.0794 13.6921 1.73419C13.6921 2.38897 13.184 2.92041 12.5581 2.92041Z" fill="#444444"/>
                                </svg>
                            </button>
                            <p class="quantity_number">1</p>
                            <button class="plus_btn quantity_button btn-plus-product" data-id="{{ $product->id }}" id="plus">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.854 6.33455H8.31796V1.58979C8.31796 0.935 7.81105 0.403564 7.18393 0.403564C6.55681 0.403564 6.0499 0.935 6.0499 1.58979V6.33455H1.51391C0.886793 6.33455 0.379883 6.86599 0.379883 7.52077C0.379883 8.17556 0.886793 8.70699 1.51391 8.70699H6.0499V13.4518C6.0499 14.1065 6.55681 14.638 7.18393 14.638C7.81105 14.638 8.31796 14.1065 8.31796 13.4518V8.70699H12.854C13.4811 8.70699 13.988 8.17556 13.988 7.52077C13.988 6.86599 13.4811 6.33455 12.854 6.33455Z" fill="#444444"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->

    <div class="single-product">
        <div class="container">
            <div class="card">
                <div class="card-slider">
                    <div class="card-slider_nav slider-nav">
                        <div class="slider-nav_item" tabindex="0"><img src="{{ asset('storage/'.$product->image) }}" alt=""></div>
                        @if($product->images)
                            @foreach(json_decode($product->images) as $image)
                                <div class="slider-nav_item" tabindex="0"><img src="{{ asset('storage/'.$image) }}" alt=""></div>
                            @endforeach
                        @endif
                    </div>
                    <div class="cart-slider_block slider-block">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{{ asset('storage/'.$product->image) }}" data-fslightbox="gallery">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="">
                                </a>
                            </div>
                            @if($product->images)
                                @foreach(json_decode($product->images) as $image)
                                    <div class="swiper-slide">
                                        <a href="{{ asset('storage/'.$image) }}" data-fslightbox="gallery">
                                            <img src="{{ asset('storage/'.$image) }}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-info">
                    <div class="card-text">
                        <h3>{{ $product->getTranslatedAttribute('name') }}</h3>
                        <h4>{{ $product->price }} {{ $vars['valuta'] }}</h4>
                        @if($product->inStock)
                            <p class="available">{{ $vars['in_stock'] }}</p>
                        @endif
                        <p>
                            {{ $product->getTranslatedAttribute('short_text')  }}
                        </p>
                    </div>
                    @if($product->categories)
                        <div class="type-buttons">
                            @foreach($product->categories as $value)
                                <button class="type">
                                    {{ $value->getTranslatedAttribute('name') }}
                                </button>
                            @endforeach
                        </div>
                    @endif

                    <div class="buy-preferences">
                        <div class="buy-button">
                            <a href="#" class="single_product-buyButton btn-add-cart" data-id="{{ $product->id }}" data-page="detail">
                                {{ $vars['cumpara'] }}
                            </a>
                        </div>
                        <div class="quantity-button">
                            <button class="minus-button btn-minus-product" data-id="{{ $product->id }}" id="minus" data-page="detail" >
                                <svg width="14" height="3" viewBox="0 0 14 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5581 2.92041H1.21801C0.592038 2.92041 0.0839844 2.38897 0.0839844 1.73419C0.0839844 1.0794 0.592038 0.547967 1.21801 0.547967H12.5581C13.184 0.547967 13.6921 1.0794 13.6921 1.73419C13.6921 2.38897 13.184 2.92041 12.5581 2.92041Z" fill="#444444"/>
                                    </svg>
                            </button>
                            <p class="quantity-number quantity_number">1</p>
                            <button class="plus-button btn-plus-product" data-id="{{ $product->id }}" id="plus" data-page="detail" >
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.854 6.33455H8.31796V1.58979C8.31796 0.935 7.81105 0.403564 7.18393 0.403564C6.55681 0.403564 6.0499 0.935 6.0499 1.58979V6.33455H1.51391C0.886793 6.33455 0.379883 6.86599 0.379883 7.52077C0.379883 8.17556 0.886793 8.70699 1.51391 8.70699H6.0499V13.4518C6.0499 14.1065 6.55681 14.638 7.18393 14.638C7.81105 14.638 8.31796 14.1065 8.31796 13.4518V8.70699H12.854C13.4811 8.70699 13.988 8.17556 13.988 7.52077C13.988 6.86599 13.4811 6.33455 12.854 6.33455Z" fill="#444444"/>
                                    </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product_description">
        <div class="container">
            <div class="product_description-about">
                <h3 class="description-title">{{ $vars['descriere'] }}</h3>
                <p class="description-about">
                    {!! $product->getTranslatedAttribute('text') !!}
                </p>
            </div>
        </div>
    </div>

    <div class="other_products">
        <div class="container">
            <h3 class="other_title">{{ $vars['articole_asemanatoare'] }}</h3>
            <div class="shop_products">
                <div class="container">
                    <div class="shop_products-body">
                        @foreach($similarProducts as $value)
                            <article class="shop_product-body">
                                <a href="{{ route('product-detail',['slug' => $value->slug]) }}">
                                    <img src="{{ url('storage/'.$value->image) }}" alt="product1" class="product-img">
                                </a>
                                <div class="product_body-text">
                                    <a href="{{ route('product-detail',['slug' => $value->slug]) }}">
                                        <h3 class="product-title">{{ $value->getTranslatedAttribute('name') }}</h3>
                                    </a>
                                    <span class="product-price">{{ $value->price }} {{ $vars['valuta'] }}</span>
                                </div>
                                <button class="product_cart btn-add-cart" data-id="{{ $value->id }}">{{ $vars['add_to_cart'] }}
                                    <svg width="25" height="29" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5988 10.9457L13.2204 3.46512C13.0304 3.14583 12.7105 2.98618 12.3906 2.98618C12.0708 2.98618 11.7509 3.14583 11.5609 3.47652L7.18249 10.9457H2.39418C1.84437 10.9457 1.39453 11.4588 1.39453 12.086C1.39453 12.1886 1.40453 12.2913 1.43452 12.3939L3.97362 22.9648C4.20354 23.9226 4.97327 24.6296 5.89294 24.6296H18.8883C19.808 24.6296 20.5777 23.9226 20.8177 22.9648L23.3568 12.3939L23.3868 12.086C23.3868 11.4588 22.9369 10.9457 22.3871 10.9457H17.5988ZM9.3917 10.9457L12.3906 5.92823L15.3896 10.9457H9.3917ZM12.3906 20.0683C11.291 20.0683 10.3914 19.042 10.3914 17.7877C10.3914 16.5333 11.291 15.507 12.3906 15.507C13.4903 15.507 14.3899 16.5333 14.3899 17.7877C14.3899 19.042 13.4903 20.0683 12.3906 20.0683Z" fill="#F5BD16"/>
                                    </svg>
                                </button>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop