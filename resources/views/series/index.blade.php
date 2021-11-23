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
                        <a href="{{ route('category') }}" class="breadcrumb-list__link">Categories</a>
                    </li>
                    @if($category->parentId)
                        <li class="breadcrumb-list__item">
                            <a href="{{ route('categoryDetail',['slug' => $category->parentId->slug]) }}"  class="breadcrumb-list__link">
                                {{ $category->parentId->getTranslatedAttribute('name') }}
                            </a>
                        </li>
                    @endif
                    <li class="breadcrumb-list__item">
                        <a href="{{ route('series',['slug' => $category->slug]) }}"  class="breadcrumb-list__link">
                            {{ $category->getTranslatedAttribute('name') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="page-grid single-category">
        <div class="container">
            @php
              $class = $category->parentId->id != 23 ? 'no-sidebar' : '';
            @endphp
            <div class="page-grid__content {{ $class }}">

               @if($category->parentId->id == 23)
                 @include("series.filter.left-sidebar")
               @endif

                <div class="page-grid__products products">

                    <div class="products-sort desktop">

                        @include("series.filter.sort-by")

                        @include("series.filter.selected-items")

                    </div>

                    {{--@include("series.index-sort-mobile")--}}

                    <div class="series_list_area">
                        @include("series.filter.series-list")
                    </div>

                    <div class="pagination pagination_list_area">
                        @include("series.filter.pagination")
                    </div>

                    @include("series.banners-disabled")

                </div>

            </div>
        </div>
    </div>

@endsection

@include("series.filter.js")