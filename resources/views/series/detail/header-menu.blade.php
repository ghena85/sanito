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
        @if($series->text || $series->text2)
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