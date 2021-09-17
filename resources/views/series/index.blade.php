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
                </ul>
            </div>
        </div>
    </div>

    <div class="page-grid single-category">
        <div class="container">
            <div class="page-grid__content">

               @include("series.filter.left-sidebar")

                <div class="page-grid__products products">

                    <div class="products-sort desktop">
                        <div class="products-sort__sort">
                            <span>Sort by: </span>
                            <button >Popular</button>
                            <button >New lines</button>
                            <button class="active">On sale</button>
                        </div>
                        <div class="products-sort__category">
                            <button class="category-btn">Window boxes <span class="icon-cancel"></span></button>
                            <button class="category-btn">Asti <span class="icon-cancel"></span></button>
                            <button class="reset">Resel all</button>
                        </div>
                    </div>

                    @include("series.index-sort-mobile")

                    @foreach($series as $value)
                        @include("series.item-list")
                    @endforeach


                    <div class="pagination">
                        <!--
                        <button class="icon-slider-arrow slider-arrow__prev"></button>
                        <ul class="pagination-list">
                            <li class="pagination-list__item active">
                                <a href="#" class="pagination-list__link">1</a>
                            </li>
                            <li class="pagination-list__item">
                                <a href="#" class="pagination-list__link">2</a>
                            </li>
                            <li class="pagination-list__item">
                                <a href="#" class="pagination-list__link">3</a>
                            </li>
                            <li class="pagination-list__item">
                                <a href="#" class="pagination-list__link">4</a>
                            </li>
                        </ul>
                        <button class="icon-slider-arrow slider-arrow__next"></button>
                        -->
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection