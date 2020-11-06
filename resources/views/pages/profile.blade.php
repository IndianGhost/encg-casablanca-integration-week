@extends('layouts.second-layout')

@section('content')
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
                                    <input type="phone" id="phone" name="telephone"
                                           placeholder="Téléphone (Champs requis)"
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

                @include('includes.footer')
            </div>
        </div><!-- .ashade-content-scroll -->
    </main>

    <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-to-top">
            <span>Revenir</span>
            <span>Retour</span>
        </div>
    </div>
@endsection
