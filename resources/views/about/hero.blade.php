<div class="container">
    <div class="breadcrumb">
        <ul class="breadcrumb-list ">
            <li class="breadcrumb-list__item">
                <a href="#" class="breadcrumb-list__link">{{ $vars['home'] }}</a>
            </li>
            <li class="breadcrumb-list__item">
                <a href="#" class="breadcrumb-list__link">{{ $vars['about'] }}</a>
            </li>
        </ul>
    </div>

    <div class="about-background" style="background: url('./img/about_bg.jpg') 50% 50% / cover no-repeat;width: 100%; height: 400px;;"></div>

    <div class="about-info">
        <h2>{{ $vars['about'] }}</h2>
        <p>
            {{ $vars['about-desc-hero'] }}
        </p>
    </div>

    <div class="about-card">
        <div class="about-card__item">
            <img src="img/package.svg" alt="deliver">
            <h4 class="footer-title">{{ $vars['about-title-card'] }}</h4>
            <p>
                {{ $vars['about-desc-card'] }}
            </p>
        </div>
        <div class="about-card__item">
            <img src="img/diamond.svg" alt="quality">
            <h4 class="footer-title">{{ $vars['about-title-card'] }}</h4>
            <p>
                {{ $vars['about-desc-card'] }}
            </p>
        </div>
        <div class="about-card__item">
            <img src="img/support.svg" alt="support">
            <h4 class="footer-title">{{ $vars['about-title-card'] }}</h4>
            <p>
                {{ $vars['about-desc-card'] }}
            </p>
        </div>
    </div>

    <div class="about-director">
        <img class="about-director__img" src="img/director.jpg" alt="director">
        <div class="about-director__descr">
            <h3>{{ $vars['about-title-dir'] }}</h3>
            <h5 class="about-director__name">{{ $vars['about-name-dir'] }}</h5>
            <span class="about-director__position">{{ $vars['about-func-dir'] }}</span>
            <p >
                {{ $vars['about-desc-dir'] }}
            </p>
        </div>
    </div>
</div>