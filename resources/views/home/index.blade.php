@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

<div class="overlay"></div>

<main>

    @include("home.slider")

    @include("home.fixed-contact")

    @include("home.slider-categ")

    @include("home.most-popular")

    @include("home.products")

    @include("home.offer-section")

    @include("home.newin")

    @include("home.about")

    @include("home.google-maps")

    @include("home.contacts-section")

    @include("home.transport")

    @include("home.subscribe")

</main>

@stop
