<div class="product">
    @if($value->label_id != 1)
        <div class="product-labels">
            @if(!empty($value->labelId))
                @foreach($value->labelId as $svalue)
                    <span class="product-labels__hit">{{ $svalue->getTranslatedAttribute('name') }}</span>
                @endforeach
            @endif
            @if (!empty($value->discount_percent))
                <span class="product-labels__discount">{{ $value->getTranslatedAttribute('discount_percent') }}%</span>
            @endif
        </div>
    @endif
    <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-image">
        <img src="{{ url('storage/'.$value->image) }}" alt="serie-image">
    </a>

    @if ((!empty($value->price_from)) && ($value->price_offer_from == null))
        <div class="product-meta">
            @if((int)$value->showPriceFrom == 1)
                {{ $vars['de_la'] }}
            @endif
           {{ $value->getTranslatedAttribute('price_from') }}  {{ $vars['lei'] }}</b></p>
            @if ($value->in_stock == 0)
                <span class="product-meta__status out">{{ $vars['aboutp-outof'] }}</span>
            @endif
            @if ($value->in_stock == 1)
                <span class="product-meta__status">{{ $vars['in_stock'] }}</span>
            @endif
        </div>
    @endif


    @if ((!empty($value->price_from)) && (!empty($value->price_offer_from)))
        <div class="product-meta">
            <p class="product-meta__price">
                @if((int)$value->showPriceFrom == 1)
                    {{ $vars['de_la'] }}
                @endif
                <span>{{ $value->getTranslatedAttribute('price_from') }}  {{ $vars['lei'] }}</span>
                <b class="discount">{{ $value->getTranslatedAttribute('price_offer_from') }}  {{ $vars['lei'] }}</b></p>
            @if ($value->in_stock == 0)
                <span class="product-meta__status out">{{ $vars['aboutp-outof'] }}</span>
            @endif
            @if ($value->in_stock == 1)
                <span class="product-meta__status">{{ $vars['in_stock'] }}</span>
            @endif
        </div>
    @endif

    <div class="product-category">
        @if($value->subCategName)
            <a href="{{ route('categoryDetail',['slug' => $value->subCategSlug]) }}">
                {{ $value->subCategName }}
            </a>
        @endif
        @if($value->categName)
            <a href="{{ route('series',['slug' => $value->categSlug]) }}">
                {{ $value->categName }}
            </a>
        @endif
    </div>

    <a href="{{ route('series-detail',['slug' => $value->slug]) }}" class="product-info">{{ $value->getTranslatedAttribute('name') }}</a>

    <div class="product-footer">
        @if($value->product_id > 0)
{{--            <button class="accent-btn product-btn btn-add-cart" data-id="{{ $value->product_id }}" >{{ $vars['add_to_cart'] }}</button>--}}
        @endif
{{--        <button class="accent-btn cart-btn icon-bag"></button>--}}
        <div class="product-footer__review">
            @if($value->getTranslatedAttribute('reviews'))
                <small>({{ $value->getTranslatedAttribute('reviews') }} {{ $vars['reviews'] }}) </small>
                <div class="stars">

                    @for ($i = 0; $i < $value->getTranslatedAttribute('rate'); $i++)
                        @if ($i<5)
                            <span class="icon-star fill"></span>
                        @endif
                    @endfor

                </div>
            @endif
        </div>
    </div>
</div>
