<article class="shop_product-body">
    <a href="{{ route('product-detail',['slug' => $value->slug]) }}">
        <img src="{{ url('storage/'.$value->image) }}" alt="product1" class="product-img"></a>
    <div class="product_body-text">
        <a href="{{ route('product-detail',['slug' => $value->slug]) }}">
            <h3 class="product-title">{{ $value->getTranslatedAttribute('name') }}</h3>
        </a>
        <span class="product-price">{{ $value->price }} {{ $vars['valuta'] }}</span>
    </div>
    <button class="product_cart btn-add-cart" data-id="{{ $value->id }}" >{{ $vars['add_to_cart'] }}
        <svg width="25" height="29" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.5988 10.9457L13.2204 3.46512C13.0304 3.14583 12.7105 2.98618 12.3906 2.98618C12.0708 2.98618 11.7509 3.14583 11.5609 3.47652L7.18249 10.9457H2.39418C1.84437 10.9457 1.39453 11.4588 1.39453 12.086C1.39453 12.1886 1.40453 12.2913 1.43452 12.3939L3.97362 22.9648C4.20354 23.9226 4.97327 24.6296 5.89294 24.6296H18.8883C19.808 24.6296 20.5777 23.9226 20.8177 22.9648L23.3568 12.3939L23.3868 12.086C23.3868 11.4588 22.9369 10.9457 22.3871 10.9457H17.5988ZM9.3917 10.9457L12.3906 5.92823L15.3896 10.9457H9.3917ZM12.3906 20.0683C11.291 20.0683 10.3914 19.042 10.3914 17.7877C10.3914 16.5333 11.291 15.507 12.3906 15.507C13.4903 15.507 14.3899 16.5333 14.3899 17.7877C14.3899 19.042 13.4903 20.0683 12.3906 20.0683Z" fill="#F5BD16"/>
        </svg>
    </button>
</article>