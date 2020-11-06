@extends('layouts.second-layout')

@section('content')
    <main class="ashade-content-wrap ashade-home-background ashade-page-background is-image" data-opacity="0.75"
          data-src="{{ asset('img/background/encg-casa-facade-login-2.jpg') }}">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-12">
                            <p class="ashade-intro">Une équipe de 26 étudiants véhiculés par la même passion et le même
                                amour inconditionnel pour leur école. Si nous sommes ici, c'est pour faire entendre
                                votre voix.</p>
                        </div>
                    </div>
                </section>
                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-4">
                            <div class="ashade-contact-details">
                                <h4 class="ashade-contact-details__title">
                                    <span>Contact et réseau sociaux</span>
                                    Nous contacter
                                </h4>
                                <ul class="ashade-contact-details__list">
                                    <li>
                                        <i class="ashade-contact-icon la la-map-marker"></i>
                                        Beau site, B.P 2725 Ain Sebaâ, Casablanca, Maroc
                                    </li>
                                    <li>
                                        <i class="ashade-contact-icon la la-phone"></i>
                                        <a href="{{ url('tel:+212522660852') }}">(+212) 5 22 66 08 52</a>
                                    </li>
                                    <li>
                                        <i class="ashade-contact-icon la la-envelope"></i>
                                        <a href="{{ url('mailto:contact@adeencgc.com') }}">contact@adeencgc.com</a>
                                    </li>
                                </ul>
                            </div><!-- .ashade-contact-details -->
                        </div><!-- .ashade-col -->
                        <div class="ashade-col col-8">
                            <form action="#" method="post" class="ashade-contact-form">
                                <div class="ashade-row ashade-small-gap">
                                    <div class="ashade-col col-4">
                                        <input class="read-only" type="text" id="name" name="name"
                                               value="{{ Auth::user()->first_name }} {{ Auth::user()->family_name }}"
                                               required readonly/>
                                    </div>
                                    <div class="ashade-col col-4">
                                        <input class="read-only" type="email" id="email" name="email"
                                               value="{{ Auth::user()->email }}" required readonly/>
                                    </div>
                                    <div class="ashade-col col-4">
                                        <input class="read-only" type="tel" id="phone" name="phone"
                                               value="{{ Auth::user()->telephone }}"
                                               required readonly/>
                                    </div>
                                </div>
                                <textarea name="message" id="message" placeholder="Votre message..." required></textarea>
                                <div class="ashade-contact-form__footer">
                                    <div class="ashade-contact-form__response"></div>
                                    <div class="ashade-contact-form__submit">
                                        <input type="submit" value="Envoyer le message">
                                    </div>
                                </div>
                            </form>
                        </div><!-- .ashade-col -->
                    </div><!-- .ashade-row -->
                </section>
                @include('includes.footer')
            </div><!-- .ashade-content -->
        </div>
    </main>
@endsection
