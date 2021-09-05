<section class="newin-section">
    <div class="container">
        <div class="section__header only-title">
            <h2>New lines added</h2>
        </div>

        <div class="newin-body">            

            @foreach ($productOnNewLine as $key=>$value)
                @if ($key==0)
                    <div class="newin-body__item newin-item">
                        <img src="{{ url('storage/'.$value->image) }}" alt="product">
                        <div class="newin-item__content">
                            <div class="newin-item__info">
                                <span class="newin-item__label">New</span>
                                <h2>{{ $value->getTranslatedAttribute('name') }}</h2>
                                <p>{{ $value->getTranslatedAttribute('short_text') }}</p>
                            </div>
                            <div class="newin-item__meta">
                                <p class="newin-item__price">de la <b>{{ $value->getTranslatedAttribute('price_from') }} LEI</b></p>
                                <button class="accent-btn product-btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>