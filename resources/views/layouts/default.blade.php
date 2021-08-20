<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <!-- mobile setting -->
    @yield('meta') @show

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/style.min.css') }}">
    {{--<link rel="stylesheet" href="{{ url('/css/alertify.min.css') }}">--}}
    <link rel="stylesheet" href="{{ url('/css/custom.css') }}">

    <!--begin css -->
    @yield('header_styles')
    <!--end css-->

</head>
<body class="lock">
        <!-- Header Start -->
        @include('layouts/header')
        <!-- //Header End -->

         <!-- the content -->
        @yield('content')
        <!-- end main -->

        <!-- Footer Section Start -->
        @include('layouts/footer')
        <!-- //Footer Section End -->

        <input type="hidden" class="csrf_token" value="{{ csrf_token() }}">

        <!-- All js libraries minified in one file -->
        <script src="{{ url('/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ url('/js/fslightbox.js') }}"></script>
        <script src="{{ url('/js/choices.min.js') }}"></script>
        <script src="{{ url('/js/script.js') }}"></script>
        <script src="{{ url('/js/alertify.min.js') }}"></script>
        <script src="{{ url('/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ url('/js/custom.js') }}"></script>

        <!-- the end -->
        @yield('footer_scripts')
</body>

</html>