<footer class="footer">
    <img src="/img/BuruianFooter2.png" alt="" class="buruian_footer buruian_footer1">
    <img src="/img/BuruianaFooter1.png" alt="" class="buruian_footer buruian_footer2">
    <div class="container">
        <div class="footer_circle">
            <a href="#">
                <img src="/img/footer_circle.jpg" alt="">
            </a>
        </div>
        <div class="footer_body">
            <div class="footer_contact">
                <ul class="footer_contact-list">
                    <li class="footer_contact-item">
                        <a href="mailto:example@gmail.com" class="footer_contact-link">
                            <img src="/img/mail.svg" alt=""> {{ $vars['contact_us_mail'] }}
                        </a>
                    </li>
                    <li class="footer_contact-item">
                        <a href="" class="footer_contact-link">
                            <img src="/img/adress.svg" alt=""> {{ $vars['contact_us_info'] }}
                        </a>
                    </li>
                    <li class="footer_contact-item">
                        <a href="tel:+{{ $vars['contact_us_phone'] }}" class="footer_contact-link">
                            <img src="/img/phone.svg" alt="">{{ $vars['contact_us_phone'] }}</a>
                    </li>
                </ul>
            </div>
            <div class="footer_block">
                <ul class="footer_list">
                    <li class="footer_item">
                        <a href="{{ route('shop') }}" class="footer_link">{{ $vars['shop'] }}</a>
                    </li>
                    @foreach($footerCategories as $value)
                        <li class="footer_item">
                            <a href="{{ route('shop').'?category_id='.$value->id }}" class="footer_link">
                                {{ $value->getTranslatedAttribute('name') }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer_block">
                <ul class="footer_list">
                    @foreach($footerMenu as $value)
                        <li class="footer_item">
                            <a href="{{ $value->id == 10 ? 'https://consumator.gov.md/rom' : (Route::has($value->slug) ? route($value->slug) : route('info',['slug' =>$value->slug])) }}" class="footer_link">
                                {{ $value->getTranslatedAttribute('name') }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="footer_rights">
            <div class="footer_social">
                <a href="#"><img src="/img/ig.svg" alt=""></a>
                <a href="#"><img src="/img/twitter.svg" alt=""></a>
                <a href="#"><img src="/img/facebook.svg" alt=""></a>
            </div>
            <!-- <div class="footer_rights-bee">
                <img src="/img/fbee.png" alt="">
            </div> -->
            <p class="footer_rights-text">© {{ date('Y') }} HONEYFLOW SRL</p>
        </div>
    </div>
</footer>