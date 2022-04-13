<div class="container">
    <div class="breadcrumb">
        <ul class="breadcrumb-list ">
            <li class="breadcrumb-list__item">
                <a href="{{ route('home') }}" class="breadcrumb-list__link">{{ $vars['home'] }}</a>
            </li>
            <li class="breadcrumb-list__item">
                <a href="{{ route('about-us') }}" class="breadcrumb-list__link">{{ $page->getTranslatedAttribute('name') }}</a>
            </li>
        </ul>
    </div>

    <div class="about-background" style="background: url('/img/about_bg.jpg') 50% 50% / cover no-repeat;width: 100%; height: 400px;;"></div>

    <div class="about-info">
        <h2>{{ $aboutHero->getTranslatedAttribute('name') }}</h2>
            {!! $aboutHero->getTranslatedAttribute('text') !!}
    </div>

    <div class="about-card">
        <div class="about-card__item">
            <img src="/img/package.svg" alt="deliver">
            <h4 class="footer-title">{{ $vars['about_card1'] }}</h4>
        </div>
        <div class="about-card__item">
            <img src="/img/diamond.svg" alt="quality">
            <h4 class="footer-title">{{ $vars['about_card2'] }}</h4>
        </div>
        <div class="about-card__item">
            <img src="/img/support.svg" alt="support">
            <h4 class="footer-title">{{ $vars['about_card3'] }}</h4>
        </div>
    </div>

    <div class="about-director">
        <img class="about-director__img" src="{{ asset('storage/'.$aboutDir->image) }}" alt="director">
        <div class="about-director__descr">
            <h3>{{ $aboutDir->getTranslatedAttribute('short_text') }}</h3>
            <p >
                {!! $aboutDir->getTranslatedAttribute('text') !!}
            </p>
        </div>
    </div>
</div>
