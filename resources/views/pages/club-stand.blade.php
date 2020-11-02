@extends('layouts.app')

@section('content')
    <div class="ashade-home-return ashade-back-wrap is-inactive">
        <div class="ashade-back is-home-return">
            <span>Revenir</span>
            <span>Retour</span>
        </div>
    </div><!-- .ashade-to-top-wrap -->

    <!-- Content -->
    <div class="ashade-page-title-wrap front">
        <h1 class="ashade-page-title">
            <span>Club</span>
            {{ $club->name }}
        </h1>
    </div>

    <main class="ashade-content-wrap ashade-home-background ashade-page-background is-image" data-opacity="0.75"
          data-src="{{ asset('img/espace/clubs-bg.jpg') }}">

        <img class="center" src="{{ asset($club->stand_foreground) }}" usemap="#image-map" width="90%">

        <map name="image-map">

            <a>
                <area data-fancybox data-src="#hidden-content" href="javascript:;" target="" alt="" title="Presentation"
                      coords="284,311,73" shape="circle">

                <div style="display: none; background-color: black; max-width: 90vw; max-height: 90vh;"
                     id="hidden-content">

                    <div class="ashade-row">
                        <div class="ashade-col col-6">
                            <h2>
                                <span>Presentation</span>
                                {{ $club->short_description }}
                            </h2>
                            {!! nl2br($club->description) !!}

                            <div class="ashade-contact-form__footer" style="justify-content: unset;">
                                <div class="ashade-contact-form__response"></div>
                                <div class="ashade-contact-form__submit">
                                    <input style="letter-spacing: 2px;" type="submit" value="Devenir membre du club">
                                </div>
                            </div>


                        </div>
                        <div class="ashade-col col-6 align-bottom">
                            <img
                                src="{{ asset($club->stand_presentation_img) }}"/>
                        </div>
                    </div><!-- .ashade-row -->

                </div>
            </a>

            <a>
                <area data-fancybox data-type="iframe" data-src="{{ asset($club->stand_document) }}"
                      href="javascript:;" target="" alt="" title="Brochure" coords="450,519,77" shape="circle">
            </a>

            <a>
                <area data-fancybox href="{{ url($club->stand_video) }}" target="" alt="" title="Video"
                      coords="702,224,76" shape="circle">
            </a>

            <a>
                <area data-fancybox href="{{ url('https://media.giphy.com/media/u47rGQ3iuDroKXMasR/giphy.gif') }}" target="" alt=""
                      title="Welcome Message" coords="1189,500,87" shape="circle">
            </a>

        </map>


        <div class="ashade-album-item__overlay"></div>

    </main>


    <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-to-top">
            <span>Revenir</span>
            <span>Retour</span>
        </div>
    </div>
@endsection
