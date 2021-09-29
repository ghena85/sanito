<section class="offer-section">
    <div class="container">
        <div class="section__header only-title">
            <h2>
                {{ $bestOffer->getTranslatedAttribute('name') }}
        </h2>
            <a href="{{ route('series',['slug' => 'oferte']) }}">{{ $vars['see_all'] }}</a>
        </div>

        <div class="offer-section__body offer-body">
            
            @foreach ($bestOffers as $key => $value)
                <div class="offer-body__item">
                    <div class="offer-body__text">
                        <span class="green">{{ $vars['best_offer'] }}</span>
                        {!! $value->getTranslatedAttribute('short_text') !!}
                        <p class="offer-body__description">{{ $value->getTranslatedAttribute('description') }}</p>
                        <a href="{{ route('series',['categorySlug' => $value->slug]) }}">{{ $vars['view_all_sale_items'] }}</a>
                    </div>
                    <img src="{{ url('storage/'.$value->image) }}" alt="cup">
                </div>
            @endforeach
        </div>
    </div>
</section>