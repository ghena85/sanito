@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ env('APP_NAME')." - ".$series->getTranslatedAttribute('name') }}
@stop

{{-- content --}}

@section('content')
    
    @include('series.detail.header')

    @include('series.detail.about-section')

    @include('series.detail.touse')


    @if($series->youtube1)
        <div class="series_youtube_1">
            <div class="container">
                <a href="{{ $series->youtube1 }}"  data-fslightbox="gallery"  >
                    <button class="icon-play"></button>
                    <img src="{{ url('storage/'.$series->youtube1_image) }}" >
                </a>
            </div>
        </div>
    @endif

    @include('series.detail.characteristics')

    @include('series.detail.review')

    @include('series.detail.similar')

@endsection
