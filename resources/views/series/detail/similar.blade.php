@if(!empty($similarSeries))
    <div class="product-slider">
    <h2 class="product-slider__title">{{ $vars['also_like'] }}</h2>
    <div class="product-slider__body">
        <div class="product-slider__slider container">
            <div class="slider-product__body slider-container swiper">
                @foreach ($similarSeries as $value)
                    <div class="slider-product__slide">
                        <div class="product">
                            <div class="product-labels">
                                @if(!empty($value->labelId))
                                    @foreach($value->labelId as $svalue)
                                        <span class="product-labels__hit">{{ $svalue->getTranslatedAttribute('name') }}</span>
                                    @endforeach
                                @endif
                                @if (!empty($value->discount_percent))
                                    <span class="product-labels__discount">{{ $value->getTranslatedAttribute('discount_percent') }}%</span>
                                @endif
                            </div>

                            <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-image">
                                <img src="{{ url('storage/'.$value->image) }}" alt="product">
                            </a>

                            @if ((!empty($value->price_from)) && ($value->price_offer_from == null))
                                <div class="product-meta">
                                    <p class="product-meta__price">de la <b>{{ $value->getTranslatedAttribute('price_from') }}</b></p>
                                    @if ($value->in_stock == 0)
                                        <span class="product-meta__status out">{{ $vars['aboutp-outof'] }}</span>
                                    @endif
                                    @if ($value->in_stock == 1)
                                        <span class="product-meta__status">{{ $vars['in_stock'] }}</span>
                                    @endif
                                </div>
                            @endif


                            @if ((!empty($value->price_from)) && (!empty($value->price_offer_from)))
                                <div class="product-meta">
                                    <p class="product-meta__price">de la <span>{{ $value->getTranslatedAttribute('price_from') }}</span> <b class="discount">{{ $value->getTranslatedAttribute('price_offer_from') }}</b></p>
                                    @if ($value->in_stock == 0)
                                        <span class="product-meta__status out">{{ $vars['aboutp-outof'] }}</span>
                                    @endif
                                    @if ($value->in_stock == 1)
                                        <span class="product-meta__status">{{ $vars['in_stock'] }}</span>
                                    @endif
                                </div>
                            @endif

                            <div class="product-category">
                                @if($value->category)
                                    <a href="{{ route('categoryDetail',['slug' => $value->categoryId->parentId->slug]) }}">
                                        {{ $value->category }}
                                    </a>
                                @endif
                                @if($value->subcategory)
                                    <a href="{{ route('series',['slug' => $value->categoryId->slug]) }}">
                                        {{ $value->subcategory }}
                                    </a>
                                @endif
                            </div>

                            <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-info">{{ $value->getTranslatedAttribute('name') }}</a>

                            <div class="product-footer">
                                <button class="accent-btn product-btn">Add to cart</button>
                                <button class="accent-btn cart-btn icon-bag"></button>
                                <div class="product-footer__review">
                                    <small>({{ $value->getTranslatedAttribute('reviews') }} reviews) </small>

                                    <div class="stars">

                                        @php
                                            $stars = $value->getTranslatedAttribute('rate');
                                        @endphp

                                        @for ($i = 0; $i < $stars; $i++)
                                            @if ($i<5)
                                                <span class="icon-star fill"></span>
                                            @endif
                                        @endfor

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="slider-product-controls">
                <div class="slider-product-controls__dots swiper-dots"></div>
                <div class="slider-product-controls__arrows slider-arrows">
                    <button type="button" class="slider-arrow icon-slider-arrow slider-arrow__prev">
                    </button>
                    <button type="button" class="slider-arrow slider-arrow__next icon-slider-arrow">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
