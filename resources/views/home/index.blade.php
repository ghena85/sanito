@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    @include("home.slider")


@stop
