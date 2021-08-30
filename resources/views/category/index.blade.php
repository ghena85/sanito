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
                        <a href="#" class="breadcrumb-list__link">Home</a>
                    </li>
                    <li class="breadcrumb-list__item">
                        <a href="#" class="breadcrumb-list__link">Categories</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="page-grid">
        <div class="container">
            <div class="page-grid__content">

                @include("category.left-menu")

                <div class="page-grid__category category">
                    @foreach($categories as $value)
                        @include("category.item-list")
                    @endforeach


                </div>
            </div>
        </div>
    </div>

@endsection