@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    <div class="checkout_main" style="background: url('/img/contact.jpg') 50% 50% / cover no-repeat">
        <h3 class="checkout_title">{{ $vars['contacteaza_ne'] }}</h3>
    </div>

    <div class="cart_content-section">
        <div class="container">
            <div class="cart_content_body">
                <div class="cart_intro">
                    <h4 class="cart_intro-title">{{ $vars['detalii_de_livrare'] }}</h4>
                    @if($errors->any())
                        <div class="alert alert-danger text-center">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form  action="{{ route('cart-confirm') }}" method="GET" class="cart_form">
                        {{ csrf_field() }}
                        <label for="email" class="form_field-label gc2">
                            *{{ $vars['email'] }}
                            <input  type="email" required id="email" name="email" class="form_field-input">
                        </label>

                        <label for="name" class="form_field-label gc1">
                            *{{ $vars['nume'] }}
                            <input  type="text" required id="first_name" name="first_name" class="form_field-input">
                        </label>

                        <label for="name" class="form_field-label gc1">
                            *{{ $vars['prenume'] }}
                            <input  type="text" required id="last_name" name="last_name" class="form_field-input">
                        </label>

                        <label for="Adresa" class="form_field-label gc2">
                            *{{ $vars['adresa_1'] }}
                            <input  type="text" required id="Adresa" name="address1" class="form_field-input">
                        </label>

                        <label for="text" class="form_field-label gc2">
                            *{{ $vars['localitate'] }}
                            <input  type="text" required id="location" name="location" class="form_field-input">
                        </label>

                        <label for="country" class="form_field-label gc2">
                            *{{ $vars['tara'] }}
                            <select  name="country" required id="country" class="form_field-input">
                                <option value="{{ $vars['chisinau'] }}" class="selector_country">{{ $vars['chisinau'] }}</option>
                                <option value="{{ $vars['romania'] }}" class="selector_country">{{ $vars['romania'] }}</option>
                                <option value="{{ $vars['russia'] }}" class="selector_country">{{ $vars['russia'] }}</option>
                            </select>
                        </label>

                        <label for="livrare" class="form_field-label gc2">
                            *{{ $vars['metoda_de_livrare'] }}
                            <select  name="delivery" required id="delivery" class="form_field-input">
                                <option value="1" class="selector_country">{{ $vars['livrare'] }}</option>
                                <option value="2" class="selector_country">{{ $vars['ridicare_la_oficiu'] }}</option>
                            </select>
                        </label>

                        <label for="plata" class="form_field-label gc2">
                            *{{ $vars['metoda_de_plata'] }}
                            <select  name="payment" required id="payment" class="form_field-input">
                                <option value="1" class="selector_country">{{ $vars['plata_la_livrare'] }}</option>
                            </select>
                        </label>

                        <label for="text" class="form_field-label gc1">
                            *{{ $vars['cod_postal'] }}
                            <input type="text" required name="postal_code" class="form_field-input">
                        </label>

                        <label for="email" class="form_field-label gc1">
                            *{{ $vars['nr_de_telefon'] }}
                            <input type="text" required id="phone" name="phone" class="form_field-input">
                        </label>

                        <div class="checkbox__container gc2">
                            <input type="checkbox" required name="checkbox" id="checkbox">
                            <span>{{ $vars['sunt_deacord_cu'] }}</span>
                            <a href="{{ route('info',['slug' => 'termeni-si-conditii']) }}" style="color: #f0c23a;font-size:12px" target="_blank">{{ $vars['termeni_si_conditii'] }}</a>
                            <span>{{ $vars['info_dupa_termeni'] }}</span>
                        </div>

                        <button type="submit" class="form_button gc2">{{ $vars['continua'] }}</button>
                    </form>

                </div>


                <div class="cart_items">
                    <h4 class="items_title">{{ $vars['rezumat_livrare'] }}</h4>
                    <div class="items__body">
                        @php $totalPrice = 0; @endphp
                        @foreach(getCartItem() as $cartItem)
                            @php $totalPrice = $totalPrice+($cartItem->price*$cartItem->count); @endphp
                            <div class="item item-{{ $cartItem->id }}">
                                <div class="items_intro">
                                    <a href="{{ route('product-detail',['slug' => $cartItem->slug]) }}">
                                        <img src="{{ asset('storage/'. $cartItem->image) }}" alt="item1" class="item_img">
                                    </a>
                                    <div class="item_info">
                                        <p class="item__name">{{ $cartItem->getTranslatedAttribute('name') }}</p>
                                        <p class="item__price">{{ $cartItem->price }} {{ $vars['valuta'] }}</p>
                                    </div>
                                    <div class="cart_checkout-quantity">
                                        <button class="minus_button-checkout btn-minus-product"  data-id="{{ $cartItem->id }}" >
                                            <img src="/img/minusCheckout.svg" alt="minus" class="cart_checkout-quantityImg">
                                        </button>
                                        <p class="quantity_checkout-number qt_product_{{ $cartItem->id }}">{{ $cartItem->count }}</p>
                                        <button class="plus_button-checkout btn-plus-product" data-id="{{ $cartItem->id }}" >
                                            <img src="/img/plusCheckout.svg" alt="plus">
                                        </button>
                                    </div>
                                </div>
                                <button class="btn-remove-product" data-id="{{ $cartItem->id }}"><img src="/img/trash.svg"></button>
                            </div>
                        @endforeach
                    </div>

                    @php $fullPrice = $totalPrice;$showDelivery = 0; @endphp
                    <div class="payment-info">
                        <div class="payment-info__main">
                            <div class="payment-block">
                                <p class="result_text">{{ $vars['produse'] }}</p>
                                <p class="result_text">
                                    <span class="totalPrice">{{ $totalPrice }} </span>
                                    {{ $vars['valuta'] }}
                                </p>
                            </div>
                            @if(setting('.delivery_price') && is_numeric(setting('.delivery_price')) &&  $fullPrice < setting('.delivery_free_from_price') )
                                @php $fullPrice = $fullPrice+setting('.delivery_price');$showDelivery = 1; @endphp
                            @endif
                                <div class="payment-block block-delivery" @if($showDelivery == 0) style="display: none" @endif>
                                    <p class="result_text">{{ $vars['livrare'] }}</p>
                                    <p class="result_text">{{ setting('.delivery_price') }} {{ $vars['valuta'] }}</p>
                                </div>

                        </div>

                        <div class="payment-block">
                            <p class="result_text">{{ $vars['total'] }}</p>
                            <p class="result_text">
                                <span class="fullPrice">{{ $fullPrice }} </span>
                                {{ $vars['valuta'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop