<section class="newin-section">
    <div class="container">
        <div class="section__header only-title">
            <h2>{{ $vars['new_lines_added'] }}</h2>
        </div>

        <div class="newin-body">            

            @foreach ($productOnNewLine as $key=>$value)
                @if ($key==0)
                    <div class="newin-body__item newin-item">
                        <img src="{{ url('storage/'.$value->image) }}" alt="product">
                        <div class="newin-item__content">
                            <div class="newin-item__info">
                                <span class="newin-item__label">{{ $vars['new'] }}</span>
                                <h2>{{ $value->getTranslatedAttribute('name') }}</h2>
                                <p>{{ $value->getTranslatedAttribute('short_text') }}</p>
                            </div>
                            <div class="newin-item__meta">
                                <p class="newin-item__price">{{ $vars['aboutp-pricet'] }} <b>{{ $value->getTranslatedAttribute('price_from') }} {{ $vars['valuta'] }}</b></p>
                                @if($value->product_id > 0)
                                    <button class="accent-btn product-btn btn-add-cart" data-id="{{ $value->product_id }}" >{{ $vars['aboutp-add-cart'] }}</button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>