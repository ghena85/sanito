@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    <div class="under-header">
        <div class="container under-header__container">
            <div class="header-category">
                <div class="header-category__select">
                    {{ $page->getTranslatedAttribute('name') }}

                    <span class="icon-chevron down"></span>
                </div>
                <div class="header-category__dropdown category-dropdown">
                    <ul class="category-dropdown__list">
                        <li class="category-dropdown__item">
                            <div class="category-dropdown__button">
                                <img src="img/ghiveci.svg" alt="ghiveci">
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
                                <img src="img/plant.svg" alt="plant">
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
                                <img src="img/bucket.svg" alt="bucket">
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
                                <img src="img/dish.svg" alt="dish">
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
                    <li class="navbar__item"><a href="../about.html">About us</a></li>
                    <li class="navbar__item"><a href="../contact.html">Contacts</a></li>
                    <li class="navbar__item"><a href="../category.html">Categories</a></li>
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

@stop