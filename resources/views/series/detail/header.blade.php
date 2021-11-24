<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-list__item">
                <a href="{{ route('home') }}" class="breadcrumb-list__link">Home</a>
            </li>
            <li class="breadcrumb-list__item">
                <a href="{{ route('category') }}" class="breadcrumb-list__link">Categories</a>
            </li>
            @if($series->category)
                <li class="breadcrumb-list__item">
                    <a href="{{ route('categoryDetail',['slug' => $series->categoryId->parentId->slug]) }}" class="breadcrumb-list__link">{{ $series->category }}</a>
                </li>
            @endif
            @if($series->subcategory)
                <li class="breadcrumb-list__item">
                    <a href="{{ route('series',['slug' => $series->categoryId->slug]) }}" class="breadcrumb-list__link">{{ $series->subcategory }}</a>
                </li>
            @endif
            <li class="breadcrumb-list__item">
                <a href="#" class="breadcrumb-list__link">{{ $series->getTranslatedAttribute('name') }}</a>
            </li>
        </ul>
    </div>
</div>

<div class="single-product">
    <div class="container single-product__container">
        <div class="single-product__block sliders">
            @if(($series->images &&!empty($series->images) && $series->images != '[]') ||  !empty($product->image))
                <div class="thumb-product__slider thumb-slider">
                    <div class="thumb-slider__body">
                        <div class="thumb-body__arrow swiper-button-prev"></div>
                        <div class="thumb-slider__slider">
                            <div thumbsSlider="" class="slider-thumb__body swiper">
                                @if($product)
                                    <div class="thumb-slider__slide">
                                        <img src="{{ url('storage/'.$product->image) }}" alt="{{ $series->getTranslatedAttribute('name') }}" class="swiper-lazy" >
                                    </div>
                                @endif

                                @if($series->images)
                                    @foreach (json_decode($series->images) as $key => $image)
                                        <div class="thumb-slider__slide">
                                            <img src="{{ url('storage/'.$image) }}" alt="{{ $series->getTranslatedAttribute('name') }}" class="swiper-lazy">
                                        </div>
                                    @endforeach
                                @endif


                            </div>
                        </div>
                        <div class="thumb-body__arrow swiper-button-next"></div>
                    </div>
                </div>
            @endif

            <div class="sigle-product__slider single-slider">
                <div class="single-slider__body">
                    <div class="single-slider__slider">
                        <div class="slider-single__body swiper">
                            @if($product)
                                <div class="single-slider__slide">
                                    <a href="{{ url('storage/'.$product->image) }}" data-fslightbox="gallery" class="gallery-popup__open">
                                    </a>
                                    <img src="{{ url('storage/'.$product->image) }}" alt="{{ $series->getTranslatedAttribute('name') }}" class="swiper-lazy">
                                </div>
                            @endif
                            @if($series->images)
                                @foreach (json_decode($series->images) as $key => $image)
                                    <div class="single-slider__slide">
                                        <a href="{{ url('storage/'.$image) }}" data-fslightbox="gallery" class="gallery-popup__open"></a>
                                        <img src="{{ url('storage/'.$image) }}" alt="{{ $series->getTranslatedAttribute('name') }}" class="swiper-lazy">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="single-product__block">
            <div class="product-category">
                <a href="{{ route('series',['categorySlug' => $series->slug]) }}">{{ $series->category }}</a>
                <a href="{{ route('series-detail',['slug' => $series->slug]) }}">{{ $series->subcategory }}</a>
            </div>

            <h3 class="single-product__name">{{ $series->getTranslatedAttribute('name') }}</h3>

            @if ((!empty($series->price_from)) && ($series->price_offer_from == null))
                <div class="single-product__meta">
                    <div class="price">
                        <p>de la </p>
                        <span class="discount">{{ $series->getTranslatedAttribute('price_from') }} LEI</span>
                    </div>
                    @if ($series->in_stock == 0)
                        <span class="product-meta__status out">{{ $vars['aboutp-outof'] }}</span>
                    @else
                        <span class="product-meta__status">{{ $vars['in_stock'] }}</span>
                    @endif
                </div>
            @endif

            @if ((!empty($series->price_from)) && (!empty($series->price_offer_from)))
                <div class="single-product__meta">
                    <div class="price">
                        <p>de la <span>{{ $series->getTranslatedAttribute('price_from') }}</span></p>
                        <span class="discount">{{ $series->getTranslatedAttribute('price_offer_from') }} LEI</span>
                    </div>
                    @if ($series->in_stock == 0)
                        <span class="product-meta__status out">{{ $vars['aboutp-outof'] }}</span>
                    @else
                        <span class="product-meta__status">{{ $vars['in_stock'] }}</span>
                    @endif
                </div>
            @endif

            @if($product && strtoupper($product->color) != 'NONE')
                <div class="single-product__color color-picker">
                    <p class="color-picker__choosen">Color: <strong>{{ $product->color }}</strong></p>
                    <ul class="color-picker__list">
                        @foreach($colors as $key => $value)
                            @if($value->id != 59)
                                <li onclick="window.location.href='{{ route('series-detail',['slug' => $series->slug]) }}?color_id={{ $value->id }}&size_id={{ request()->size_id }}'"
                                    class="color-picker__item {{ $product->color_id == $value->id ? 'active' : '' }}"
                                >
                                    <img src="{{ url('storage/'.$value->image) }}" title="{{ $value->getTranslatedAttribute('name') }}">
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="single-product__size size-picker">
                @foreach($sizes as $key => $value)
                    <button onclick="window.location.href='{{ route('series-detail',['slug' => $series->slug]) }}?size_id={{ $value->id }}&color_id={{ request()->color_id }}'"
                            class="size-picker__button {{ $product->size_id == $value->id ? 'active' : '' }}"
                    >
                        {{ $value->getTranslatedAttribute('name') }}
                    </button>
                @endforeach
            </div>

            @if($product)
                <div class="single-product__controls">
                    <div class="counter">
                        <button class="minus icon-minus"></button>
                        <span class="count quantity_number">1</span>
                        <button class="plus icon-plus"></button>
                    </div>
                    <button class="to-cart accent-btn btn-add-cart" data-id="{{ $product->id }}" data-page="detail">
                        {{ $vars['add_to_cart'] }}
                    </button>
                </div>
            @endif

            <div class="single-product__info">
                @if($series->logo)
                    <img src="{{ url('storage/'.$series->logo) }}" class="product-brand">
                @endif
                @if($series->reviews)
                    <div class="brand-review">
                        <div class="stars">

                            @for ($i = 0; $i < $series->getTranslatedAttribute('rate'); $i++)
                                @if ($i<5)
                                    <span class="icon-star fill"></span>
                                @endif
                            @endfor

                        </div>
                        <small>({{ $series->getTranslatedAttribute('reviews') }} reviews) </small>
                    </div>
                @endif
            </div>

            @if(!empty($series->tags))
                <div class="single-product__attention attention">
                    @foreach($series->tags as $value)
                        <div class="attention-element">
                            <img src="{{ url('storage/'.$value->image) }}" style="max-width: 50px" class="product-brand">
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>