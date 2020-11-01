@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="ashade-page-title-wrap front">
        <h1 class="ashade-page-title">
            <span>Espace</span>
            Club et associations
        </h1>
    </div>

    <main class="ashade-content-wrap ashade-home-background ashade-page-background is-image hide-on-phone" data-opacity="0.75" data-src="{{ asset('img/espace/clubs-bg.jpg') }}">


        <section class="ashade-section hide-on-phone">


            <img class="center" src="{{ asset('img/espace/clubs-fg-lg.jpg') }}" usemap="#image-map" width="90%">
            <map name="image-map">

                @foreach($clubs as $club)
                <a class="box" href="#">
                    <div class="box-text">
                        <div class="box-text-logo">
                            <img src="{{ asset($club->area_hover_logo) }}"/>
                        </div>
                        <div class="box-text-title">
                            <h5>{{$club->short_description}}</h5>
                            <p>{{$club->slogan}}</p>
                        </div>
                    </div>
                    <area href="#" alt="{{ $club->name }}" title="{{ $club->name }}" coords="{{$club->coords_lg}}" shape="rect"/>
                </a>
                @endforeach

            </map>

        </section>


        <section class="ashade-section hide-on-desktop hide-on-laptop hide-on-tablet-land">


            <img class="center" src="{{ asset('img/espace/clubs-fg-xs.jpg') }}" usemap="#image-map-xs" width="100%">
            <map name="image-map-xs">

                @foreach($clubs as $club)
                <a class="box" href="#">
                    <div class="box-text">
                        <div class="box-text-logo">
                            <img src="{{ asset($club->area_hover_logo) }}"/>
                        </div>
                        <div class="box-text-title">
                            <h5>{{ $club->short_description }}</h5>
                            <p>{{ $club->slogan }}</p>
                        </div>
                    </div>
                    <area href="#" alt="{{ $club->name }}" title="{{ $club->name }}" coords="{{ $club->coords_xs }}" shape="rect"/>
                </a>
                @endforeach

            </map>

        </section>


        <div class="ashade-album-item__overlay"></div>

    </main>

@endsection
