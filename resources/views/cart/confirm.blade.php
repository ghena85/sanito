@extends('layouts/default')


{{-- content --}}
@section('content')

    <div class="cart_content-section">
        <div class="container">
            <div class="cart_content_body">

                <form  action="{{ route('doCheckout') }}" method="POST" class="cart_form">
                    {{ csrf_field() }}
                    <div class="cart_intro">
                    <h4 class="cart_intro-title">1.{{ $vars['detalii_de_livrare'] }}</h4>
                    <div class="cart_intro-details">
                        <p class="cart_intro-detailsTitle">{{ $vars['rezumat_livrare'] }}</p>
                        @if(isset($_GET['email']) && $_GET['email'])
                            <p>{{ $vars['email'] }}: <b>{{ $_GET['email'] }}</b> </p>
                        @endif
                        @if(isset($_GET['first_name']) && $_GET['first_name'])
                            <p>{{ $vars['nume'] }}: <b>{{ $_GET['first_name'] }}</b> </p>
                        @endif
                        @if(isset($_GET['last_name']) && $_GET['last_name'])
                            <p>{{ $vars['prenume'] }}: <b>{{ $_GET['last_name'] }}</b> </p>
                        @endif
                        @if(isset($_GET['adresa_1']) && $_GET['adresa_1'])
                            <p>{{ $vars['adresa_1'] }}: <b>{{ $_GET['adresa_1'] }}</b> </p>
                        @endif
                        @if(isset($_GET['location']) && $_GET['location'])
                            <p>{{ $vars['localitate'] }}: <b>{{ $_GET['location'] }}</b> </p>
                        @endif
                        @if(isset($_GET['country']) && $_GET['country'])
                            <p>{{ $vars['tara'] }}: <b>{{ $_GET['country'] }}</b> </p>
                        @endif
                        @if(isset($_GET['delivery']) && $_GET['delivery'])
                            <p>{{ $vars['metoda_de_livrare'] }}: <b>{{ $_GET['delivery'] == 1 ? $vars['livrare'] : $vars['ridicare_la_oficiu'] }}</b> </p>
                        @endif
                        @if(isset($_GET['payment']) && $_GET['payment'])
                            <p>{{ $vars['metoda_de_plata'] }}: <b>{{ $vars['plata_la_livrare'] }}</b> </p>
                        @endif
                        @if(isset($_GET['postal_code']) && $_GET['postal_code'])
                            <p>{{ $vars['cod_postal'] }}: <b>{{ $_GET['postal_code'] }}</b> </p>
                        @endif

                        @if(isset($_GET['phone']) && $_GET['phone'])
                            <p class="last">{{ $vars['nr_de_telefon'] }}: <b>{{ $_GET['phone'] }}</b> </p>
                        @endif

                        @php $totalPrice = 0; @endphp
                        @foreach(getCartItem() as $cartItem)
                            @php $totalPrice = $totalPrice+($cartItem->price*$cartItem->count); @endphp
                        @endforeach

                        @php $fullPrice = $totalPrice;$showDelivery = 0; @endphp
                        @if(setting('.delivery_price') && is_numeric(setting('.delivery_price')) &&  $fullPrice < setting('.delivery_free_from_price') )
                            @php $fullPrice = $fullPrice+setting('.delivery_price');$showDelivery = 1; @endphp
                        @endif

                        <div class="cart_intro_deliveryInfo">
                            <p>
                                {{ $vars['produse'] }}: <b>{{ $totalPrice }} {{ $vars['valuta'] }}</b>
                            </p>
                        </div>

                        @if($showDelivery == 1)
                            <div class="cart_intro-deliveryInfo">
                                <p>
                                    {{ $vars['livrare'] }}: <b>{{ setting('.delivery_price') }} {{ $vars['valuta'] }}</b>
                                </p>
                            </div>
                        @endif

                        <div class="cart_intro_deliveryInfo">
                            <p>
                                {{ $vars['total'] }}: <b>{{ $fullPrice }} {{ $vars['valuta'] }}</b>
                            </p>
                        </div>
                    </div>
                        <input type="hidden" name="email" value="{{ isset($_GET['email']) ? $_GET['email'] : '' }}" >
                        <input type="hidden" name="first_name" value="{{ isset($_GET['first_name']) ? $_GET['first_name'] : '' }}" >
                        <input type="hidden" name="last_name" value="{{ isset($_GET['last_name']) ? $_GET['last_name'] : '' }}" >
                        <input type="hidden" name="address1" value="{{ isset($_GET['address1']) ? $_GET['address1'] : '' }}" >
                        <input type="hidden" name="location" value="{{ isset($_GET['location']) ? $_GET['location'] : '' }}" >
                        <input type="hidden" name="country" value="{{ isset($_GET['country']) ? $_GET['country'] : '' }}" >
                        <input type="hidden" name="delivery" value="{{ isset($_GET['delivery']) ? $_GET['delivery'] : '' }}" >
                        <input type="hidden" name="payment" value="{{ isset($_GET['payment']) ? $_GET['payment'] : '' }}" >
                        <input type="hidden" name="postal_code" value="{{ isset($_GET['postal_code']) ? $_GET['postal_code'] : '' }}" >
                        <input type="hidden" name="phone" value="{{ isset($_GET['phone']) ? $_GET['phone'] : '' }}" >


                        <button class="cart_content-button" type="submit">{{ $vars['continua'] }}</button>
                </div>
                </form>

                <div class="cart_items">
                    <h4 class="items_title">{{ $vars['rezumat_livrare'] }}</h4>
                    <div class="items__body">
                        @foreach(getCartItem() as $cartItem)
                            <div class="item">
                                <div class="items_intro">
                                    <img src="{{ asset('storage/'. $cartItem->image) }}" alt="item1" class="item_img">
                                    <div class="item_info">
                                        <p class="item__name"><span style="color: #f0c23a;font-weight: bold">{{ $cartItem->count }}x</span>{{ $cartItem->getTranslatedAttribute('name') }}</p>
                                        <p class="item__price">{{ $cartItem->count*$cartItem->price }} {{ $vars['valuta'] }}</p>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

@stop