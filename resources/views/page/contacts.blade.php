@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $page->getTranslatedAttribute('name') }} | {{ ENV('APP_NAME') }}
@stop

{{-- content --}}
@section('content')

    <div class="contact_main" style="background: url('/img/contact.jpg') 50% 50% / cover no-repeat">
        <h3 class="contact_title">{{ $page->getTranslatedAttribute('name2') }}</h3>
    </div>

    <div class="contact">
        <div class="container">
            <div class="contact_body">
                <div class="contact_info">
                    <a href="{{ $ourMission->youtube }}" target="_blank">
                        <img src="{{ url('storage/'.$ourMission->youtube_image) }}" class="contact_video_b">
                    </a>

                    <h4 class="contact_title"> {{ $ourMission->getTranslatedAttribute('name') }}</h4>
                    <div class="contact_text">
                        <p class="contact_text">
                            {!! $ourMission->getTranslatedAttribute('text') !!}
                        </p>
                    </div>
                </div>
                <div class="contact_form">
                    @if(session()->has('message'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger text-center">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h3 class="contact_title">{{ $vars['lasa_un_mesaj'] }}</h3>
                    <div class="contact_form-action">
                        <form method="post" action="{{ route('sendContactForm') }}">
                            {{ csrf_field()  }}
                            <input type="text" id="name" name="first_name" required placeholder="{{ $vars['first_name'] }}">
                            <input type="text" id="lastName" name="last_name" placeholder="{{ $vars['last_name'] }}">
                            <input type="email" id="email" name="email" required placeholder="{{ $vars['email'] }}">
                            <input type="tel" id="tel" name="phone" required placeholder="{{ $vars['phone'] }}">
                            <div class="contact_form-textarea">
                                <textarea name="msg" id="message" required cols="30" rows="10" placeholder="{{ $vars['message'] }}"></textarea>
                            </div>
                            <button type="submit" class="form_button"  type="submit" >{{ $vars['send_message'] }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1360.5720032832148!2d28.853084382198265!3d46.99814529764755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97ea962caf3f7%3A0x2c1cbaf211fd42c5!2sLinella%2050!5e0!3m2!1sen!2s!4v1625084686673!5m2!1sen!2s"
                width="
        100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">

        </iframe>
    </div>

@stop