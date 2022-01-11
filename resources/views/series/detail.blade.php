@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ env('APP_NAME')." - ".$series->getTranslatedAttribute('name') }}
@stop

{{-- content --}}

@section('content')
    
    @include('series.detail.header')

    @include('series.detail.about-section')

    @if($series->getTranslatedAttribute('how_to_use'))
        @include('series.detail.touse')
    @endif


    @if($series->getTranslatedAttribute('youtube1'))
        <div class="series_youtube_1" >
            <div class="container">
                <div class="series-image__cover" style="background: url('{{ app()->getLocale() == 'ro' ? url('storage/'.$series->youtube1_image) : url('storage/'.$series->youtube1_image_ru) }}') 50% 50% / cover no-repeat">
                    <a href="{{ $series->getTranslatedAttribute('youtube1') }}"  data-fslightbox="gallery"  >
                        <button class="icon-play"></button>
                        <!-- <img src="{{ url('storage/'.$series->youtube1_image) }}" > -->
                    </a>
                </div>
            </div>
        </div>
    @endif

    @include('series.detail.characteristics')

    @include('series.detail.review')

    @include('series.detail.similar')

@endsection
