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

            <div class="checkout-grid__information">
                <aside class="checkout-grid__sidebar">
                    <div class="price-row">
                        <p>Subtotal</p>
                        <b>360 LEI</b>
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
                    <a href="#" class="accent-btn order">Place my order</a>
                </aside>

                <div class="checkout-grid__products">
                    <h4>Items(3)</h4>
                    <ul class="checkout-grid__list product-list">
                        <li class="product-list__item">
                            <img src="img/product1.png" alt="product">
                            <div class="product-list__information">
                                <a href="single-product.html" class="product-list__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/ Anthracite, 8.5 inch</a>
                            </div>
                            <div class="product-list__price">
                                <span class="discount">120 LEI</span>
                                <p>de la <span>150lei</span></p>
                            </div>
                        </li>
                        <li class="product-list__item">
                            <img src="img/product2.png" alt="product">
                            <div class="product-list__information">
                                <a href="single-product.html" class="product-list__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/ Anthracite, 8.5 inch</a>
                            </div>
                            <div class="product-list__price">
                                <p>de la <b>150lei</b></p>
                            </div>
                        </li>
                        <li class="product-list__item">
                            <img src="img/product3.png" alt="product">
                            <div class="product-list__information">
                                <a href="single-product.html" class="product-list__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/ Anthracite, 8.5 inch</a>
                            </div>
                            <div class="product-list__price">
                                <span class="discount">120 LEI</span>
                                <p>de la <span>150lei</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection