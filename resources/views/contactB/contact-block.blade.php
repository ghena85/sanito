<div class="contact-block">
    <div class="contact-block__item">
        <div class="contact-block__block">
            <span class="icon-phone"></span>
            <h5 class="contact-block__title">{{ $vars['contact-title-phone'] }}</h5>
            <a href="tel:{{ $vars['contact-phone'] }}" class="contact-block__info">{{ $vars['contact-text-phone'] }}</a>
        </div>
    </div>
    <div class="contact-block__item">
        <div class="contact-block__block">
            <span class="icon-inbox"></span>
            <h5 class="contact-block__title">Our inbox</h5>
            <a href="tel:{{ $vars['contact-phone'] }}" class="contact-block__info">{{ $vars['contact-text-phone'] }}</a>
        </div>
    </div>
    <div class="contact-block__item">
        <div class="contact-block__block">
            <span class="icon-location"></span>
            <h5 class="contact-block__title">Location</h5>
            <address class="contact-block__info">{{ $vars['contact-loc'] }}</address>
        </div>
    </div>
</div>