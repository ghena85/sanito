@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ env('APP_NAME')." - ".$page->getTranslatedAttribute('name') }}
@stop

{{-- content --}}

@section('content')
    
    @include('product.single-product')

    @include('product.about-section')

    @include('product.characteristics')

    @include('product.review')

    @include('product.slider')

@endsection