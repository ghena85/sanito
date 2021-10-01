@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ env('APP_NAME')." - ".$page->getTranslatedAttribute('name')}}
@endsection

{{-- content --}}
@section('content')

<div class="overlay"></div>

<main>

    @include("home.slider")

    @include("home.fixed-contact")

    @include("home.slider-categ")

    {{--Top Vinzari--}}
    @include("home.most-popular")

    {{--Reduceri--}}
    @include("home.sale-products")

    @include("home.offer-section")

    @include("home.newin")

    @include("home.about")

    @include("home.google-maps")

    @include("home.contacts-section")

    @include("home.transport")

    @include("home.subscribe")

</main>

@stop
