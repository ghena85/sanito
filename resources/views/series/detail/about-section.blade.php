<section id="about-section" class="single-section single-about">
    <div class="container">

         @include("series.detail.header-menu")

        @if($series->text || $series->text2)
            <div class="about-grid">
            <div class="about-grid__row">
               <div class="about-grid__text">
                   {!! $series->text !!}
               </div>
                @if($series->image1)
                    <img src="{{ url('storage/'.$series->image1) }}" alt="product">
                @endif
            </div>
            @if($series->text2)
                <div class="about-grid__row">
                    <div class="about-grid__text">
                        {!! $series->text2 !!}
                    </div>
                    @if($series->image2)
                        <img src="{{ url('storage/'.$series->image2) }}" alt="product">
                    @endif
                </div>
            @endif
        </div>
        @endif
        <div>

        <div class="presentation-slider__body">
            <div class="presentation-slider__slider container">
                <div class="slider-presentation__body slider-container swiper">
                    <div class="slider-presentation__slide">
                        <img src="../img/about-slider.jpg" alt="">
                    </div>
                    <div class="slider-presentation__slide">
                        <img src="../img/about-slider.jpg" alt="">
                    </div>
                    <div class="slider-presentation__slide">
                        <img src="../img/about-slider.jpg" alt="">
                    </div>
                </div>
                <div class="slider-presentation__pagination"></div>
            </div>
        </div>
    </div>
</section>