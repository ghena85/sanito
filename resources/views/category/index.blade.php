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
                        <a href="{{ route('home') }}" class="breadcrumb-list__link">{{ $vars['home'] }}</a>
                    </li>
                    <li class="breadcrumb-list__item">
                        <a href="{{ route('category') }}" class="breadcrumb-list__link">{{ $vars['сategorii'] }}</a>
                    </li>
                    @if(isset($category))
                        <li class="breadcrumb-list__item">
                            <a href="{{ route('series',['slug' => $category->slug])  }}" class="breadcrumb-list__link">
                                {{ $category->getTranslatedAttribute('name') }}
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <div class="page-grid">
        <div class="container">
            <div class="page-grid__content">

                @include("category.left-menu")

                <div class="page-grid__category category">
                    @if(isset($subCategories))
                        @foreach($subCategories as $value)
                            @include("category.item-list")
                        @endforeach
                    @else
                        @foreach($categories as $value)
                            @if($value->id != 46)
                                @include("category.item-list")
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection