<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{ config('app.name', 'ADE ENCG') }}</title>

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

<!-- Content -->
<div class="ashade-page-title-wrap">
    <h1 class="ashade-page-title">
        <span>Profile</span>
        À propos de moi
    </h1>
</div>

<main class="ashade-content-wrap">
    <div class="ashade-content-scroll">
        <div class="ashade-content">
            <!-- About Section for Desktop Layout Only -->
            <section style="padding: 50px 0 0 0" class="ashade-section">
                <div class="ashade-row ashade-row-fullheight exclude-header">
                    <div class="ashade-col col-3"></div>
                    <div class="ashade-col col-6">
                        <h2>
                            <span>{{$user->email}}</span>
                            {{$user->first_name}} {{$user->family_name}}
                        </h2>

                        <form action="{{ route('update-auth-user') }}" method="POST" class="ashade-contact-form"
                              style="padding: 50px 0">
                            @csrf

                            <label>Veuillez entrer votre numéro de téléphone</label>
                            <div class="ashade-row ashade-small-gap">
                                <input type="phone" id="phone" name="telephone" placeholder="Téléphone (Champs requis)"
                                       value="@if(isset($user->telephone)) {{$user->telephone}} @endif" required>
                            </div>


                            <label>Veuillez créer un nouveau mot de passe</label>
                            <div class="ashade-row ashade-small-gap">
                                <input type="password" id="password" name="password"
                                       placeholder="Ancien mot de passe (facultatif)">
                                <input type="password" id="password" name="new_password"
                                       placeholder="Nouveau mot de passe (facultatif)">
                            </div>

                            <textarea style="display: none;"></textarea>
                            <div class="ashade-contact-form__footer">
                                <div class="ashade-contact-form__response"></div>
                                <div class="ashade-contact-form__submit">
                                    <input type="submit" value="Enregistrer">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .ashade-row -->
            </section>

            <!-- Footer -->
            <footer id="ashade-footer">
                <div class="ashade-footer-inner">
                    <div class="ashade-footer__socials">
                        <ul class="ashade-socials">
                            <li><a href="{{ url('https://web.facebook.com/ADE.ENCGC/') }}" target="_blank">Fb</a></li>
                            <li><a href="{{ url('https://www.twitter.com/') }}" target="_blank">Tw</a></li>
                            <li><a href="{{ url('https://www.youtube.com/user/AdeEncgCasablanca') }}"
                                   target="_blank">Yt</a></li>
                            <li><a href="{{ url('https://www.instagram.com/adeencgcasa/') }}" target="_blank">In</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ashade-footer__copyright">
                        Copyright &copy; 2020. All Rights Reserved.
                    </div>
                </div>
            </footer>
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
