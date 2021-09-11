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
    
                <form action="#" class="search">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <button type="submit" class="icon-search"></button>
                </form>
    
                <div class="header-cart">
                    <div class="cart-button icon-bag">
                        <span class="header-cart__count">1</span>
                    </div>
                    <div class="header-cart__content cart-content">
                        <div class="cart-content_header">
                            <p>Cos de cumparaturi (2)</p>
                        </div>
                        <ul class="cart-content__list">
                            <li class="cart-content__item cart-item">
                                <img src="../img/product1.png" alt="product" class="cart-item__image">
                                <div class="cart-item__info">
                                    <a href="#" class="cart-item__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/Anthracite, 8.5 inch</a>
                                    <div class="cart-item__meta">
                                        <p class="cart-item__price">de la <span>150LEI</span> <b class="discount">120 LEI</b> </p>
                                        <span class="cart-item__quantity">Cantitate : 1</span>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-content__item cart-item">
                                <img src="../img/product2.png" alt="product" class="cart-item__image">
                                <div class="cart-item__info">
                                    <a href="#" class="cart-item__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/Anthracite, 8.5 inch</a>
                                    <div class="cart-item__meta">
                                        <p class="cart-item__price">de la <b>120 LEI</b> </p>
                                        <span class="cart-item__quantity">Cantitate : 1</span>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-content__item cart-item">
                                <img src="../img/product1.png" alt="product" class="cart-item__image">
                                <div class="cart-item__info">
                                    <a href="#" class="cart-item__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/Anthracite, 8.5 inch</a>
                                    <div class="cart-item__meta">
                                        <p class="cart-item__price">de la <span>150LEI</span> <b class="discount">120 LEI</b> </p>
                                        <span class="cart-item__quantity">Cantitate : 1</span>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-content__item cart-item">
                                <img src="../img/product2.png" alt="product" class="cart-item__image">
                                <div class="cart-item__info">
                                    <a href="#" class="cart-item__name">Santino Self-Watering Hanging Basket VISTA - Anthracite/Anthracite, 8.5 inch</a>
                                    <div class="cart-item__meta">
                                        <p class="cart-item__price">de la <b>120 LEI</b> </p>
                                        <span class="cart-item__quantity">Cantitate : 1</span>
                                    </div>
                                </div>
                            </li>
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
                                <b class="orange">450 LEI</b>
                            </div>
                        </div>
                        <div class="cart-content__navigation">
                            <a href="../checkout.html" class="accent-btn">Finalizare comenda</a>
                            <a href="../cart.html" class="outline-btn">Cos de cumparaturi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="under-header">
            <div class="container under-header__container">
                <div class="header-category">
                    <div class="header-category__select">
                        <a href="{{ route('category') }}" class="white">Category</a>
                        <span class="icon-chevron down"></span>
                    </div>
                    <div class="header-category__dropdown category-dropdown">
                        <ul class="category-dropdown__list">
                            <li class="category-dropdown__item">
                                <div class="category-dropdown__button">
                                    <img src="/img/ghiveci.svg" alt="ghiveci">
                                    <span class="category-dropdown__name">Ghivece</span>
                                    <span class="icon-chevron"></span>
                                </div>
                                <ul class="category-dropdown__sublist category-sublist">
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="category-dropdown__item">
                                <div class="category-dropdown__button">
                                    <img src="/img/plant.svg" alt="plant">
                                    <span class="category-dropdown__name">Gradina</span>
                                    <span class="icon-chevron"></span>
                                </div>
                                <ul class="category-dropdown__sublist category-sublist">
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="category-dropdown__item">
                                <div class="category-dropdown__button">
                                    <img src="/img/bucket.svg" alt="bucket">
                                    <span class="category-dropdown__name">Gospodarie</span>
                                    <span class="icon-chevron"></span>
                                </div>
    
                                <ul class="category-dropdown__sublist category-sublist">
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="category-dropdown__item">
                                <div class="category-dropdown__button">
                                    <img src="/img/dish.svg" alt="dish">
                                    <span class="category-dropdown__name">Uz casnic</span>
                                    <span class="icon-chevron"></span>
                                </div>
    
                                <ul class="category-dropdown__sublist category-sublist">
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                    <li class="category-sublist__item">
                                        <a href="../single-category.html">Ghiveci Indoor</a>
                                    </li>
                                </ul>
                            </li>
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
    
                <!-- <div class="login-link">
                    <a href="#">Login/Register</a>
                </div> -->
    
                <div class="languages">
                    <div class="current-language">
                        EN
                        <span class="icon-chevron down"></span>
                    </div>
                    <div class="language-dropdown">
                        <a href="#">RU</a>
                        <a href="#">RO</a>
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
                <a href="/"><img src="/img/logo.svg" alt="#"></a>
            </div>
    
            <div class="languages">
                <div class="current-language">
                    EN
                    <span class="icon-chevron down"></span>
                </div>
                <div class="language-dropdown">
                    <a href="#">RU</a>
                    <a href="#">RO</a>
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
                <li class="navbar-category__item">
                    <div class="navbar-category__button">
                        <img src="/img/ghiveci.svg" alt="ghiveci">
                        <span class="navbar-category__name">Ghivece</span>
                        <span class="icon-chevron down"></span>
                    </div>
                    <ul class="navbar-category__sublist category-sublist">
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                    </ul>
                </li>
    
                <li class="navbar-category__item">
                    <div class="navbar-category__button">
                        <img src="/img/plant.svg" alt="plant">
                        <span class="navbar-category__name">Gradina</span>
                        <span class="icon-chevron down"></span>
                    </div>
                    <ul class="navbar-category__sublist category-sublist">
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                    </ul>
                </li>
    
                <li class="navbar-category__item">
                    <div class="navbar-category__button">
                        <img src="/img/bucket.svg" alt="bucket">
                        <span class="navbar-category__name">Gospodarie</span>
                        <span class="icon-chevron down"></span>
                    </div>
                    <ul class="navbar-category__sublist category-sublist">
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                    </ul>
                </li>
    
                <li class="navbar-category__item">
                    <div class="navbar-category__button">
                        <img src="/img/dish.svg" alt="dish">
                        <span class="navbar-category__name">Uz casnic</span>
                        <span class="icon-chevron down"></span>
                    </div>
                    <ul class="navbar-category__sublist category-sublist">
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                        <li class="category-sublist__item">
                            <a href="../single-category.html">Ghiveci Indoor</a>
                        </li>
                    </ul>
                </li>
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