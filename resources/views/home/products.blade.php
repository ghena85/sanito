<section class="products_list" id="products_list">
    <div class="products_text">
        <h2 class="products_title">{{ $ourProducts->getTranslatedAttribute('name') }}</h2>
        <p class="products_info">
            {!! $ourProducts->getTranslatedAttribute('description') !!}
        </p>
    </div>
    <div class="product_slider container">
        <div class="swiper_products">
            <div class="swiper-wrapper ">
                @foreach($products as $value)
                    @include("product.item-list-home")
                @endforeach
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</section>