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
            <a href="{{ route('series',['slug' => 'oferte']) }}">See all</a>
        </div>

        <div class="offer-section__body offer-body">
            
            @foreach ($bestOffers as $key => $value)
                @if ($key!=0)
                    <div class="offer-body__item">
                        <div class="offer-body__text">
                            <span class="green">{{ $vars['best_offer'] }}</span>
                            {!! $value->short_text !!}
                            <p class="offer-body__description">{{ $value->getTranslatedAttribute('description') }}</p>
                            <a href="{{ route('series',['categorySlug' => $value->slug]) }}">View all sale items</a>
                        </div>
                        <img src="{{ url('storage/'.$value->image) }}" alt="cup">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>