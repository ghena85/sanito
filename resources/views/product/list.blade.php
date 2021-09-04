@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ env('APP_NAME')." - ".$page->getTranslatedAttribute('name') }}
@stop

{{-- content --}}

@section('content')

    @include('productB.single-product')

    @include('productB.about-section')

    @include('productB.characteristics')

    @include('productB.review')

    @include('productB.slider')

@endsection