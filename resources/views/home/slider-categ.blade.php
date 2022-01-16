<div class="page__category-slider category-slider">
    <div class="category-slider__body">
        <div class="category-slider__slider container">
            <div class="slider-category__body slider-container swiper">
                @foreach ($categoryies as $value)
                    @if($value->id != 46)
                        <div class="slider-category__slide">
                            @php
                              $url = $value->parentId && $value->parentId->parent_id > 0 ? route('series',['slug' => $value->slug]) : route('categoryDetail',['slug' => $value->slug]);
                              $url = ((int)$value->parent_id == 0 || empty((int)$value->parent_id)) ? route('category') : $url;
                            @endphp
                            <a href="{{ $url }}">
                                <img src="{{ url('storage/'.$value->svg_icon) }}" style="margin-bottom: 20px;margin-top: 25px" alt="">
                                {{ $value->getTranslatedAttribute('name') }}
                            </a>
                        </div>
                    @endif
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
