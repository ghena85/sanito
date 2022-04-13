<div class="page__main-slider main-slider" >
    <div class="main-slider__body" >
        <div class="main-slider__slider">
            <div class="slider-main__body swiper swiper-bild swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-b56f9b92ddfa92f1" aria-live="off" style="transition-duration: 0ms;">

                    @foreach ($slider as $value)
                        <div class="slider-main__slide swiper-slide" style="background: url('https://santino.kurama.xyz/storage/series/October2021/73.jpg') 50% 50% / cover no-repeate">
                            <div class="container slider-main__container">
                                    <div class="slider-main__text"> 
                                        <h1 class="swiper-no-swiping">{{ $value->getTranslatedAttribute('title') }}</h1>
                                        <p class="swiper-no-swiping">{{ $value->getTranslatedAttribute('description') }}</p>
                                        <a class="accent-btn slider-main__btn" href="{{ route('category') }}">{{ $vars['view_all_products'] }}</a>
                                    </div>

                                    <img src="{{ url('storage/'.$value->image) }}" alt="plants">
                            </div>
                        </div>
                    @endforeach

            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
            <div class="slider-main-controls">
                <div class="slider-main-controls__dots swiper-dots swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
                <div class="slider-main-controls__arrows slider-arrows">
                    <!-- <button type="button" class="slider-arrow slider-arrow__prev">
                    </button> -->
                    <button type="button" class="slider-arrow slider-arrow__next icon-slider-arrow" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-b56f9b92ddfa92f1">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
