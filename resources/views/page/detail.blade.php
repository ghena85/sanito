@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    <main>
        <div class="container">
            <div class="breadcrumb">
                <ul class="breadcrumb-list ">
                    <li class="breadcrumb-list__item">
                        <a href="{{ route('home') }}" class="breadcrumb-list__link">Home</a>
                    </li>
                    <li class="breadcrumb-list__item">
                        <a href="#" class="breadcrumb-list__link"> {{ $page->getTranslatedAttribute('name') }}</a>
                    </li>
                </ul>
            </div>
            @if($page->image)
                <div class="about-background" style="background: url('{{ url('storage/'.$page->image) }}') 50% 50% / cover no-repeat;width: 100%; height: 400px;;"></div>
            @endif
            <div class="about-info">
                <h2>{{ $page->getTranslatedAttribute('name') }}</h2>
                {!! $page->getTranslatedAttribute('text') !!}
            </div>

        </div>


    </main>

@stop