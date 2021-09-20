<section class="offer-section">
    <div class="container">
        <div class="section__header only-title">
            <h2>
            @foreach ($bestOffers as $key=>$value)
                @if ($key==0)
                    {{ $value->name }}
                @endif
            @endforeach
        </h2>
            <a href="single-category.html">See all</a>
        </div>

        <div class="offer-section__body offer-body">
            {{-- <div class="offer-body__item">
                <div class="offer-body__text">
                    <span class="green">Best offer</span>
                    <p class="offer-body__name">Self- watering wick system</p>
                    <small>up to</small>
                    <h2>20% OFF</h2>
                    <p class="offer-body__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non justo turpis.</p>
                    <a href="single-product.html">View all sale items</a>
                </div>
                <img src="img/offer1.png" alt="cup">
            </div> --}}
            
            @foreach ($bestOffers as $key => $value)
                @if ($key!=0)
                    <div class="offer-body__item">
                        <div class="offer-body__text">
                            <span class="green">{{ $vars['best_offer'] }}</span>
                            {!! $value->short_text !!}
                            <p class="offer-body__description">{{ $value->getTranslatedAttribute('description') }}</p>
                            <a href="{{ route('series',['categorySlug' => 'ghiveci']) }}">View all sale items</a>
                        </div>
                        <img src="{{ url('storage/'.$value->image) }}" alt="cup">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>