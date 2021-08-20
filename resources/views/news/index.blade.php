@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')


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