@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="ashade-page-title-wrap front">
        <h1 class="ashade-page-title">
            <span>Jeux</span>
            Jeux et concours
        </h1>
    </div>

    <main class="ashade-content-wrap ashade-home-background ashade-page-background is-image hide-on-phone"
          data-opacity="0.75" data-src="{{ asset('img/espace/jeux-bg.jpg') }}">

        <section class="ashade-section hide-on-phone">


            <img class="center" src="{{ asset('img/espace/jeux-fg-lg.jpg') }}" usemap="#image-map" width="90%">

            <map name="image-map">
                @foreach($games as $game)
                    <a>
                        <area data-fancybox data-src="#{{$game->game_id}}" href="javascript:;" target="" alt="" title=""
                              coords="{{$game->coords_lg}}" shape="rect">

                        <div style="display: none; background-color: black; max-width: 90vw; max-height: 90vh;"
                             id="{{$game->game_id}}">

                            <div class="ashade-row">
                                <div class="ashade-col col-6">
                                    <h2>
                                        <span>Jeux</span>
                                        {{ $game->name }}
                                    </h2>
                                    {!! nl2br($game->description) !!}

                                    @if($game->is_auth_user_subscribed)
                                        <div class="ashade-contact-form__footer" style="justify-content: unset;">
                                            <div class="ashade-contact-form__response"></div>
                                            <div class="ashade-contact-form__submit">
                                                <input class="read-only" style="letter-spacing: 2px;" type="submit"
                                                       value="Votre demande a été envoyé" readonly>
                                            </div>
                                        </div>
                                    @else
                                        <form action="{{ route('game-subscribe', ['id' => $game->game_id]) }}"
                                              method="POST" class="ashade-contact-form__footer"
                                              style="justify-content: unset;">
                                            @csrf
                                            <div class="ashade-contact-form__response"></div>
                                            <div class="ashade-contact-form__submit">
                                                <input style="letter-spacing: 2px;" type="submit" value="S'inscrire">
                                            </div>
                                        </form>
                                    @endif


                                </div>
                                <div class="ashade-col col-6 align-bottom">
                                    <img src="{{ url($game->game_presentation_img) }}">
                                </div>
                            </div><!-- .ashade-row -->

                        </div>
                    </a>
                @endforeach
            </map>

        </section>


        <section class="ashade-section hide-on-desktop hide-on-laptop hide-on-tablet-land">


            <img class="center" src="{{ asset('img/espace/jeux-fg-xs.jpg') }}" usemap="#image-map-xs" width="90%">


            <map name="image-map-xs">
                @foreach($games as $game)
                    <a>
                        <area data-fancybox data-src="#{{$game->game_id}}" href="javascript:;" target="" alt="" title=""
                              coords="{{ $game->coords_xs }}" shape="rect">

                        <div style="display: none; background-color: black; max-width: 90vw; max-height: 90vh;"
                             id="{{$game->game_id}}">

                            <div class="ashade-row">
                                <div class="ashade-col col-6">
                                    <h2>
                                        <span>Jeux</span>
                                        {{ $game->name }}
                                    </h2>
                                    {!! nl2br($game->description) !!}

                                    @if($game->is_auth_user_subscribed)
                                        <div class="ashade-contact-form__footer" style="justify-content: unset;">
                                            <div class="ashade-contact-form__response"></div>
                                            <div class="ashade-contact-form__submit">
                                                <input class="read-only" style="letter-spacing: 2px;" type="submit"
                                                       value="Votre demande a été envoyé" readonly>
                                            </div>
                                        </div>
                                    @else
                                        <form action="{{ route('game-subscribe', ['id' => $game->game_id]) }}"
                                              method="POST" class="ashade-contact-form__footer"
                                              style="justify-content: unset;">
                                            @csrf
                                            <div class="ashade-contact-form__response"></div>
                                            <div class="ashade-contact-form__submit">
                                                <input style="letter-spacing: 2px;" type="submit" value="S'inscrire">
                                            </div>
                                        </form>
                                    @endif


                                </div>
                                <div class="ashade-col col-6 align-bottom">
                                    <img src="{{ url($game->game_presentation_img) }}">
                                </div>
                            </div><!-- .ashade-row -->

                        </div>
                    </a>
                @endforeach
            </map>

        </section>


        <div class="ashade-album-item__overlay"></div>

    </main>
@endsection
