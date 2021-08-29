@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    <div class="about_intro" style="background: url('img/about_intro.jpg') 50% 50% / cover no-repeat">
        <div class="container">
            <h1> {{ $page->getTranslatedAttribute('name') }}</h1>
        </div>
    </div>

    <div class="about_main">
        <div class="container">
            <h2> {{ $page->getTranslatedAttribute('name2') }}</h2>
            <div class="about_main-body">
                <div class="about_text">
                    {!! $page->getTranslatedAttribute('short_text') !!}
                </div>
                <div class="about_img">
                    @if($page->image)
                        <img src="{{ url('storage/'.$page->image) }}" alt="">
                    @endif
                    @if($page->image2)
                        <img src="{{ url('storage/'.$page->image2) }}" alt="">
                    @endif
                </div>
               <div class="about_phrase">
                   {!! $page->getTranslatedAttribute('text') !!}
               </div>
            </div>
        </div>
    </div>

    @if($teams)
        <div class="about_team">
        <div class="container">
            <h2>{{ $vars['echipa_noastra'] }}</h2>
            <div class="about_team-body">
                @foreach($teams as $value)
                    <div class="personal_block">
                        <img src="{{ url('storage/'.$value->image) }}" >
                        <h5>{{ $value->getTranslatedAttribute('name') }}</h5>
                        <h4>{{ $value->getTranslatedAttribute('name2') }}</h4>
                        <p>
                            {!! $value->getTranslatedAttribute('text') !!}
                        </p>
                        <div class="personal_social">
                            @if($value->fb)
                                <a href="{{ $value->fb }}">
                                    <img src="/img/svg/fblogo.svg" alt="fb">
                                </a>
                            @endif
                            @if($value->twitter)
                                <a href="{{ $value->twitter }}">
                                    <img src="/img/svg/twtlogo.svg" alt="fb">
                                </a>
                            @endif
                            @if($value->google)
                                <a href="{{ $value->google }}">
                                    <img src="/img/svg/istlogo.svg" alt="fb">
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    @endif

    @if($certificates)
        <div class="certified">
            <div class="container">
                <h2>{{ $vars['certificate'] }}</h2>
                <div class="certified_body">
                    @foreach($certificates as $value)
                        <img src="{{ url('storage/'.$value->image) }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if($partners)
        <div class="partners">
            <div class="container">
                <h2>{{ $vars['parteneri'] }}</h2>
                <div class="partners_body">
                    @foreach($partners as $value)
                        <img src="{{ url('storage/'.$value->image) }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="about_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1360.5720032832148!2d28.853084382198265!3d46.99814529764755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97ea962caf3f7%3A0x2c1cbaf211fd42c5!2sLinella%2050!5e0!3m2!1sen!2s!4v1625084686673!5m2!1sen!2s"
                width="
        100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">

        </iframe>
    </div>

@stop