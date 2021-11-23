    <header class="desktop-header">
        <div class="upper-header">
            <div class="container upper-header__container">
                <div class="header-logo">
                    <a href="{{ route("home") }}"><img src="/img/logo.svg" alt="logo"></a>
                </div>
    
                <div class="header-info">
                    <div class="header-info__column">
                        <span class="icon-time"></span>
                        <div class="header-info__text">
                            <p>{{ $vars['header_work_text'] }}</p>
                            <p>{{ $vars['header-work'] }}</p>
                        </div>
                    </div>
    
                    <div class="header-info__column">
                        <span class="icon-phone"></span>
                        <div class="header-info__text">
                            <a href="#">{{ $vars['header-tel'] }}</a>
                            <p>{{ $vars['header_tel_text'] }}</p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('search') }}" class="search">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <button type="submit" class="icon-search"></button>
                </form>
    
                <div class="header-cart">
                    <div class="cart-button icon-bag">
                        <span class="header-cart__count cart__quantity">
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
                    </div>
                    <div class="header-cart__content cart-content cart_content">
                        @include("layouts.popup-cart-content")
                    </div>
                </div>
            </div>
        </div>
    
        <div class="under-header">
            <div class="container under-header__container">
                <div class="header-category">
                    <div class="header-category__select">
                        <a href="{{ route('category') }}" class="white">{{ $vars['category'] }}</a>
                        <span class="icon-chevron down"></span>
                    </div>
                    <div class="header-category__dropdown category-dropdown">
                        <ul class="category-dropdown__list">
                            @foreach($categories as $value)
                                @if($value->id != 46)
                                    <li class="category-dropdown__item">
                                        <div class="category-dropdown__button">
                                            {!! $value->svg !!}
                                            {{--<img src="/img/ghiveci.svg" alt="ghiveci">--}}
                                            <span class="category-dropdown__name">{{ $value->getTranslatedAttribute('name') }}</span>
                                            <span class="icon-chevron"></span>
                                        </div>
                                        @if($value->childrens)
                                            <ul class="category-dropdown__sublist category-sublist">
                                                @foreach($value->childrens as $svalue)
                                                    <li class="category-sublist__item">
                                                        <a href="{{ route('series',['categorySlug' => $svalue->slug]) }}">
                                                            {{ $svalue->getTranslatedAttribute('name') }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
    
                <nav class="navbar">
                    <ul class="navbar__list">
                        @foreach($navMenu as $value)
                            <li class="navbar__item {{ (isset($activeMenu) && $activeMenu == $value->id ? 'active' : '') }}">
                                <a href="{{ Route::has($value->slug) ? route($value->slug) : route('info',['slug' =>$value->slug]) }}">
                                    {{ $value->getTranslatedAttribute('name') }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <div class="languages">
                    <div class="current-language">
                        @foreach (Config::get('languages') as $key => $lang)
                            @if ($key == app()->getLocale())
                                {{ $lang }}
                            @endif
                        @endforeach
                        <span class="icon-chevron down"></span>
                    </div>
                    <div class="language-dropdown">
                        @foreach (Config::get('languages') as $key => $lang)
                            @if ($key != app()->getLocale())
                                <a href="{{  request()->path() =='' || request()->path() =='/' ? "/$key" : route('setlocale', "$key") }}">
                                    {{ $lang }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    
    
    <header class="mobile-header">
        <div class="upper__mobile-header">
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
    
            <div class="header-logo">
                <a href="{{ route('home') }}"><img src="{{ url('img/logo.svg') }}"></a>
            </div>
    
            <div class="languages">
                <div class="current-language">
                    @foreach (Config::get('languages') as $key => $lang)
                        @if ($key == app()->getLocale())
                            {{ $lang }}
                        @endif
                    @endforeach
                    <span class="icon-chevron down"></span>
                </div>
                <div class="language-dropdown">
                    @foreach (Config::get('languages') as $key => $lang)
                        @if ($key != app()->getLocale())
                            <a href="{{  request()->path() =='' || request()->path() =='/' ? "/$key" : route('setlocale', "$key") }}">
                                {{ $lang }}
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
    
            <div class="header-cart">
                <a href="../cart.html">
                    <div class="cart-button icon-bag">
                        <span class="header-cart__count">1</span>
                    </div>
                </a>
            </div>
        </div>
    
        <nav class="mobile-navbar">
            <ul class="navbar-category">
                @foreach ($categories as $value)
                    <li class="navbar-category__item">
                        <div class="navbar-category__button">
                            {!! $value->svg !!}
                            <span class="navbar-category__name">{{ $value->getTranslatedAttribute('name') }}</span>
                            <span class="icon-chevron down"></span>
                        </div>
                        @if ($value->childrens)
                            <ul class="navbar-category__sublist category-sublist">
                                @foreach ($value->childrens as $svalue)
                                    <li class="category-sublist__item">
                                        <a href="{{ route('series',['categorySlug' => $svalue->slug]) }}">{{ $svalue->getTranslatedAttribute('name') }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
    
            <ul class="navbar-menu">
                @foreach($navMenu as $value)
                    <li class="header_item {{ (isset($activeMenu) && $activeMenu == $value->id ? 'active' : '') }}">
                        <a class="navbar-menu__item" href="{{ Route::has($value->slug) ? route($value->slug) : route('info',['slug' =>$value->slug]) }}">
                            {{ $value->getTranslatedAttribute('name') }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <form action="#" class="search">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit" class="icon-search"></button>
        </form>
    </header>