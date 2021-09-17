<aside class="page-grid__sidebar sidebar">
    <h3 class="sidebar__title">{{ $category->getTranslatedAttribute('name') }}</h3>
    <form action="#" class="filter-form">

        <div class="filter-form__row">
            <h4>Brand</h4>
            @include("series.filter.brands")
        </div>

        <div class="filter-form__row">
            <h4>Cost</h4>
            <div class="filter-form__slider" id="range-slider"></div>
            <div class="filter-form__inputs">
                <input type="number" min="1" max="3000" placeholder="1" class="filters-price__input" id="input-min">
                <input type="number" min="1" max="3000" placeholder="3000" class="filters-price__input" id="input-max">
            </div>
        </div>

        <div class="filter-form__row">
            <h4>Functional</h4>
            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Hanging basket</span>
                <small class="count">285</small>
            </label>

            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Premium line</span>
                <small class="count">903</small>
            </label>

            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Traditional line</span>
                <small class="count">78</small>
            </label>

            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Window boxes</span>
                <small class="count">34</small>
            </label>
            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Window boxes</span>
                <small class="count">34</small>
            </label>
            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Window boxes</span>
                <small class="count">34</small>
            </label>
            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Window boxes</span>
                <small class="count">34</small>
            </label>

            <button class="show-more">Show all (29)</button>
        </div>

        <div class="filter-form__row">
            <h4>Color</h4>
            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Black</span>
                <small class="count">285</small>
            </label>
            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Blue</span>
                <small class="count">903</small>
            </label>
            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Yellow</span>
                <small class="count">78</small>
            </label>
            <label class="checkbox">
                            <span class="checkbox__input">
                                <input type="checkbox" name="checkbox">
                                <span class="checkbox__control">
                                    <span class="icon-check"></span>
                                </span>
                            </span>
                <span class="radio__label">Rose</span>
                <small class="count">34</small>
            </label>
        </div>
    </form>
</aside>