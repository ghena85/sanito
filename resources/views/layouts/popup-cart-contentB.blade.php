<ul class="cart_content-list no-scrollbar">
    @php $totalPrice = 0; @endphp
    @foreach(getCartItem() as $cartItem)
        @php $totalPrice = $totalPrice+($cartItem->price*$cartItem->count); @endphp
        <li class="cart_content-item">
            <article class="cart_content-product cart_product">
                <img src="{{ asset('storage/'. $cartItem->image) }}" class="cart_product-img" alt="product1">
                <div class="cart_product-text">
                    <h3 class="cart_product-name">
                        <span style="color: #f0c23a;font-weight: bold">{{ $cartItem->count }}x</span>{{ $cartItem->getTranslatedAttribute('name') }}
                    </h3>
                    <span class="cart_product-price">{{ $cartItem->price }} {{ $vars['valuta'] }}</span>
                </div>
                <button class="cart_product-delete btn-remove-product"  data-id="{{ $cartItem->id }}" aria-label="delete product">
                    <img src="/img/cartDelete.svg" >
                </button>
            </article>
        </li>
    @endforeach
</ul>
<div class="cart_content-bottom">
    <div class="cart_content-fullprice">
        <span>{{ $vars['total'] }}:</span>
        <span class="fullprice">{{ $totalPrice }} {{ $vars['valuta'] }}</span>
    </div>
    <a href="{{ route('cart') }}" class="cart_content-btn">{{ $vars['checkout'] }}</a>
</div>