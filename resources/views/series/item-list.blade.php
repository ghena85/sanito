<div class="product">
    <div class="product-labels">
        <span class="product-labels__hit">Hit</span>
        @if (!empty($value->discount_percent))
            <span class="product-labels__discount">{{ $value->getTranslatedAttribute('discount_percent') }}%</span>
        @endif
    </div>
    <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-image">
        <img src="{{ url('storage/'.$value->image) }}" alt="product">
    </a>

    @if ((!empty($value->price_from)) && ($value->price_offer_from == null))
        <div class="product-meta">
            <p class="product-meta__price">de la <b>{{ $value->getTranslatedAttribute('price_from') }}</b></p>
            @if ($value->in_stock == 0)
                <span class="product-meta__status out">Out of stock</span>
            @endif
            @if ($value->in_stock == 1)
                <span class="product-meta__status">In stock</span>
            @endif
        </div>
    @endif


    @if ((!empty($value->price_from)) && (!empty($value->price_offer_from)))
        <div class="product-meta">
            <p class="product-meta__price">de la <span>{{ $value->getTranslatedAttribute('price_from') }}</span> <b class="discount">{{ $value->getTranslatedAttribute('price_offer_from') }}</b></p>
            @if ($value->in_stock == 0)
                <span class="product-meta__status out">Out of stock</span>
            @endif
            @if ($value->in_stock == 1)
                <span class="product-meta__status">In stock</span>
            @endif
        </div>
    @endif

    <div class="product-category">
        <a href="single-category.html">Pots</a>
        <a href="single-category.html">Flower pots</a>
    </div>

    <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-info">{{ $value->getTranslatedAttribute('name') }}</a>

    <div class="product-footer">
        <button class="accent-btn product-btn  btn-add-cart" data-id="{{ $value->id }}" data-page="detail" >Add to cart</button>
        <button class="accent-btn cart-btn icon-bag"></button>
        <div class="product-footer__review">
            <small>({{ $value->getTranslatedAttribute('reviews') }} reviews) </small>
            <div class="stars">

                @php
                    $stars = $value->getTranslatedAttribute('rate');
                @endphp

                @for ($i = 0; $i < $stars; $i++)
                    @if ($i<5)
                        <span class="icon-star fill"></span>
                    @endif
                @endfor

            </div>
        </div>
    </div>
</div>