<section class="about-section">
    <div class="container">
        <div class="section-header">
            <h2>{{ $about->getTranslatedAttribute('name') }}</h2>
            <p>{{ $about->getTranslatedAttribute('short_text') }}</p>
        </div>
    </div>

    <div class="about-section__body">
        <div class="page__about-slider about-slider">
            <div class="about-slider__body">
                <div class="about-slider__slider container">
                    <div class="slider-about__body slider-container swiper">

                        @foreach ($aboutList as $value)
                            @if ((!empty($value->youtube_image)) && (!empty($value->youtube)))
                                <div class="slider-about__slide">
                                    <a data-fslightbox="gallery" href="{{ $value->getTranslatedAttribute('youtube') }}">
                                        <button class="icon-play"></button>
                                        <img src="{{ url('storage/'.$value->youtube_image) }}" alt="video">
                                    </a>
                                    <div class="video-info">
                                        <h4 class="video-info__title swiper-no-swiping">{{ $value->getTranslatedAttribute('name') }}</h4>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>

                    <div class="slider-about-controls">
                        <div class="slider-about-controls__dots swiper-dots"></div>
                        <div class="slider-about-controls__arrows slider-arrows">
                            <button type="button" class="slider-arrow icon-slider-arrow slider-arrow__prev"></button>
                            <button type="button" class="slider-arrow slider-arrow__next icon-slider-arrow"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
