@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')


    <div class="overlay"></div>


    <main class="blog">
        <div class="container">
            <div class="breadcrumb">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item">
                        <a href="#" class="breadcrumb-list__link">Home</a>
                    </li>
                    <li class="breadcrumb-list__item">
                        <a href="#" class="breadcrumb-list__link">Blog</a>
                    </li>
                </ul>
            </div>


            <div class="blog-article__background" style="background: url('./img/blog_bg.jpg') 50% 50% / cover no-repeat; height: 400px; width: 100%;">
                <div class="blog-article__main">
                    <h2 class="blog-article__title main">
                        Because home is more important than ever
                    </h2>
                    <p class="blog-article__descr">
                        As a company built around the importance of home, we are passionate about helping Habitat for Humanity work alongside families to build affordable housing
                    </p>
                    <data class="blog-article__data">
                        22 Apr 2021
                    </data>
                    <a class="blog-article__view" href="single.html">
                        Citeste mai mult
                    </a>
                </div>
            </div>
            <div class="blog-articles">
                <div class="blog-article">
                    <div class="blog-article__video">
                        <video class="video" src="img/Flower_3.mp4" muted loop></video>
                    </div>
                    <div class="article">

                        <h3 class="blog-article__title">
                            Because home is more important than ever
                        </h3>
                        <p class="blog-article__descr">
                            In Blooms We Trust Some of the most commonly found non-CBD ingredients in our products are – you guessed it – flowers or flower-derived oils and e..
                        </p>
                        <data class="blog-article__data">
                            22 Apr 2021
                        </data>
                        <a class="blog-article__view" href="single.html">
                            Citeste mai mult
                        </a>
                    </div>
                </div>
                <div class="blog-article">
                    <div class="blog-article__video">
                        <video class="video" src="img/Flower_3.mp4" muted loop></video>
                    </div>
                    <div class="article">

                        <h3 class="blog-article__title">
                            PLANT-BASED TREATMENT OPTIONS FOR ENDOMETRIOSIS

                        </h3>
                        <p class="blog-article__descr">
                            In Blooms We Trust Some of the most commonly found non-CBD ingredients in our products are – you guessed it – flowers or flower-derived oils and e..
                        </p>
                        <data class="blog-article__data">
                            22 Apr 2021
                        </data>
                        <a class="blog-article__view" href="single.html">
                            Citeste mai mult
                        </a>
                    </div>
                </div>
                <div class="blog-article">
                    <div class="blog-article__video">
                        <video class="video" src="img/Flower_3.mp4" muted loop></video>
                    </div>
                    <div class="article">

                        <h3 class="blog-article__title">
                            Because home is more important than ever
                        </h3>
                        <p class="blog-article__descr">
                            In Blooms We Trust Some of the most commonly found non-CBD ingredients in our products are – you guessed it – flowers or flower-derived oils and e..
                        </p>
                        <data class="blog-article__data">
                            22 Apr 2021
                        </data>
                        <a class="blog-article__view" href="single.html">
                            Citeste mai mult
                        </a>
                    </div>
                </div>
                <div class="blog-article">
                    <div class="blog-article__video">
                        <video class="video" src="img/Flower_3.mp4" muted loop></video>
                    </div>
                    <div class="article">

                        <h3 class="blog-article__title">
                            Because home is more important than ever
                        </h3>
                        <p class="blog-article__descr">
                            In Blooms We Trust Some of the most commonly found non-CBD ingredients in our products are – you guessed it – flowers or flower-derived oils and e..
                        </p>
                        <data class="blog-article__data">
                            22 Apr 2021
                        </data>
                        <a class="blog-article__view" href="single.html">
                            Citeste mai mult
                        </a>
                    </div>
                </div>
                <div class="blog-article">
                    <div class="blog-article__video">
                        <video class="video" src="img/Flower_3.mp4" muted loop></video>
                    </div>
                    <div class="article">

                        <h3 class="blog-article__title">
                            Because home is more important than ever
                        </h3>
                        <p class="blog-article__descr">
                            In Blooms We Trust Some of the most commonly found non-CBD ingredients in our products are – you guessed it – flowers or flower-derived oils and e..
                        </p>
                        <data class="blog-article__data">
                            22 Apr 2021
                        </data>
                        <a class="blog-article__view" href="single.html">
                            Citeste mai mult
                        </a>
                    </div>
                </div>
                <div class="blog-article">
                    <div class="blog-article__video">
                        <video class="video" src="img/Flower_3.mp4" muted loop></video>
                    </div>
                    <div class="article">

                        <h3 class="blog-article__title">
                            Because home is more important than ever
                        </h3>
                        <p class="blog-article__descr">
                            In Blooms We Trust Some of the most commonly found non-CBD ingredients in our products are – you guessed it – flowers or flower-derived oils and e..
                        </p>
                        <data class="blog-article__data">
                            22 Apr 2021
                        </data>
                        <a class="blog-article__view" href="single.html">
                            Citeste mai mult
                        </a>
                    </div>
                </div>
                <div class="blog-article">
                    <div class="blog-article__video">
                        <video class="video" src="img/Flower_3.mp4" muted loop></video>
                    </div>
                    <div class="article">

                        <h3 class="blog-article__title">
                            Because home is more important than ever
                        </h3>
                        <p class="blog-article__descr">
                            In Blooms We Trust Some of the most commonly found non-CBD ingredients in our products are – you guessed it – flowers or flower-derived oils and e..
                        </p>
                        <data class="blog-article__data">
                            22 Apr 2021
                        </data>
                        <a class="blog-article__view" href="single.html">
                            Citeste mai mult
                        </a>
                    </div>
                </div>
                <div class="blog-article">
                    <div class="blog-article__video">
                        <video class="video" src="img/Flower_3.mp4" muted loop></video>
                    </div>
                    <div class="article">

                        <h3 class="blog-article__title">
                            Because home is more important than ever
                        </h3>
                        <p class="blog-article__descr">
                            In Blooms We Trust Some of the most commonly found non-CBD ingredients in our products are – you guessed it – flowers or flower-derived oils and e..
                        </p>
                        <data class="blog-article__data">
                            22 Apr 2021
                        </data>
                        <a class="blog-article__view" href="single.html">
                            Citeste mai mult
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <button class="icon-slider-arrow"></button>
                <ul class="pagination-list">
                    <li class="pagination-list__item active">
                        <a href="#" class="pagination-list__link">1</a>
                    </li>
                    <li class="pagination-list__item">
                        <a href="#" class="pagination-list__link">2</a>
                    </li>
                    <li class="pagination-list__item">
                        <a href="#" class="pagination-list__link">3</a>
                    </li>
                    <li class="pagination-list__item">
                        <a href="#" class="pagination-list__link">4</a>
                    </li>
                </ul>
                <button class="icon-slider-arrow slider-arrow__next"></button>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-body">
                <div class="footer-main">
                    <div class="footer-logo">
                        <a href="/"><img src="img/logo.svg" alt="logo"></a>
                    </div>
                    <div class="separator"></div>

                    <div class="footer-contacts contacts">
                        <address>2118 Thornridge Cir. Syracuse, Connecticut 35624</address>
                        <a href="tel:+37367525214" class="phone">
                            <span class="icon-phone"></span> +373 67 525 214
                        </a>
                        <p>Order call back</p>
                    </div>
                </div>

                <div class="footer__menu menu-footer">
                    <div class="menu-footer__column">
                        <h4 class="menu-footer__title footer-title">Categories</h4>
                        <ul class="menu-footer__list">
                            <li><a href="../single-category.html" class="menu-footer__link">Ghiveci</a></li>
                            <li><a href="../single-category.html" class="menu-footer__link">Gradina</a></li>
                            <li><a href="../single-category.html" class="menu-footer__link">Gospodarie</a></li>
                            <li><a href="../single-category.html" class="menu-footer__link">Uz casnic</a></li>
                        </ul>
                    </div>

                    <div class="menu-footer__column">
                        <h4 class="menu-footer__title footer-title">About</h4>
                        <ul class="menu-footer__list">
                            <li><a href="../about.html" class="menu-footer__link">About us</a></li>
                            <li><a href="../contact.html" class="menu-footer__link">Contacts</a></li>
                            <li><a href="../blog.html" class="menu-footer__link">Blog</a></li>
                        </ul>
                    </div>

                    <div class="menu-footer__column">
                        <h4 class="menu-footer__title footer-title">Information</h4>
                        <ul class="menu-footer__list">
                            <li><a href="#" class="menu-footer__link">Privacy policy</a></li>
                            <li><a href="#" class="menu-footer__link">Termes and conditions</a></li>
                            <li><a href="#" class="menu-footer__link">Delivery and payment</a></li>
                            <li><a href="#" class="menu-footer__link">Guaranty</a></li>
                        </ul>
                    </div>

                </div>

                <div class="footer__social social">
                    <h4 class="menu-footer__title footer-title">Follow us on</h4>

                    <ul class="social__list">
                        <li>
                            <a href="#" class="social__item icon-facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="social__item icon-instagram"></a>
                        </li>
                        <li>
                            <a href="#" class="social__item icon-youtube"></a>
                        </li>
                        <li>
                            <a href="#" class="social__item icon-linkedin"></a>
                        </li>
                    </ul>

                    <div class="social__payment">
                        <img src="img/visa.svg" alt="visa">
                        <img src="img/mastercard.svg" alt="mastercard">
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <small>© 2021 Santino</small>
                <div class="social__payment">
                    <img src="img/visa.svg" alt="visa">
                    <img src="img/mastercard.svg" alt="mastercard">
                </div>
            </div>
        </div>
    </footer>


    <div class="news_main" style="background: url({{ url('storage/'.$page->image) }}) 50% 50% / cover no-repeat">
        <div class="container">
            <h3 class="news_title">{!! $page->getTranslatedAttribute('short_text') !!}</h3>
        </div>
    </div>

    <div class="news">
        <div class="container">
            <div class="news_body">
                @foreach($newsList as $value)
                    @include("news.news-item")
                @endforeach
            </div>
        </div>
    </div>

    <div class="news_pagination">
        {{ $newsList->links('layouts.pagination') }}
    </div>

@stop