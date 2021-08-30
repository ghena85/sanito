@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $news->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

<main class="blog-detail">
    <div class="container">
        <div class="breadcrumb">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-list__item">
                    <a href="{{ route('home') }}" class="breadcrumb-list__link">Home</a>
                </li>
                <li class="breadcrumb-list__item">
                    <a href="{{ route('news') }}" class="breadcrumb-list__link">Blog</a>
                </li>
                <li class="breadcrumb-list__item">
                    <a href="#" class="breadcrumb-list__link">{{ $news->getTranslatedAttribute('name') }}</a>
                </li>
            </ul>
        </div>

        <div class="blog-detail__background" style="background: url('/img/blogdetail_bg.jpg') 50% 50% / cover no-repeat; height: 400px; width: 100%;"></div>

        <div>
            <div class="detail-post">
                <data class="detail-post__data">{{ $news->getTranslatedAttribute('date') }}</data>

                <h2>{{ $news->getTranslatedAttribute('name') }}</h2>
                    {!! $news->text !!}
                </div>
            </div>
        </div>

        <div class="post-slider ">
            <h2>
                {{ $vars['blog_detail_slider_title'] }}
            </h2>
            <div class="page__post-slider post-slider ">
                <div class="post-slider__body ">
                    <div class="post-slider__slider container ">
                        <div class="slider-post__body slider-container swiper ">
                            @foreach ($lastNews as $value)
                            @php
                                $thisname = $news->getTranslatedAttribute('name');
                                $newname = $value->getTranslatedAttribute('name');
                            @endphp
                            @if ($thisname != $newname)
                            <div class="slider-post__slide ">
                                <div class="blog-article ">
                                    <div class="blog-article__video ">
                                        <img src="{{ url('storage/'.$value->image) }} " alt=" ">
                                    </div>
                                    <div class="article ">
                                        <h3 class="blog-article__title ">
                                            {{ $value->getTranslatedAttribute('name') }}
                                        </h3>
                                        <p class="blog-article__descr ">
                                            {{ $value->getTranslatedAttribute('description') }}
                                        </p>
                                        <data class="blog-article__data ">
                                            {{ $value->getTranslatedAttribute('date') }}
                                        </data>
                                        <a class="blog-article__view " href="{{ route('news-detail',['id' => $value->id,'slug' => $value->slug]) }}"> 
                                            Citeste mai mult
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="slider-post-controls ">
                            <div class="slider-post-controls__dots swiper-dots"></div>
                            <div class="slider-post-controls__arrows slider-arrows">
                                <button type="button " class="slider-arrow slider-arrow__prev icon-slider-arrow ">
                                </button>
                                <button type="button " class="slider-arrow slider-arrow__next icon-slider-arrow ">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

    {{-- <div class="news_alternative">
        <div class="container">
            <h3 class="news_alternative-intro">Articole similare</h3>
            <div class="news_alternative-body">
                @foreach($lastNews as $value)
                    <div class="news_alternative-block">
                        <img src="{{ url('storage/'.$value->image) }}" class="news_alternative-img" alt="news">
                        <a href="{{ route('news-detail',['id' => $value->id,'slug' => $value->slug]) }}" class="news_alternative-title">
                            {{ $value->getTranslatedAttribute('name') }}
                        </a>
                        <p class="news_alternative-text">
                            {!! $value->getTranslatedAttribute('short_text') !!}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

@stop