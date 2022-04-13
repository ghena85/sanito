<aside class="page-grid__sidebar sidebar">
    <!-- <div class="ripple-loader">
        <div></div>
        <div></div>
    </div> -->
    <h3 class="sidebar__title">
        <a href="{{ route('series',['slug' => $category->slug]) }}">
            {{ $category->getTranslatedAttribute('name') }}
        </a>
    </h3>
    <form action="#" class="filter-form">
        <div class="filter-form__row">
            <h4>Seria</h4>
            @include("series.filter.brands")
        </div>

        <div class="filter-form__row">
            <h4>Cost</h4>
            <div class="filter-form__slider" id="range-slider"></div>
            <div class="filter-form__inputs">
                <input type="number" name="price_start" class="price_start filters-price__input" id="input-min">
                <input type="number" name="price_end" class="price_end filters-price__input" id="input-max">
            </div>
        </div>

        <div class="filter-form__row">
            <h4>Functional</h4>
            @include("series.filter.functionals")
        </div>

        <div class="filter-form__row">
            <h4>Color</h4>
            @include("series.filter.colors")
        </div>
    </form>
</aside>