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
        rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/line-awesome.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/message-box.css') }}"/>

    <!-- FancyBox -->
    <link rel="stylesheet"
          href="{{ url('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css') }}"/>

    <!-- Icon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}" sizes="32x32"/>
    @yield('style')
</head>
<body class="ashade-home-template has-spotlight ashade-smooth-scroll">
@include('includes.header')

@yield('content')

@section('footer')
@include('includes.footer')
@show

@include('includes.aside-bar')

@section('app-javascript')
<!-- SCRIPTS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/masonry.min.js') }}"></script>
<script src="{{ asset('js/core.js') }}"></script>
<!-- Map Resize -->
<script type="text/javascript" src="{{ asset('js/imageMapResizer.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('map').imageMapResize();
    });
</script>
<!-- END -->

<!-- FancyBox -->
<script src="{{ url('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript">
    $('[data-fancybox]').fancybox({
        youtube: {
            controls: 0,
            showinfo: 0
        },
        vimeo: {
            color: 'f00'
        }
    });
</script>
@show
@yield('javascript')

</body>
</html>
