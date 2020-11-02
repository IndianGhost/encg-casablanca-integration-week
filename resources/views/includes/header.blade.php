<!-- Header -->
<header id="ashade-header">
    <div class="ashade-header-inner">
        <div class="ashade-logo-block">
            <a href="#" class="ashade-logo is-retina">
                <img src="{{ asset('img/logo.png') }}" alt="Ashade Logo" width="128" height="110"/>
            </a>
        </div>
        <div class="ashade-nav-block">
            <nav class="ashade-nav">
                <ul class="main-menu">
                    <li>
                        <a href="{{ route('home') }}"><i class="la la-home"></i> Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('clubs-space') }}"><i class="la la-users"></i> Clubs</a>
                    </li>
                    <li>
                        <a href="{{ route('webinar') }}"><i class="la la-desktop"></i> Webinaire</a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-gamepad"></i> Jeux et concours</a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-camera"></i> Visite 360</a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-at"></i> Contacts</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                class="la la-sign-out"></i> Déconnexion
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="ashade-aside-toggler">
                            <i class="la la-outdent"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
