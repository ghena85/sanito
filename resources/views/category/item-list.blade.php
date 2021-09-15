<div class="category-item">
    <a href="{{ isset($subCategories) ? route('series',['slug' => $value->slug]) : route('categoryDetail',['slug' => $value->slug]) }}">
        <img src="{{ url('storage/'.$value->image) }}" alt="{{ $value->getTranslatedAttribute('name') }}" class="category-item__image">
        <h4 class="category-item__name">{{ $value->getTranslatedAttribute('name') }}</h4>
    </a>
</div>