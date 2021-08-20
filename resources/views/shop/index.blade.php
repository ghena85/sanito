@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    <!-- <div class="main" style="background: url('{{ url('storage/'.$shop->image) }}') 50% 50% / cover no-repeat">
        <div class="container">
            <h2 class="main_title">{{ $shop->getTranslatedAttribute('name1') }}</h2>
            <p class="main_text">{!! $shop->getTranslatedAttribute('text1') !!}</p>
        </div>
    </div> -->

    <div class="shop">
        <div class="container"  id="categories">
            <div class="shop_body">
        <div class="filtre">
        <div class="container">
            <div data-spollers data-one-spoller class="block block_1">
                <h2 class="block-title">{{ $vars['filtreaza_dupa'] }}</h2>
                <div class="block_items">
                    <div class="block-item__control">
                        <button tabindex="-1" type="button" data-spoller class="block_item-button">
                            {{ $vars['categoria'] }}
                            <span class="plus"></span>
                        </button>
                    </div>

                    <div class="block-item__content block_list">
                        <ul class="block_ul">
                            <li class="block_item">
                                <button class="block_button js_category {{ $filters['category_id'] == '' ? 'active' : '' }}" data-id="">
                                    {{ $vars['toate'] }}
                                </button>
                            </li>
                            @foreach($categories as $value)
                                <li class="block_item">
                                    <button class="block_button js_category {{ $value->id == $filters['category_id'] ? 'active' : '' }}" data-id="{{ $value->id }}">
                                        {{ $value->getTranslatedAttribute('name') }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                        <input type="hidden" class="category_id" value="{{ $filters['category_id'] }}">
                    </div>
                </div>

                <div class="block_items">
                    <div class="block-item__control">
                        <button tabindex="-1" type="button" data-spoller class="block_item-button">
                            {{ $vars['pret'] }}
                            <span class="plus"></span>
                        </button>
                    </div>

                    <div class="block-item__content block-filters_price">
                        <div class="filters-price_slider" id="range-slider"></div>
                        <div class="filters-price_inputs" >
                            <input type="number" min="20" max="{{ $minPrice }}" placeholder="{{ $minPrice }}" class="filters-price_input price_start" id="input-1">
                            <input type="number" min="20" max="{{ $maxPrice }}" placeholder="{{ $maxPrice }}" class="filters-price_input price_end" id="input-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="shop_info">
                <h4 class="shop_title">{{ $shop->getTranslatedAttribute('name2') }}</h4>
                <p class="shop_text">
                    {!! $shop->getTranslatedAttribute('text2') !!}
                 </p>
            </div>
        </div>
        </div>
    </div>




    <!-- <div class="shop_order">
        <div class="container shop_container">
            <button class="shop_button {{ empty($category) ? 'active' : '' }}" onclick="window.location.href='{{ route($shop->slug) }}#categories'">{{ $vars['toate'] }}</button>
            @foreach($categories as $value)
                <button class="shop_button {{ request()->category_id == $value->id ? 'active' : '' }}" onclick="window.location.href='{{ route($shop->slug).'?category_id='.$value->id }}#categories'"> {{ $value->getTranslatedAttribute('name') }}</button>
            @endforeach
        </div>
    </div> -->

    <div class="shop_products">
        <div class="container">
            <div class="shop_products-body">
                @include("shop.products")
            </div>
        </div>
    </div>

    @if($shop->id == 1)

        @include("shop.product-promo")

    @endif
    <div class="shop_pagination">
       @include("shop.pagination")
    </div>
@stop

@section('footer_scripts')
    <script>

        var upUrl = new URL('{{ $filters['shop_id'] == 1 ? route('shop') : route('shop-antreprenori') }}');

        function filtreProducts() {

            upUrl.searchParams.delete('category_id');
            var category_id = $('.category_id').val();
            if(category_id > 0) {
                upUrl.searchParams.append('category_id', category_id);
            }

            //  Price from
            upUrl.searchParams.delete('price_start');
            var price_start = $('.price_start').val();
            if(price_start > 0) {
                upUrl.searchParams.append('price_start', price_start);
            }

            //  Price to
            upUrl.searchParams.delete('price_end');
            var price_end = $('.price_end').val();
            if(price_end > 0) {
                upUrl.searchParams.append('price_end', price_end);
            }

            var params = {
                category_id: category_id,
                '_token': $('.csrf_token').val(),
                price_start: price_start,
                price_end: price_end,
            }

            $.ajax({
                type: "POST",
                url: "/api/v1/product/filterProducts",
                data: params,
                dataType : "json",
                success: function(resp) {

                    // generate push url
                    if(upUrl) {
                        history.pushState(null,null,upUrl.href);
                    }
                    $('.shop_products-body').html(resp.product_list_area);
                    $('.shop_pagination').html(resp.pagination_list_area);

                }
            });

        }

        $(document).ready(function () {

            $(document).on("click", ".js_category", function (e) {
                $('.category_id').val($(this).attr('data-id'));
                $('.block_button').removeClass('active');
                $(this).addClass('active');
                filtreProducts();
            });


        });

        const rangeSlider = document.getElementById('range-slider')

        if(rangeSlider) {
            var price_slider = document.getElementById('range-slider');

            noUiSlider.create(rangeSlider, {
                start: [{{ $filters['selected_min_price'] }}, {{ $filters['selected_max_price'] }}],// pretul selectat
                connect: true,
                range: {
                    'min': [{{ $minPrice }}],// range min si max
                    'max': [{{ $maxPrice }}]
                }
            });

            const input1 = document.getElementById('input-1')
            const input2 = document.getElementById('input-2')
            const inputs = [input1, input2];

            rangeSlider.noUiSlider.on('update', function(values, handle){
                inputs[handle].value = Math.round(values[handle]);
            });

            const setRangeSlider = (i, value) => {
                let arr = [null, null];
                arr[i] = value;
                console.log(arr);
                rangeSlider.noUiSlider.set(arr);
            };

            inputs.forEach((el, index) => {
                    el.addEventListener('change', (e) => {
                        console.log(index);
                    setRangeSlider(index, e.currentTarget.value);
                });
            });

            document.getElementById('range-slider').addEventListener('click', function () {
                var price_range = price_slider.noUiSlider.get();

                $('.price_start').val(Math.floor(price_range[0]));
                $('.price_end').val(Math.floor(price_range[1]));
                // console.log('price_start='+$('.price_start').val());
                filtreProducts();
            });
        }


    </script>
@stop

