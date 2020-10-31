@extends('layouts.auth')

@section('style')
@endsection

@section('content')
    <!-- Header -->
    <header id="ashade-header">
        <div class="ashade-header-inner">
            <div class="ashade-logo-block">
                <a href="#" class="ashade-logo is-retina">
                    <img src="{{ asset('img/logo.png') }}" alt="Ashade Logo" width="128" height="110">
                </a>
            </div>
            <div class="ashade-nav-block">
                <nav class="ashade-nav">
                    <ul class="main-menu">
                        <li>
                            <a href="#" class="current-menu-item ashade-aside-toggler">
                                <span class="ashade-aside-toggler__icon01"></span>
                                <span class="ashade-aside-toggler__icon02"></span>
                                <span class="ashade-aside-toggler__icon03"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>E-mail et CNE pour se connecter</span>
            se connecter
        </h1>
    </div>

    <main class="ashade-content-wrap ashade-home-background ashade-page-background is-image" data-opacity="0.75"
          data-src="{{ asset('img/background/encg-casa-facade-login-2.jpg') }}">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
                <section class="ashade-section">
                    <div id="blockContainer" class="ashade-row">
                        <div class="ashade-col col-1"></div>
                        <div id="blockA" class="ashade-col col-5">
                            <div class="ashade-contact-details">
                                <h4 class="ashade-contact-details__title">
                                    Nous contacter
                                </h4>
                                <ul class="ashade-contact-details__list">
                                    <li>
                                        <i class="ashade-contact-icon la la-map-marker"></i>
                                        Beau site, B.P 2725 Ain Sebaâ, Casablanca, Maroc
                                    </li>
                                    <li>
                                        <i class="ashade-contact-icon la la-phone"></i>
                                        <a href="tel:+11234567890">(+212) 5 22 66 08 52</a>
                                    </li>
                                    <li>
                                        <i class="ashade-contact-icon la la-envelope"></i>
                                        <a href="mailto:a.shade@example.com">contact@adeencgc.com</a>
                                    </li>
                                </ul>
                            </div><!-- .ashade-contact-details -->
                        </div><!-- .ashade-col -->
                        <div id="blockB" class="ashade-col col-6">
                            <form action="{{ route('login') }}" method="POST" class="ashade-contact-form">
                                @csrf

                                <div class="ashade-row ashade-small-gap">
                                    <div class="ashade-col col-6">
                                        <input type="email" id="email" name="email"
                                               placeholder="Votre email" autofocus required>
                                    </div>

                                    <div class="ashade-col col-6">
                                        <input type="password" id="password" name="password"
                                               placeholder="Votre mot de passe"
                                               required>
                                    </div>

                                </div>
                                <textarea style="display: none;"></textarea>
                                <div class="ashade-contact-form__footer">
                                    <div class="ashade-contact-form__submit full-width">
                                        <input class="full-width" type="submit" value="Se connecter">
                                    </div>
                                </div>
                            </form>
                        </div><!-- .ashade-col -->
                    </div><!-- .ashade-row -->
                </section>
            </div><!-- .ashade-content -->

            <!-- Footer -->
            <footer id="ashade-footer">
                <div class="ashade-footer-inner">
                    <div class="ashade-footer__socials">
                        <ul class="ashade-socials">
                            <li><a href="https://web.facebook.com/ADE.ENCGC/" target="_blank">Fb</a></li>
                            <li><a href="https://www.twitter.com/" target="_blank">Tw</a></li>
                            <li><a href="https://www.youtube.com/user/AdeEncgCasablanca" target="_blank">Yt</a></li>
                            <li><a href="https://www.instagram.com/adeencgcasa/" target="_blank">In</a></li>
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
            <span>Back to</span>
            <span>Top</span>
        </div>
    </div>
@endsection

@section('javascript')
    {{--     SCRIPTS    --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset("js/core.js") }}"></script>
@endsection
