<section id="about-section" class="single-section single-about">
    <div class="container">
        <div class="single-section__header">
            <h3>{{ $vars['about_product_single'] }}</h3>
            <ul class="navigation-menu">
                <li class="navigation-menu__item active">
                    <a href="#about-section" class="navigation-menu__link">{{ $vars['about_product_single'] }}</a>
                </li>
                <li class="navigation-menu__item">
                    <a href="#characteristic-section" class="navigation-menu__link">{{ $vars['single_product_character'] }}</a>
                </li>
                <li class="navigation-menu__item">
                    <a href="#review-section" class="navigation-menu__link">{{ $vars['single_product_review'] }}</a>
                </li>
            </ul>
        </div>

        <div class="about-grid">
            <div class="about-grid__row">
               <div class="about-grid__text">
                        {!! $product->text !!}
               </div>
                <img src="{{ url('storage/'.$product->image) }}" alt="product">
            </div>

            <div class="about-video" style="background: url('img/about-video.jpg') 50% 50% / cover no-repeat;">
                <a data-fslightbox="gallery" href="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" class="icon-play"></a>
            </div>
        </div>
    </div>
</section>