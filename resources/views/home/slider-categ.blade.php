<div class="page__category-slider category-slider">
    <div class="category-slider__body">
        <div class="category-slider__slider container">
            <div class="slider-category__body slider-container swiper">
                @foreach ($categoryies as $value)
                        <div class="slider-category__slide">
                            @php
                             $url = $value->parent_id > 0 ? route('series',['slug' => $value->slug]) : route('categoryDetail',['slug' => $value->slug]);
                            @endphp
                            <a href="{{ $url }}">
                                <img src="{{ $value->svg_icon }}" alt="">
                                {{ $value->getTranslatedAttribute('name') }}
                            </a>
                        </div>
                    @endforeach
            </div>
            <div class="slider-category-controls">
                <div class="slider-category-controls__arrows slider-arrows">
                    <button type="button" class="slider-arrow slider-arrow__prev icon-slider-arrow">
                    </button>
                    <button type="button" class="slider-arrow slider-arrow__next icon-slider-arrow">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>