<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>ADE-ENCG | Thank you</title>

    <!-- CSS -->
    <link
        href="{{ url('https://fonts.googleapis.com/css?family=Montserrat%3A500%2C700%7CRoboto+Condensed:700%7CRoboto%3A700&display=swap') }}"
        rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/line-awesome.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/message-box.css') }}"/>


    <!-- FancyBox -->
    <link rel="stylesheet"
          href="{{ url('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css') }}"/>

    <!--Profile-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/photoswipe.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/default-skin/default-skin.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}"/>

    <!-- Icon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}" sizes="32x32"/>
</head>

<body class="has-spotlight ashade-smooth-scroll no-top-padding">

@include('includes.header')

<main class="ashade-content-wrap">
    <div class="ashade-content-scroll">
        <div class="ashade-content">

            <div style="text-align: center;">
                <h2><i class="la la-check-square"></i> Merci pour votre soumission!</h2>
                <h4>Nous vous contacterons dès que possible.</h4>

                <div>
                    <button style="background: transparent;">
                        @yield('content')
                    </button>
                </div>

            </div>
        </div><!-- .ashade-row -->
    </div><!-- .ashade-content-scroll -->
</main>

<div class="ashade-to-top-wrap ashade-back-wrap">
    <div class="ashade-back is-to-top">
        <span>Revenir</span>
        <span>Retour</span>
    </div>
</div>

@include('includes.aside-bar')

<!-- SCRIPTS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/jquery.lazy.min.js') }}"></script>
<script src="{{ asset('js/tiny-slider.js') }}"></script>
<script src="{{ asset('js/photoswipe.min.js') }}"></script>
<script src="{{ asset('js/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('js/core.js') }}"></script>
</body>
</html>
