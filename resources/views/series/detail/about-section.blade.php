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

        @if($series->slider_images)
                <div class="presentation-slider__body">
                    <div class="presentation-slider__slider container">
                        <div class="slider-presentation__body slider-container swiper">
                            @foreach (json_decode($series->slider_images) as $key => $image)
                                <div class="slider-presentation__slide">
                                    <img src="{{ url('storage/'.$image) }}" alt="{{ $series->getTranslatedAttribute('name') }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="slider-presentation__pagination"></div>
                    </div>
                </div>
        @endif


    </div>
</section>