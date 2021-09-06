<div class="product">
    <div class="product-labels">
        <span class="product-labels__hit">Hit</span>
    </div>
    <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-image">
        <img src="img/product1.png" alt="product">
    </a>

    <div class="product-meta">
        <p class="product-meta__price">de la <b>120 LEI</b></p>
        <span class="product-meta__status out">Out of stock</span>
    </div>

    <div class="product-category">
        <a href="single-category.html">Pots</a>
        <a href="single-category.html">Flower pots</a>
    </div>

    <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-info">Self- watering wick system</a>

    <div class="product-footer">
        <button class="accent-btn product-btn">Add to cart</button>
        <button class="accent-btn cart-btn icon-bag"></button>
        <div class="product-footer__review">
            <small>(120 reviews)</small>
            <div class="stars">
                <span class="icon-star fill"></span>
                <span class="icon-star fill"></span>
                <span class="icon-star fill"></span>
                <span class="icon-star fill"></span>
                <span class="icon-star fill"></span>
            </div>
        </div>
    </div>
</div>