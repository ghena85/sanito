@extends('layouts.default')

@section('title')
    {{ env('APP_NAME')." - ".$page->getTranslatedAttribute('name') }}
@endsection

@section('content')
    
    @include('about/hero')

    @include('about/product-slider')

@endsection