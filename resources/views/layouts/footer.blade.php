
<footer class="footer">
    <div class="container">
        <div class="footer-body">
            <div class="footer-main">
                <div class="footer-logo">
                    <a href="/"><img src="{{ url('img/logo.svg') }}" alt="logo"></a>
                </div>
                <div class="separator"></div>

                <div class="footer-contacts contacts">
                    <address>{{ $vars['contact-loc'] }}</address>
                    <a href="tel:{{ $vars['footer-tel'] }}" class="phone">
                        <span class="icon-phone"></span>{{ $vars['footer-tel'] }}
                    </a>
                </div>
            </div>

            <div class="footer__menu menu-footer">
                <div class="menu-footer__column">
                    <h4 class="menu-footer__title footer-title">{{ $vars['categories'] }}</h4>
                    <ul class="menu-footer__list">

                        @foreach ($categories as $value)
                            @if($value->id != 46)
                                <li><a href="{{ route('categoryDetail',['categorySlug' => $value->slug]) }}" class="menu-footer__link">{{ $value->getTranslatedAttribute('name') }}</a></li>
                            @endif
                        @endforeach

                    </ul>
                </div>

                <div class="menu-footer__column">
                    <h4 class="menu-footer__title footer-title">{{ $vars['about'] }}</h4>
                    <ul class="menu-footer__list">
                        @foreach($footerMenu as $value)
                            <li class="{{ (isset($activeMenu) && $activeMenu == $value->id ? 'active' : '') }}">
                                <a class="menu-footer__link" href="{{ Route::has($value->slug) ? route($value->slug) : route('info',['slug' =>$value->slug]) }}">
                                    {{ $value->getTranslatedAttribute('name') }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="menu-footer__column">
                    <h4 class="menu-footer__title footer-title">{{ $vars['information'] }}</h4>
                    <ul class="menu-footer__list">
                        @foreach ($footerMenu2 as $value)
                            <li>
                                <a href="{{ Route::has($value->slug) ? route($value->slug) : route('info',['slug' =>$value->slug]) }}" class="menu-footer__link">
                                    {{ $value->getTranslatedAttribute('name') }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            <div class="footer__social social">
                <h4 class="menu-footer__title footer-title">{{ $vars['follow_us'] }}</h4>

                <ul class="social__list">
                    <li>
                        <a href="{{ setting('.facebook_link') }}" class="social__item icon-facebook"></a>
                    </li>
                    <li>
                        <a href="{{ setting('.instagram_link') }}" class="social__item icon-instagram"></a>
                    </li>
                    <li>
                        <a href="{{ setting('.youtube_link') }}" class="social__item icon-youtube"></a>
                    </li>
                    <li>
                        <a href="{{ setting('.linkedin_link') }}" class="social__item icon-linkedin"></a>
                    </li>
                </ul>

                <div class="social__payment">
                    <img src="{{ url('/img/visa.svg') }}" alt="visa">
                    <img src="{{ url('/img/mastercard.svg') }}" alt="mastercard">
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <small>© {{ $vars['2021_santino'] }}</small>
            <div class="social__payment">
                <img src="{{ url('/img/visa.svg') }}" alt="visa">
                <img src="{{ url('/img/mastercard.svg') }}" alt="mastercard">
            </div>
        </div>
    </div>
</footer>