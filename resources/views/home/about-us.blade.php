<div class="about">
    <div class="container">
        <h2 class="about_title">{{ $about->getTranslatedAttribute('name') }}</h2>
        <div class="about_body">
            <div class="about_intro">
                <div class="about_intro-text">
                   {!! $about->getTranslatedAttribute('text1') !!}
                </div>
                <div class="about_intro-img">
                    <img src="{{ url('storage/'.$about->image) }}" alt="about1">
                </div>
            </div>

            <div class="about_intro">
                <div class="about_intro-text">
                   {!! $about->getTranslatedAttribute('text2') !!}
                </div>
                <div class="about_intro-img">
                    <img src="{{ url('storage/'.$about->image2) }}" alt="about1">
                </div>
            </div>
        </div>
    </div>

</div>