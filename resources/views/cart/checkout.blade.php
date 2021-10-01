@extends('layouts.default')

@section('title')
    {{ env('APP_NAME')." - ".$page->getTranslatedAttribute('name') }}
@endsection


@section('content')
    
<div class="back-breadcrumb">
    <div class="container">
        <a href="#" class="back-button"><span class="icon-chevron left"></span>Back</a>
    </div>
</div>

<div class="checkout">
    <div class="container">
        <div class="checkout-grid">
            <div class="checkout-grid__main checkout-main">
                <div class="checkout-main__block billing">
                    <h2>Billing adress</h2>
                    <form action="#" class="billing-form">
                        <label for="name">
                            First name
                            <input type="text" placeholder="First Name" name="name" id="name">
                        </label>
                        <label for="surname">
                            Last name
                            <input type="text" placeholder="Last Name" name="surname" id="surname">
                        </label>
                        <label for="email">
                            E-mail
                            <input type="email" placeholder="example@mail.com" name="email" id="email">
                        </label>
                        <label for="phone">
                            Phone number
                            <input type="tel" value="(+373)" placeholder="(+373)  XX - XX - XX - XX" name="phone" id="phone">
                        </label>
                        <label for="city">
                            City/Province
                            <div class="select">
                                <select name="city" id="city">
                                    <option selected disabled>Alege o optiune</option>
                                    <option value="1">Chisinau</option>
                                    <option value="2">Orhei</option>
                                    <option value="3">Balti</option>
                                  </select>
                            </div>
                        </label>
                        <label for="address">
                            Full adress
                            <input type="text" placeholder="Enter shipping adress" name="address" id="address">
                        </label>
                    </form>
                </div>
                <div class="checkout-main__block payment">
                    <h2>Payment method</h2>
                    <form action="#" class="payment-form">
                        <p>
                            <input type="radio" id="cash" name="radio-group" checked>
                            <label for="cash">On delivery (cash)</label>
                        </p>
                        <p>
                            <input type="radio" id="terminal" name="radio-group">
                            <label for="terminal">On delivery (terminal)</label>
                        </p>
                        <p>
                            <input type="radio" id="online" name="radio-group">
                            <label for="online">Online</label>
                        </p>
                    </form>
                </div>
            </div>
            @php $totalPrice = 0; @endphp
            @foreach (getCartItem() as $value)
                @php $totalPrice = $totalPrice+($value->price*$value->count); @endphp
            @endforeach
            @php $fullPrice = $totalPrice;$showDelivery = 0; @endphp
            <div class="checkout-grid__information">
                <aside class="checkout-grid__sidebar">
                    <div class="price-row">
                        <p>{{ $vars['subtotal'] }}</p>
                        <b class="totalPrice">{{ $totalPrice }} {{ $vars['valuta'] }}</b>
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
                    <a href="#" class="accent-btn order">{{ $vars['place_my_order'] }}</a>
                </aside>

                <div class="checkout-grid__products">
                    <h4>Items({{ $product->count }})</h4>
                    <ul class="checkout-grid__list product-list">

                        @foreach ($products as $value)
                            <li class="product-list__item">
                                <img src="{{ url('storage/'.$value->image) }}" alt="product">
                                <div class="product-list__information">
                                    <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-list__name">{{ $value->getTranslatedAttribute('name') }}</a>
                                </div>
                                @if (!empty($value->price))
                                    <div class="product-list__price">
                                        <p>{{ $vars['aboutp-pricet'] }} <b>{{ $value->getTranslatedAttribute('price') }} {{ $vars['valuta'] }}</b></p>
                                    </div>
                                @endif
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection