<div class="contact-block">
    <div class="contact-block__item">
        <div class="contact-block__block">
            <span class="icon-phone"></span>
            <h5 class="contact-block__title">{{ $vars['contact_phone_text'] }}</h5>
            <a href="tel:{{ $vars['contact-phone'] }}" class="contact-block__info">{{ $vars['contact-text-phone'] }}</a>
        </div>
    </div>
    <div class="contact-block__item">
        <div class="contact-block__block">
            <span class="icon-inbox"></span>
            <h5 class="contact-block__title">{{ $vars['our_inbox_text'] }}</h5>
            <a href="tel:{{ $vars['contact-phone'] }}" class="contact-block__info">{{ $vars['our_inbox_mail'] }}</a>
        </div>
    </div>
    <div class="contact-block__item">
        <div class="contact-block__block">
            <span class="icon-location"></span>
            <h5 class="contact-block__title">{{ $vars['location_text'] }}</h5>
            <address class="contact-block__info">{{ $vars['contact-loc'] }}</address>
        </div>
    </div>
</div>