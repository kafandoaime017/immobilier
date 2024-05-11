<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <style>
            .bg-navbar
            {
                background-color: rgb(206, 0, 38) !important;
                color: black !important;
            }
            body
            {
                background-color: rgb(249, 252, 255) !important;
            }
            .a_louer {
            background-color: white !important;
            border: 1px solid #ffacc6 !important;
            border-radius: 30px !important;
            font-weight: 800 !important;
            color: #c40000 !important;
            /* text-shadow: 0px 1px 0.5px black !important; */
            width: 200px !important;
        }

        .a_louer:hover {
            background-color: rgb(250, 200, 200) !important;
        }
        .navbar
        {
            z-index: 9999;
            /* padding-bottom: -10px !important; */
            background-color: rgb(204, 7, 56) !important;
        }
        </style>
        <title>App</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> --}}
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand mx-4" href="#"><img height="50" width="50"
                    src="https://www.creads.com/wp-content/uploads/2021/05/era-logo.jpg" alt=""></a>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    {{-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> --}}
                    <li class="nav-item">
                        <a class="nav-link btn text-dark a_louer active" aria-current="page" href="{{ route('faire_une_annonce') }}"
                            >Faire une annonce</a>
                    </li>
                </ul>
                {{-- <a href="{{ route('register') }}" class="btn btn-outline-primary rounded-5 fw-bolder mx-2">S'inscrire</a>/
                <a href="{{ route('login') }}" class="btn btn-danger rounded-5 fw-bolder mx-2">Se connecter</a> --}}
            </div>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i style="font-size: 30px" class="fas fa-bars"></i></button>
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://th.bing.com/th/id/R.a38d2d1637658c755b4e5bf15aa4162a?rik=fTEMD%2bkCxkRHtg&riu=http%3a%2f%2fgetdrawings.com%2ffree-icon-bw%2favatar-icon-images-14.png&ehk=mWmYQyNCT3q9PMfW3qiC56tcdNA%2fuB7%2bEigcMiUockM%3d&risl=&pid=ImgRaw&r=0" height="30" width="30" alt="">
                <small class="fw-bolder">  {{ Auth::user()->prenom }} {{ Auth::user()->nom }}</small>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Mon profile</a></li>
                  <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-light  fx-bolder w-100">Deconnexion</button>
                    </form>
                  </li>
                  {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                </ul>
              </div>

        </div>
    </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <br> <br>
                            {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de bord
                            </a>

                            <a class="nav-link" href="/properties">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Mes annonces
                            </a>
                            <a class="nav-link" href="{{ route('faire_une_annonce') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Faire une annonce
                            </a>

                            <a class="nav-link" href="{{ route('messages') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Messages
                            </a>

                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Profil
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-light  fx-bolder w-100">Deconnexion</button>
                                </form>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="sb-sidenav-footer">
                        <div class="small">Connecté en tant qu' administrateur</div>

                    </div> --}}
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>


                    @yield('content')


                </main>
            </div>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> --}}
        <script src="{{ asset('js/scripts.js') }}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> --}}
         <!-- Bootstrap Bundle with Popper.js and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->

        {{-- <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script> --}}
        {{-- <script src="assets/demo/chart-bar-demo.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
