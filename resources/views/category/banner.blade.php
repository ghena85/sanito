<div class="category-banner">
    <div class="category-banner__left">
        {!! $banner->getTranslatedAttribute('desc_left') !!}
    </div>
    <img src="{{ url('storage/'.$banner->image) }}" alt="banner image">
    <div class="category-banner__right">
        {!! $banner->getTranslatedAttribute('desc_right') !!}
        <a href="{{ $banner->link }}">{{ $vars['view_all_items_sell'] }}</a>
    </div>
</div>