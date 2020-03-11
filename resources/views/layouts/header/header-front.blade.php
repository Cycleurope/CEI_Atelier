<header id="topnav">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>


                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ml-1">
                            {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Bienvenue !</h6>
                        </div>

                        <!-- item-->
                        <a href="{{ route('profile') }}" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Mon compte</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fe-log-out"></i>
                            <span>Se déconnecter</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="/" class="logo text-center">
                    <span class="logo-lg">
                        L'Atelier Cycleurope
                        <!-- <span class="logo-lg-text-light">UBold</span> -->
                    </span>
                    <span class="logo-sm">
                    </span>
                </a>
            </div>

        </div> <!-- end container-fluid-->
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu ">

                    <li class="has-submenu">
                        <a href="{{ route('home') }}"><i class="mdi mdi-view-dashboard"></i>Tableau de bord</a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('front.masterclasses.index') }}">Formations<div class="arrow-down"></div></a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('front.explodedviews.index') }}"><i class="mdi mdi-movie-outline"></i> Vues Eclatées</a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('front.documents.index') }}"><i class="mdi mdi-movie-outline"></i> Documents Techniques</a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('front.faq.index') }}"><i class="mdi mdi-comment-question-outline"></i> F.A.Q.</a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('front.videos.index') }}"><i class="mdi mdi-movie-outline"></i> Vidéos</a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('front.phonebook.index') }}"><i class="mdi mdi-library-books"></i> Annuaire</a>
                    </li>


                </ul>

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->

</header>