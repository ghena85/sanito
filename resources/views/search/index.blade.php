@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')


    <div class="main" style="background: url('{{ url('storage/'.$page->image) }}') 50% 50% / cover no-repeat">
        <div class="container">
            <h2 class="main_title">{{ $page->getTranslatedAttribute('name') }}</h2>
            <p class="main_text">{!! $page->getTranslatedAttribute('short_text') !!}</p>
        </div>
    </div>

    <div class="shop_products">
        <div class="container">
            <div class="shop_products-body">
                @foreach($products as $key => $value)
                    @include("product.item-list")
                @endforeach
            </div>
        </div>
    </div>
    <div class="shop_pagination">
        {{ $products->fragment('categories')->links('layouts.pagination-products') }}
    </div>
@stop