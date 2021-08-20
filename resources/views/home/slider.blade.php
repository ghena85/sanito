<div class="single-product_slider container">
        <div class="swiper_singleProducts">
            <div class="swiper-wrapper ">
                @foreach($slider as $value)
                    <div class="swiper-slide">
                        <div class="swiper_text">
                            <h2>{{ $value->getTranslatedAttribute('name') }}</h2>
                            <p>
                               {{ $value->getTranslatedAttribute('short_text')  }}
                            </p>
                             <a href="{{ route('product-detail',['slug' => $value->slug]) }}" class="intro_button">
                               {{ $vars['vezi_mai_mult'] }}
                             </a>
                        </div>
                        <div class="swiper_img">
                            <img src="{{ url('storage/'.$value->image) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="swiper-paginations"></div>
