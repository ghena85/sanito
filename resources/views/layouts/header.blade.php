<div class="loader loading">
    <img src="/img/fffbee.png" alt="">
</div>

<div class="topbar">
    <div class="container">
        <div class="topbar_body">
            <div class="search_box">
                <form action="{{ route('search') }}" id="sbt">
                    <input class="search-txt" type="text" name="search" placeholder="{{ $vars['cauta'] }}">
                </form>
                <button class="search_btn" form="sbt">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.74998 17C8.31521 17 6.91271 16.5743 5.72002 15.7768C4.52733 14.9792 3.5981 13.8457 3.04996 12.5198C2.50181 11.1939 2.35941 9.73513 2.64078 8.32822C2.92215 6.92132 3.61463 5.62953 4.63056 4.6164C5.6465 3.60327 6.94019 2.91436 8.34787 2.63688C9.75555 2.3594 11.2139 2.50583 12.5383 3.05763C13.8627 3.60943 14.9936 4.5418 15.7879 5.73668C16.5821 6.93157 17.0039 8.33524 17 9.77C16.992 11.6885 16.225 13.5259 14.8665 14.8807C13.508 16.2354 11.6685 16.9974 9.74998 17ZM9.74998 3.5C8.5147 3.50001 7.30712 3.86606 6.27975 4.55194C5.25238 5.23782 4.4513 6.21276 3.97767 7.35363C3.50404 8.4945 3.3791 9.75014 3.61864 10.962C3.85819 12.1738 4.45146 13.2875 5.32354 14.1624C6.19561 15.0372 7.30739 15.634 8.51845 15.8775C9.72951 16.1209 10.9855 15.9999 12.1279 15.53C13.2703 15.06 14.2478 14.262 14.937 13.2368C15.6261 12.2117 15.996 11.0053 16 9.77C16 8.1124 15.3415 6.52268 14.1694 5.35058C12.9973 4.17848 11.4076 3.52 9.74998 3.52V3.5Z" fill="black"/>
                    <path d="M20.9999 21.52C20.9343 21.5208 20.8693 21.5079 20.809 21.482C20.7487 21.4562 20.6945 21.418 20.6499 21.37L14.1699 14.89C14.0771 14.7972 14.0249 14.6713 14.0249 14.54C14.0249 14.4087 14.0771 14.2828 14.1699 14.19C14.2627 14.0972 14.3886 14.045 14.5199 14.045C14.6512 14.045 14.7771 14.0972 14.8699 14.19L21.3499 20.67C21.3977 20.7149 21.4358 20.7691 21.4619 20.8293C21.488 20.8895 21.5014 20.9544 21.5014 21.02C21.5014 21.0856 21.488 21.1505 21.4619 21.2107C21.4358 21.2709 21.3977 21.3251 21.3499 21.37C21.3052 21.418 21.251 21.4562 21.1907 21.482C21.1305 21.5079 21.0655 21.5208 20.9999 21.52Z" fill="black"/>
                    </svg>
                </button>
            </div>
            <ul class="topbar_list"> 
                <li class="topbar_item">
                    <a href="{{  request()->path() =='' || request()->path() =='/' ? '/ro' : route('setlocale', 'ro') }}" class="topbar_link {{ app()->getLocale() == 'ro' ? 'active' : '' }}">Ro</a></li>
                <li class="topbar_item">
                    <a href="{{ request()->path() =='' || request()->path() =='/' ? '/en' : route('setlocale', 'en') }}" class="topbar_link {{ app()->getLocale() == 'en' ? 'active' : '' }}">En</a>
                </li>
                <li class="topbar_item">
                    <a href="{{  request()->path() =='' || request()->path() =='/' ? '/ru' : route('setlocale', 'ru') }}" class="topbar_link {{ app()->getLocale() == 'ru' ? 'active' : '' }}">Ru</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="header">
    <div class="container header-container">
        <div class="header_logo">
            <a href="/">
                <img src="/img/logo.svg" alt="logo">
            </a>
        </div>

        <div class="burger">
            <span></span>
            <span></span>
        </div>

        <nav class="header_nav">
            <ul class="header_list">
                @foreach($navMenu as $value)
                    <li class="header_item {{ (isset($activeMenu) && $activeMenu == $value->id ? 'active' : '') }}">
                        <a class="header_link" href="{{ Route::has($value->slug) ? route($value->slug) : route('info',['slug' =>$value->slug]) }}">
                            {{ $value->getTranslatedAttribute('name') }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <div class="cart_header">
            <div class="header_cart cart @if(session('cart') && count(session('cart')) > 0) active @endif">
                <a href="{{ route('cart') }}"><img src="/img/cart.svg" alt=""></a>
                <span class="cart_quantity cart__quantity">
                    @if(session('cart') && count(session('cart')) > 0)
                        @php $totalCount = 0; @endphp
                        @foreach(getCartItem() as $cartItem)
                            @php $totalCount = $totalCount+$cartItem->count; @endphp
                        @endforeach
                        {{ $totalCount }}
                    @else
                        0
                    @endif
                </span>

                <div class="cart_content">
                    @include("layouts.popup-cart-content")
                </div>
            </div>
        </div>
    </div>
</header>

<img src="/img/Pplg.png" class="shopBee shopBee1" alt="">
<img src="/img/shopbee2.png" class="shopBee shopBee2" alt="">
<img src="/img/shopBee3.png" class="shopBee shopBee3" alt="">
<img src="/img/shopBee4.png" class="shopBee shopBee4" alt="">
<!-- <img src="/img/Pplg.png" class="shopBee shopBee5" alt=""> -->
<!-- <img src="/img/shopBee6.png" class="shopBee shopBee6" alt=""> -->
<!-- <img src="/img/shopBee7.png" class="shopBee shopBee7" alt=""> -->