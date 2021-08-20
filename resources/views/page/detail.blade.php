@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    <div class="container">
        {!! $page->getTranslatedAttribute('text') !!}
    </div>


@stop