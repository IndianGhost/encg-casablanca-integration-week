<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{ config('app.name', 'ADE ENCG') }}</title>

    <!-- CSS -->
    <link
        href="{{ url('https://fonts.googleapis.com/css?family=Montserrat%3A500%2C700%7CRoboto+Condensed:700%7CRoboto%3A700&display=swap') }}"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/line-awesome.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Icon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}" sizes="32x32"/>

@yield('style')

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="{{ url('https://www.googletagmanager.com/gtag/js?id=G-20FQXYE8CZ') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-20FQXYE8CZ');
    </script>
</head>
<body class="has-spotlight ashade-smooth-scroll">
@yield('content')

@include('includes.aside-bar')

@yield('javascript')
</body>
</html>
