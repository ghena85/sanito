@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ env('APP_NAME')." - ".$page->getTranslatedAttribute('name') }}
@stop

{{-- content --}}
@section('content')


    <div class="overlay"></div>


    <main class="blog">
        <div class="container">
            <div class="breadcrumb">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item">
                        <a href="{{ route('home') }}" class="breadcrumb-list__link">{{ $vars['home'] }}</a>
                    </li>
                    <li class="breadcrumb-list__item">
                        <a href="{{ route('news') }}" class="breadcrumb-list__link">{{ $vars['blog'] }}</a>
                    </li>
                </ul>
            </div>

            @foreach($newsList as  $key => $value)
                @if($key == 0)
                    <div class="blog-article__background" style="background: url('./img/blog_bg.jpg') 50% 50% / cover no-repeat; height: 400px; width: 100%;">
                        <div class="blog-article__main">
                            <h2 class="blog-article__title main">
                                {{ $vars['blog-title-hero'] }}
                            </h2>
                            <p class="blog-article__descr">
                                {{ $vars['blog-desc-hero'] }}
                            </p>
                            <data class="blog-article__data">
                                {{ $vars['blog-date-hero'] }}
                            </data>
                            <a class="blog-article__view" href="single.html">
                                {{ $vars['blog-more-hero'] }}
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach



            <div class="blog-articles">

                @foreach($newsList as  $key =>  $value)
                    @if($key > 0)
                        @include("news.news-item")
                    @endif
                @endforeach

            </div>
            <div class="pagination">
                {{ $newsList->links('layouts.pagination') }}

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
@stop