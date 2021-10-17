<section id="about-section" class="single-section single-about">
    <div class="container">
        <div class="single-section__header">
            @if($series->text || $series->text2)
                <h3>{{ $vars['about_product_single'] }}</h3>
            @endif
            <ul class="navigation-menu">
                @if($series->text || $series->text2)
                    <li class="navigation-menu__item active">
                        <a href="#about-section" class="navigation-menu__link">
                           {{ $vars['about_product_single'] }}
                        </a>
                    </li>
                @endif
                @if($product && $product->getTranslatedAttribute('text'))
                    <li class="navigation-menu__item">
                        <a href="#characteristic-section" class="navigation-menu__link">
                            {{ $vars['single_product_character'] }}
                        </a>
                    </li>
                @endif
                <!--
                <li class="navigation-menu__item">
                    <a href="#review-section" class="navigation-menu__link">{{ $vars['single_product_review'] }}</a>
                </li>
                -->
            </ul>
        </div>
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
    </div>
</section>