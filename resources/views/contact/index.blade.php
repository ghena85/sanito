@extends("layouts.default")

@section('title')
    {{ env('APP_NAME')." - ".$page->getTranslatedAttribute('name')}}
@endsection


@section('content')
    
    @include("contact/contact-form")

    @include("home/google-maps")

    @include("contact/contact-block")

@endsection