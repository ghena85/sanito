@extends('layouts/default')


{{-- content --}}
@section('content')

    <!-- <img src="/img/thanksleft.png" class="thanks thanks1" >
    <img src="/img/thanksRight.png" class="thanks thanks2" > -->


    <div class="final">
        <div class="final_body">
            <img src="./img/thankLogo.png" alt="Logo">
            <h2 class="final_text">{{ $vars['mielody_va_multumeste'] }}</h2>
            <a href="{{ route('home') }}" class="final_button">{{ $vars['acasa'] }}</a>
        </div>
    </div>

@stop