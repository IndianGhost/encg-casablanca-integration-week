@extends('layouts.second-layout')

@section('content')
    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Espace ENCG Casablanca</span>
            Galerie
        </h1>
    </div>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
                <section class="ashade-section">
                    <div class="ashade-gallery-adjusted ashade-grid ashade-grid-3cols">


                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/1.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/1.jpg') }}"
                                     alt="Auto Showroom" class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/2.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/2.jpg') }}"
                                     alt="Auto Showroom" class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/3.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/3.jpg') }}"
                                     alt="Auto Showroom"
                                     class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/4.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/4.jpg') }}"
                                     alt="Auto Showroom"
                                     class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/5.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/5.jpg') }}"
                                     alt="Auto Showroom"
                                     class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/6.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/6.jpg') }}"
                                     alt="Auto Showroom" class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/7.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/7.jpg') }}"
                                     alt="Auto Showroom"
                                     class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/8.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/8.jpg') }}"
                                     alt="Auto Showroom"
                                     class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/9.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/9.jpg') }}"
                                     alt="Auto Showroom"
                                     class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/10.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/10.jpg') }}"
                                     alt="Auto Showroom"
                                     class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/11.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/11.jpg') }}"
                                     alt="Auto Showroom" class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                        <div class="ashade-gallery-item ashade-grid-item">
                            <a href="{{ asset('img/visite/12.jpg') }}" class="ashade-lightbox-link"
                               data-size="1920x1080">
                                <img src="{{ asset('img/null.png') }}" data-src="{{ asset('img/visite/12.jpg') }}"
                                     alt="Auto Showroom"
                                     class="lazy"
                                     width="300">
                            </a>
                        </div><!-- .ashade-gallery-item -->

                    </div>
                </section>
            </div><!-- .ashade-content -->
            @include('includes.footer')
        </div>
    </main>
@endsection
