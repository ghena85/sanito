@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    <div class="news_single">
        <div class="container">
            <div class="news_single-body">
                <div class="news_about">
                    <img src="{{ url('storage/'.$news->image) }}" class="news_img" alt="single">
                    <h2 class="news_about-title"> {{ $news->getTranslatedAttribute('name') }}</h2>
                    {!! $news->getTranslatedAttribute('text') !!}
                    <div class="news_border"></div>
                    <div class="news_social">
                        <img src="/img/fb.svg" alt="facebook">
                        <img src="/img/twt.svg" alt="twitter">
                        <img src="/img/g+.svg" alt="google">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news_alternative">
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
    </div>

@stop