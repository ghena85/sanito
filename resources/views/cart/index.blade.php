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
                    @php $totalPrice = 0; @endphp
                    @foreach (getCartItem() as $value)
                    @php $totalPrice = $totalPrice+($value->price*$value->count); @endphp
                        <div class="cart-product product-{{ $value->id }}">
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
                                <button class="minus icon-minus btn-minus-product" data-id="{{ $value->id }}"></button>
                                <span class="count quantity_checkout-number qt_product_{{ $value->id }}">{{ $value->count }}</span>
                                <button class="plus icon-plus btn-plus-product" data-id="{{ $value->id }}"></button>
                            </div>

                            @if (!empty($value->price))
                                <div class="cart-product__price">
                                    <p>{{ $vars['aboutp-pricet'] }} <b>{{ $value->getTranslatedAttribute('price') }} {{ $vars['valuta'] }}</b></p>
                                </div>
                            @endif

                            <button class="cart-product__trash icon-bin btn-remove-product" data-id="{{ $value->id }}"></button>
                        </div>

                    @endforeach

                </div> 
                @php $fullPrice = $totalPrice;$showDelivery = 0; @endphp
            </div>

            <aside class="cart-sidebar">
                <h4 class="cart-sidebar__title">{{ $vars['payment_information'] }}</h4>

                <div class="card-sidebar__prices">
                    <div class="price-row">
                        <p>{{ $vars['subtotal'] }}</p> <b class="totalPrice">{{ $totalPrice }} {{ $vars['valuta'] }}</b>
                    </div>
                    {{-- <div class="price-row">
                        <p>Sale</p>
                        <b>-10%</b>
                    </div> --}}
                    @if(setting('.delivery_price') && is_numeric(setting('.delivery_price')) &&  $fullPrice < setting('.delivery_free_from_price') )
                        @php $fullPrice = $fullPrice+setting('.delivery_price');$showDelivery = 1; @endphp
                    @endif
                    <div class="price-row block-delivery" @if($showDelivery == 0) style="display: none" @endif>
                        <p>{{ $vars['delivery'] }}</p> 
                        <b>{{ setting('.delivery_price') }} {{ $vars['valuta'] }}</b>
                    </div>
                    <div class="price-row">
                        <p>{{ $vars['total'] }}</p>
                        <h4 class="fullPrice">{{ $fullPrice }} {{ $vars['valuta'] }}</h4>
                    </div>
                    <a href="{{ route('cart-checkout') }}" class="accent-btn chekout-btn">{{ $vars['checkout'] }}</a>
                </div>
            </aside>
        </div>
    </div>
</main>

@stop