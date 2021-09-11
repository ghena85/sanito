@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ env('APP_NAME')." - ".$product->getTranslatedAttribute('name') }}
@stop

{{-- content --}}

@section('content')
    
    @include('series.single-series')    

    @include('series.about-section')

    @include('series.characteristics')

    {{--@include('series.review')--}}

    @include('series.slider')

@endsection