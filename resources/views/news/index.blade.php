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
                                {{ $value->getTranslatedAttribute('name') }}
                            </h2>
                            <p class="blog-article__descr">
                                {{ $value->getTranslatedAttribute('description') }}
                            </p>
                            <data class="blog-article__data">
                                {{ $value->getTranslatedAttribute('date') }}
                            </data>
                            <a class="blog-article__view" href="{{ route('news-detail',['id' => $value->id,'slug' => $value->slug]) }}">
                                {{ $vars['blog-more-hero'] }}
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach



            <div class="blog-articles">

                @foreach($newsList as $key => $value)
                        @include("news.news-item")
                @endforeach

            </div>
            <div class="pagination">
                {{ $newsList->links('layouts.pagination') }}
            </div>
        </div>
    </main>
@stop