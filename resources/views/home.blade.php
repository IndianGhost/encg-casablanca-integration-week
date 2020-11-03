@extends('layouts.app')

@section('content')
    <!-- Home Background -->
    <div class="ashade-home-background ashade-page-background is-video">
        <video src="{{ asset('video/home-bg.mp4') }}" poster="{{ asset('img/bgs/bg-home01.png') }}" muted autoplay
               loop></video>
    </div>

    <!-- Home Links and Titles -->
    <div class="ashade-home-link--works ashade-home-link-wrap">
        <div class="ashade-home-link is-link">
            <span>Explorez la plateforme</span>
            <span>Entrer</span>
        </div>
    </div><!-- .ashade-home-link-wrap -->
    <div class="ashade-home-link--contacts ashade-home-link-wrap">
        <div class="ashade-home-link is-link">
            <span>Comment utiliser</span>
            <span>Tutorial</span>
        </div>
    </div><!-- .ashade-home-link-wrap -->

    <!-- Home Title and Back Button -->
    <div class="ashade-page-title-wrap is-inactive ">
        <h1 class="ashade-page-title">&nbsp;</h1>
    </div><!-- .ashade-page-title-wrap -->

    <div class="ashade-home-return ashade-back-wrap is-inactive">
        <div class="ashade-back is-home-return">
            <span>Revenir</span>
            <span>Retour</span>
        </div>
    </div><!-- .ashade-to-top-wrap -->

    <!-- Home Tutorial Block -->
    <div id="ashade-home-contacts">
        <div class="ashade-row">
            <div class="ashade-col col-12">
                <p class="ashade-intro">Bienvenue sur la plateforme Welcome Week!</p>
            </div>
        </div><!-- .ashade-row -->
        <div class="ashade-row">
            <div class="ashade-col col-4">
                <h4 class="text-center ashade-contact-details__title">
                    <span>Étape 1</span>
                    Les Clubs
                </h4>
                <img src="{{ url('https://cdn.onlinewebfonts.com/svg/img_254618.png') }}" alt=""/>
            </div>
            <div class="ashade-col col-4">
                <h4 class="text-center ashade-contact-details__title">
                    <span>Étape 2</span>
                    Les Jeux
                </h4>
                <img src="{{ url('https://cdn.onlinewebfonts.com/svg/img_254618.png') }}" alt=""/>
            </div>
            <div class="ashade-col col-4">
                <h4 class="text-center ashade-contact-details__title">
                    <span>Étape 3</span>
                    L'inscription
                </h4>
                <img src="{{ url('https://cdn.onlinewebfonts.com/svg/img_254618.png') }}" alt=""/>
            </div>
        </div>
    </div><!-- #ashade-tutorial-contacts -->

    <!-- Home Works Block -->
    <div id="ashade-home-works">
        <div class="ashade-row">
            <div class="ashade-col col-12">
                <p class="ashade-intro">Bienvenue sur la plateforme Welcome Week!<br>Explorez nos événements et
                    activités.
                </p>
                <div class="ashade-albums-grid ashade-grid ashade-grid-2cols is-masonry">
                    <div class="ashade-album-item ashade-grid-item">
                        <div class="ashade-album-item__image">
                            <img src="{{ asset('img/espace/clubs.jpg') }}" alt="Clubs"/>
                        </div>
                        <h5>
                            <span>Espace</span>
                            Club et associations
                        </h5>
                        <a href="{{ route('clubs-space') }}" class="ashade-album-item__link"></a>
                    </div><!-- .ashade-album-item -->
                    <div class="ashade-album-item ashade-grid-item">
                        <div class="ashade-album-item__image">
                            <img src="{{ asset('img/espace/conferences.jpg') }}" alt="Conferences"/>
                        </div>
                        <h5>
                            <span>Espace</span>
                            Webinaire
                        </h5>
                        <a href="{{ route('webinar') }}" class="ashade-album-item__link"></a>
                    </div><!-- .ashade-album-item -->
                    <div class="ashade-album-item ashade-grid-item">
                        <div class="ashade-album-item__image">
                            <img src="{{ asset('img/espace/jeux.jpg') }}" alt="Jeux"/>
                        </div>
                        <h5>
                            <span>Espace</span>
                            Jeux et concours
                        </h5>
                        <a href="{{ route('games-space') }}" class="ashade-album-item__link"></a>
                    </div><!-- .ashade-album-item -->
                    <div class="ashade-album-item ashade-grid-item">
                        <div class="ashade-album-item__image">
                            <img src="{{ asset('img/espace/360.jpg') }}" alt="Visite 360"/>
                        </div>
                        <h5>
                            <span>Espace</span>
                            Visite 360
                        </h5>
                        <a href="#" class="ashade-album-item__link"></a>
                    </div><!-- .ashade-album-item -->
                </div><!-- .ashade-albums-grid -->
            </div><!-- .ashade-col -->
        </div><!-- .ashade-row -->
    </div><!-- #ashade-home-works -->
@endsection
