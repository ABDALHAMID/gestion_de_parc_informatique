<!DOCTYPE html>
<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Gestion de parc informatique</title>

    <!-- Fontfaces CSS-->
    <link href="{{ url('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ url('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- vendor CSS-->
    <link href="{{ url('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ url('css/theme.css') }}" rel="stylesheet" media="all">

    @yield('headScripts')
</head>
 <body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{ url('/imgs') }}/royaume-du-maroc.png" alt="royaume du maroc" />
                            <h1>GESTION DE PARC <span>informatique</span></h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('Materiel.index') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Statistique</a>
                        </li>
                        <li>
                            <a href="{{ route('listMateriel') }}">
                                <i class="fas fa-table"></i>liste de materiel</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('monitoring') }}">
                                <i class="fas fa-desktop"></i>monitoring reseaux
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ url('/imgs') }}/royaume-du-maroc.png" alt="royaume du maroc" />
                    <h1>GESTION DE PARC <span>informatique</span></h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('Materiel.index') }}">
                                <i class="bx bxl-dribbble"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Statistique</a>
                        </li>
                        <li>
                            <a href="{{ route('listMateriel') }}">
                                <i class="fas fa-table"></i>liste des materiel</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('monitoring') }}">
                                <i class="fas fa-desktop"></i>monitoring reseaux
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop cool-header">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap cool-header">
                            {{-- <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            @yield('content')
        </div>
    </div>
    <script>
        var baseUrl = '{{ URL::to('/') }}';
    </script>

    <!-- Jquery JS-->
    <script src="{{ url('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ url('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- /vendor JS       -->
    <script src="{{ url('vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ url('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ url('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ url('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ url('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ url('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ url('vendor/select2/select2.min.js') }}">
    </script>


    <!-- Main JS-->
    <script src="{{ url('js/main.js') }}"></script>

</body>

</html>
