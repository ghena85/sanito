<div class="cart-content_header">
    <p>Cos de cumparaturi (2)</p>
</div>
<ul class="cart-content__list">
    @php $totalPrice = 0; @endphp
    @foreach(getCartItem() as $cartItem)
        @php $totalPrice = $totalPrice+($cartItem->price*$cartItem->count); @endphp
        <li class="cart-content__item cart-item">
            <img src="{{ asset('storage/'. $cartItem->image) }}" alt="{{ $cartItem->getTranslatedAttribute('name') }}" class="cart-item__image">
            <div class="cart-item__info">
                <a href="{{ route('series-detail',['slug' => $cartItem->slug]) }}" class="cart-item__name">
                    {{ $cartItem->getTranslatedAttribute('name') }}
                </a>
                <div class="cart-item__meta">
                    <p class="cart-item__price"><b>{{ $cartItem->price }} {{ $vars['valuta'] }}</b> </p>
                    <span class="cart-item__quantity">Cantitate : {{ $cartItem->count }}</span>
                </div>
            </div>
        </li>
    @endforeach
</ul>
<div class="cart-content__prices cart-price">
    <div class="cart-price__item">
        <p>Subtotal</p>
        <b>360 LEI</b>
    </div>
    <div class="cart-price__item">
        <p>Livrare</p>
        <b>90 LEI</b>
    </div>
    <div class="cart-price__item">
        <p>Total</p>
        <b class="orange">{{ $totalPrice }} {{ $vars['valuta'] }}</b>
    </div>
</div>
<div class="cart-content__navigation">
    <a href="{{ route('cart-checkout') }}" class="accent-btn">Finalizare comenda</a>
    <a href="{{ route('cart') }}" class="outline-btn">Cos de cumparaturi</a>
</div>