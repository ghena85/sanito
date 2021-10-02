@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ env('APP_NAME')." - ".$series->getTranslatedAttribute('name') }}
@stop

{{-- content --}}

@section('content')
    
    @include('series.detail.header')

    @include('series.detail.about-section')

    @include('series.detail.characteristics')

    @include('series.detail.review')

    @include('series.detail.similar')

@endsection
