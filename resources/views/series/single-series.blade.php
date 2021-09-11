<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-list__item">
                <a href="{{ route('home') }}" class="breadcrumb-list__link">Home</a>
            </li>
            <li class="breadcrumb-list__item">
                <a href="#" class="breadcrumb-list__link">Categories</a>
            </li>
            <li class="breadcrumb-list__item">
                <a href="#" class="breadcrumb-list__link">Flower pots</a>
            </li>
            <li class="breadcrumb-list__item">
                <a href="#" class="breadcrumb-list__link">{{ $product->getTranslatedAttribute('name') }}</a>
            </li>
        </ul>
    </div>
</div>

<div class="single-product">
    <div class="container single-product__container">
        <div class="single-product__block sliders">
            <div class="thumb-product__slider thumb-slider">
                <div class="thumb-slider__body">
                    <div class="thumb-slider__slider">
                        <div thumbsSlider="" class="slider-thumb__body swiper">
                            <div class="thumb-slider__slide">
                                <img src="{{ url('storage/'.$product->image) }}" alt="product image">
                            </div>
                            <div class="thumb-slider__slide">
                                <img src="{{ url('storage/'.$product->image) }}" alt="product image">
                            </div>
                            <div class="thumb-slider__slide">
                                <img src="{{ url('storage/'.$product->image) }}" alt="product image">
                            </div>
                            <div class="thumb-slider__slide">
                                <img src="{{ url('storage/'.$product->image) }}" alt="product image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sigle-product__slider single-slider">
                <div class="single-slider__body">
                    <div class="single-slider__slider">
                        <div class="slider-single__body swiper">
                            <div class="single-slider__slide">
                                <img src="{{ url('storage/'.$product->image) }}" alt="product image">
                            </div>
                            <div class="single-slider__slide">
                                <img src="{{ url('storage/'.$product->image) }}" alt="product image">
                            </div>
                            <div class="single-slider__slide">
                                <img src="{{ url('storage/'.$product->image) }}" alt="product image">
                            </div>
                            <div class="single-slider__slide">
                                <img src="{{ url('storage/'.$product->image) }}" alt="product image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="single-product__block">
            <div class="product-category">
                <a href="single-category.html">Pots</a>
                <a href="single-category.html">Flower pots</a>
            </div>

            <h3 class="single-product__name">{{ $product->getTranslatedAttribute('name') }}</h3>

            @if ((!empty($product->price_from)) && ($product->price_offer_from == null))
                <div class="single-product__meta">
                    <div class="price">
                        <p>de la </p>
                        <span class="discount">{{ $product->getTranslatedAttribute('price_from') }} LEI</span>
                    </div>
                    @if ($product->in_stock == 0)
                        <span class="product-meta__status out">Out of stock</span>
                    @else
                        <span class="product-meta__status">In stock</span>
                    @endif
                </div>
            @endif

            @if ((!empty($product->price_from)) && (!empty($product->price_offer_from)))
                <div class="single-product__meta">
                    <div class="price">
                        <p>de la <span>{{ $product->getTranslatedAttribute('price_from') }}</span></p>
                        <span class="discount">{{ $product->getTranslatedAttribute('price_offer_from') }} LEI</span>
                    </div>
                    @if ($product->in_stock == 0)
                        <span class="product-meta__status out">Out of stock</span>
                    @else
                        <span class="product-meta__status">In stock</span>
                    @endif
                </div>
            @endif


            <div class="single-product__color color-picker">
                <p class="color-picker__choosen">Color: <strong>Black</strong></p>
                <ul class="color-picker__list">
                    <li class="color-picker__item">
                        <img src="/img/yellow.png" alt="yellow color">
                    </li>
                    <li class="color-picker__item active">
                        <img src="/img/single-thumbnail1.png" alt="black color">
                    </li>
                    <li class="color-picker__item ">
                        <img src="/img/red.png" alt="red color">
                    </li>
                    <li class="color-picker__item">
                        <img src="/img/yellow.png" alt="yellow color">
                    </li>
                    <li class="color-picker__item">
                        <img src="/img/single-thumbnail1.png" alt="black color">
                    </li>
                    <li class="color-picker__item">
                        <img src="/img/red.png" alt="red color">
                    </li>
                </ul>
            </div>

            <div class="single-product__size size-picker">
                <button class="size-picker__button">100 ml</button>
                <button class="size-picker__button">250 ml</button>
                <button class="size-picker__button">300 ml</button>
                <button class="size-picker__button active">400 ml</button>
                <button class="size-picker__button">500 ml</button>
                <button class="size-picker__button">600 ml</button>
                <button class="size-picker__button">700 ml</button>
                <button class="size-picker__button">1 litru</button>
                <button class="size-picker__button">1.5 litru</button>
            </div>

            <div class="single-product__controls">
                <div class="counter">
                    <button class="minus icon-minus"></button>
                    <span class="count">1</span>
                    <button class="plus icon-plus"></button>
                </div>
                <button class="to-cart accent-btn">Add to cart</button>
            </div>

            <div class="single-product__info">
                <img src="/img/brand.png" alt="brand" class="product-brand">
                <div class="brand-review">
                    <div class="stars">

                        @php
                            $stars = $product->getTranslatedAttribute('rate');
                        @endphp

                        @for ($i = 0; $i < $stars; $i++)
                            @if ($i<5)
                                <span class="icon-star fill"></span>
                            @endif
                        @endfor

                    </div>
                    <small>({{ $product->getTranslatedAttribute('reviews') }} reviews) </small>
                </div>
            </div>

            <div class="single-product__attention attention">
                <div class="attention-element">
                    <span class="icon-pp"></span>
                    <p>{{ $vars['single_product_text1'] }}</p>
                </div>
                <div class="attention-element">
                    <span class="icon-sun"></span>
                    <p>{{ $vars['single_product_text2'] }}</p>
                </div>
                <div class="attention-element">
                    <span class="icon-snowflake"></span>
                    <p>{{ $vars['single_product_text3'] }}</p>
                </div>
                <div class="attention-element">
                    <span class="icon-eco"></span>
                    <p>{{ $vars['single_product_text4'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>