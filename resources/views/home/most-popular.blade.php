<section class="product-section popular">
    <div class="container">
        <div class="section__header">
            <h2>Most popular products</h2>
            <a href="single-category.html">See all</a>
        </div>
        <div class="product-section__body product-body">
            @foreach ($productPopulars as $key => $value)
                @if ($key==0)
                    <div class="product-body__main main-product" style="background: url('{{ url('storage/'.$value->image) }}') 50% 50% / cover no-repeat;">
                        <a href="{{ route('series-detail',['slug' => $value->slug]) }}">
                            <span class="offer">{{ $vars['best-offer'] }}</span>
                            <h3>{{ $value->getTranslatedAttribute('name') }}</h3>

                            @if ((!empty($value->price_from)) && (empty($value->price_offer_from)))
                                <p class="main-product__price">de la <b>{{ $value->getTranslatedAttribute('price_from') }}</b></p>
                            @endif

                            
                            @if ((!empty($value->price_from)) && (!empty($value->price_offer_from)))
                                <p class="main-product__price">de la <span>{{ $value->getTranslatedAttribute('price_from') }}</span> <b class="discount">{{ $value->getTranslatedAttribute('price_offer_from') }}</b></p>
                            @endif

                        </a>
                    </div>
                @endif
            @endforeach
            <div class="product-body__grid">

                @foreach ($productPopulars as $key => $value)
                    @if ($key <= 4 && $key!=0)
                        <div class="product">
                            <div class="product-labels">
                                @if (!empty($value->label))
                                    <span class="product-labels__hit">{{ $value->label }}</span>
                                @endif

                                @if (!empty($value->discount_percent))
                                    <span class="product-labels__discount">{{ $value->getTranslatedAttribute('discount_percent') }}%</span>
                                @endif
                            </div>

                            <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-image">
                                <img src="{{ url('storage/'.$value->image) }}" alt="{{ $value->getTranslatedAttribute('name') }}">
                            </a>

                            @if ((!empty($value->price_from)) && (empty($value->price_offer_from)))
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
                                <button class="accent-btn product-btn">Add to cart</button>
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
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>