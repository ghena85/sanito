@extends('layouts/default')


{{-- content --}}
@section('content')
    <main>
        <div class="container">
            <div class="breadcrumb">
                <ul class="breadcrumb-list ">
                    <li class="breadcrumb-list__item">
                        <a href="{{ route('home') }}" class="breadcrumb-list__link">Home</a>
                    </li>
                </ul>
            </div>
            <div class="about-background" style="background: url('/storage/pages/August2021/about_bg.jpeg') 50% 50% / cover no-repeat;width: 100%; height: 400px;;"></div>

            <div class="about-info">
                <h2 class="final_text">{{ $vars['comanda_cu_succes'] }}</h2>
                <p>
                    {{ $vars['info_comanda_cu_succes'] }}
                </p>
            </div>

        </div>


    </main>

@stop