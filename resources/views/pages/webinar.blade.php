@extends('layouts.app')

@section('content')
    <div class="ashade-page-title-wrap front">
        <h1 class="ashade-page-title">
            <span>Conférences</span>
            webinaire
        </h1>
    </div>

    <main class="ashade-content-wrap ashade-home-background ashade-page-background is-image hide-on-phone"
          data-opacity="0.75" data-src="{{ asset('img/espace/webinaire-bg.jpg') }}">

        <section class="ashade-section hide-on-phone">


            <img class="center" src="{{ asset('img/espace/webinaire-fg-lg.jpg') }}" usemap="#image-map" width="90%">

            <map name="image-map">

                <a>
                    <area data-fancybox href="{{ url('https://www.youtube.com/watch?v=P8OoLtebnsY') }}" target="" alt=""
                          title=""
                          coords="839,551,1164,348" shape="rect">
                </a>

                <a>
                    <area data-fancybox href="{{ url('https://www.youtube.com/watch?v=P8OoLtebnsY') }}" target="" alt=""
                          title=""
                          coords="801,383,596,514" shape="rect">
                </a>

                <a>
                    <area data-fancybox href="{{ url('https://www.youtube.com/watch?v=P8OoLtebnsY') }}" target="" alt=""
                          title=""
                          coords="1192,510,1407,385" shape="rect">
                </a>


            </map>

        </section>


        <section class="ashade-section hide-on-desktop hide-on-laptop hide-on-tablet-land">


            <img class="center" src="{{ asset('img/espace/webinaire-fg-xs.jpg') }}" usemap="#image-map-xs" width="100%">


            <map name="image-map-xs">

                <a>
                    <area data-fancybox href="{{ url('https://www.youtube.com/watch?v=P8OoLtebnsY') }}" target="" alt="" title=""
                          coords="438,885,723,712" shape="rect">
                </a>

                <a>
                    <area data-fancybox href="{{ url('https://www.youtube.com/watch?v=P8OoLtebnsY') }}" target="" alt="" title=""
                          coords="743,855,930,740" shape="rect">
                </a>

                <a>
                    <area data-fancybox href="{{ url('https://www.youtube.com/watch?v=P8OoLtebnsY') }}" target="" alt="" title=""
                          coords="228,852,410,741" shape="rect">
                </a>

            </map>

        </section>


        <div class="ashade-album-item__overlay"></div>

    </main>
@endsection
