<div class="products-sort mobile">
    <div class="products-sort__sort">
        <button class="sort-toggler toggler">Sort by: <span class="icon-chevron down"></span></button>
        <ul class="sort-list">
            <li class="sort-list__item"><button>Popular</button></li>
            <li class="sort-list__item"><button>New lines</button></li>
            <li class="sort-list__item"><button class="active">On sale</button></li>
        </ul>
    </div>

    <div class="products-sort__sidebar">
        <button class="sidebar-toggler toggler">Filter <span class="icon-controls"></span></button>
        <aside class="page-grid__sidebar filter-menu">
            <h4 class="sidebar__title">
                Filter
                <svg id="close-filter" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="close">
                        <path id="Path 2" d="M17.6569 17.6569L6.34319 6.34315" stroke="#383838" stroke-linecap="round"/>
                        <path id="Path 2_2" d="M17.6568 6.34315L6.34311 17.6569" stroke="#383838" stroke-linecap="round"/>
                    </g>
                </svg>
            </h4>
            <form action="#" class="filter-form">
                <div class="filter-form__row">
                    <h4>Category</h4>
                    <label class="checkbox">
                                        <span class="checkbox__input">
                                            <input type="checkbox" name="checkbox">
                                            <span class="checkbox__control">
                                                <span class="icon-check"></span>
                                            </span>
                                        </span>
                        <span class="radio__label">Внутри</span>
                        <small class="count">285</small>
                    </label>
                    <label class="checkbox">
                                        <span class="checkbox__input">
                                            <input type="checkbox" name="checkbox">
                                            <span class="checkbox__control">
                                                <span class="icon-check"></span>
                                            </span>
                                        </span>
                        <span class="radio__label">Экстерьер</span>
                        <small class="count">903</small>
                    </label>
                    <label class="checkbox">
                                        <span class="checkbox__input">
                                            <input type="checkbox" name="checkbox">
                                            <span class="checkbox__control">
                                                <span class="icon-check"></span>
                                            </span>
                                        </span>
                        <span class="radio__label">С подвеской</span>
                        <small class="count">34</small>
                    </label>
                </div>

                <div class="filter-form__row">
                    <h4>Brand</h4>
                    @include("series.filter.brands")
                </div>
                <div class="filter-form__row">
                    <h4>Cost</h4>
                    <div class="filter-form__slider" id="range-slider-mobile"></div>
                    <div class="filter-form__inputs">
                        <input type="number" min="1" max="3000" placeholder="1" class="filters-price__input" id="input-min-mobile">
                        <input type="number" min="1" max="3000" placeholder="3000" class="filters-price__input" id="input-max-mobile">
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
    </div>

    <div class="products-sort__category">
        <button class="category-btn">Window boxes <span class="icon-cancel"></span></button>
        <button class="category-btn">Asti <span class="icon-cancel"></span></button>
        <button class="reset">Resel all</button>
    </div>
</div>