<div class="swiper-slide">
    <a href="{{ route('product-detail',['slug' => $value->slug]) }}" >
        <img class="swiper_img" src="{{ url('storage/'.$value->image) }}" alt="">
    </a>
    <h6 class="swiper_title">{{ $value->getTranslatedAttribute('name') }}</h6>
    <p class="swiper_price">{{ $value->price }} {{ $vars['valuta'] }}</p>
    <p class="swiper_text">
        {!! $value->getTranslatedAttribute('short_text') !!}
    </p>
    <button class="swiper_cart btn-add-cart"  data-id="{{ $value->id }}" >
        <svg width="20" height="18" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.4022 6.16346H9.92566L5.98035 0.558624C5.8241 0.289807 5.60274 0.141958 5.31628 0.115076C5.02983 0.0881943 4.75639 0.18228 4.49597 0.397334C4.10535 0.827442 4.0793 1.25755 4.41785 1.68766L7.50378 6.16346H1.7616C1.29285 6.16346 0.895711 6.33147 0.57019 6.6675C0.24467 7.00352 0.0819092 7.40002 0.0819092 7.85701V8.74411C0.0819092 9.4968 0.420451 10.0075 1.09753 10.2764L3.40222 17.5748C3.50639 17.9511 3.71472 18.2938 4.02722 18.603C4.33972 18.9121 4.69128 19.0667 5.08191 19.0667H15.0819C15.4725 19.0667 15.8241 18.9121 16.1366 18.603C16.4491 18.2938 16.6574 17.9511 16.7616 17.5748L19.0663 10.357C19.7434 10.0882 20.0819 9.57744 20.0819 8.82475V7.93766C20.0819 7.4269 19.9191 7.00352 19.5936 6.6675C19.2681 6.33147 18.871 6.16346 18.4022 6.16346ZM1.7616 7.85701H8.75378L9.33972 8.66346C9.3918 8.66346 9.41785 8.69034 9.41785 8.74411H1.7616V7.85701ZM15.16 17.0909V17.1715C15.16 17.1984 15.147 17.2253 15.121 17.2522C15.0949 17.2791 15.0819 17.3059 15.0819 17.3328H5.16003C5.10795 17.3328 5.08191 17.2791 5.08191 17.1715L2.93347 10.4377H17.2303L15.16 17.0909ZM10.8241 8.74411C11.0064 8.42153 11.0975 8.12583 11.0975 7.85701H18.4022V8.74411H10.8241ZM5.90222 15.8006C5.92826 15.9887 6.03243 16.15 6.21472 16.2844C6.39701 16.4188 6.57931 16.486 6.7616 16.486H6.91785C7.12618 16.4323 7.29545 16.2979 7.42566 16.0828C7.55587 15.8678 7.58191 15.6527 7.50378 15.4377L6.68347 12.0102C6.63139 11.7952 6.50118 11.6205 6.29285 11.486C6.08451 11.3516 5.87618 11.3248 5.66785 11.4054C5.45951 11.4592 5.29024 11.5936 5.16003 11.8086C5.02983 12.0237 5.00378 12.2253 5.08191 12.4135L5.90222 15.8006ZM13.246 16.486H13.4022C13.5845 16.486 13.7668 16.4188 13.9491 16.2844C14.1314 16.15 14.2356 15.9887 14.2616 15.8006L15.0819 12.3328C15.134 12.1178 15.1014 11.9027 14.9843 11.6877C14.8671 11.4726 14.7043 11.3516 14.496 11.3248C13.9491 11.2172 13.6106 11.4188 13.4803 11.9296L12.66 15.357C12.5038 15.8946 12.6991 16.271 13.246 16.486ZM10.0819 16.486C10.6288 16.486 10.9022 16.1903 10.9022 15.5989V12.1715C10.9022 11.607 10.6288 11.3248 10.0819 11.3248C9.53503 11.3248 9.2616 11.607 9.2616 12.1715V15.5989C9.2616 16.1903 9.53503 16.486 10.0819 16.486Z" fill="black"/>
        </svg> {{ $vars['add_to_cart'] }}
    </button>
</div>