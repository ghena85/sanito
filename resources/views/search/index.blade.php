@extends('layouts.default')

@section('title')
    {{ env('APP_NAME')." - ".$page->getTranslatedAttribute('name') }}
@endsection

@section('content')

    <div class="page-title">
        <div class="container">
            <div class="breadcrumb">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item">
                        <a href="{{ route('home') }}" class="breadcrumb-list__link">Home</a>
                    </li>
                    <li class="breadcrumb-list__item">
                        <a href="{{ route('home') }}" class="breadcrumb-list__link">Search</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="page-grid single-category">
        <div class="container">
            @php
                $class = 'no-sidebar';
            @endphp
            <div class="page-grid__content {{ $class }}">


                <div class="page-grid__products products">

                    <div class="series_list_area">
                        @include("series.filter.series-list")
                    </div>

                    <div class="pagination pagination_list_area">
                        {{ $series->setPath(route('search',['search' => $search]))->links('layouts.pagination') }}
                    </div>

                    @include("series.banners-disabled")

                </div>

            </div>
        </div>
    </div>

@endsection

@include("series.filter.js")