<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ControlGastos') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">

    <!-- select  -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="background-color: #A9DBB8">
            <div class="container">
                <div class="row">
                    <a class="navbar-brand mx-4" href="{{ route('home') }}" style="color: rgb(0, 0, 0)">
                        <img src="https://lh3.googleusercontent.com/fife/AAWUweWHGqTzLLX6yQdzHhTurNaZns6MDQFEuev_1bfafhVHYV4rS1VKGyDvWlzs8ccMT0qbd-tCIked1ut7Ei_CYdQk9Gut6045tcuhxuPZu6FaNBYP8ztmZMJO3wg6GJEOosvrahpT_Ll7VzTRVriwABTELGTMKsCgqKrioefiLSY4Fff4R00z6ItGR_8m13RNdrVvmlKQYZJifDga9ML3R6ILSLgj6BnZYeKj8lD0ahfkXADVD9l5bJ0GPltfp9ZHww506sWXRuLxlcQt7PA3GM9IMhvxuoLVnuZufG2TZaBuHUceLyvZlgL0fwAZG3I0W6wnsckathWLNJwGXJ0HC5xT-b5_W92NDfC3dgBflzPH0x67RC1CTZeWJLeW-CtLB_r9Jiqzcw6kfO4e432e-Ipm0TYRJP426GFiyQjeTnqXAZibrji1pxE_iKSmmyd-1IeNLztYEwVCgsh6W-fhbqZ7dQmZNStqJDR1eVo08nmdpI7jf5B2fLdk3IARUmZW4X31egoDt-Y2hLZ2dJnjCO5w_zG69wTvaBSxlPQnglf4yH66KuuT7NSBDEH_yEdZ_tRfmYCuO0UhIJXeyqnLnJdt1VT27Vm0eGu222cmWqC-tZeOq-xr8f7oD1iSInw6zX2lr_AkSyvT1vFPfc1PN3bdcVcsZUe7gKqF4RzyHl_db_wIzGiUXug3dDhu-ygXS0L26-fv40E0P45k34BIHoo0KoKbohWqG--SHNc6jPKFPFhj2Erva8o7rqGTqcTm0xPwzskSitlOF59OCNFRTbY55ULjLMlqt0jhiy14o9t_1JLbQ1yATlEI4DsSIzFriB2RTHg_TAgIWPWilg=w1868-h903" width="50" height="50">
                        {{ config('app.name', 'Control de gastos') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item mx-2">
                                    <a href="{{ route('login') }}" type="button" class="btn btn-success" > {{ __('Iniciar Sesión') }} </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item mx-2">
                                    <a type="button" class="btn btn-success" href="{{ route('register') }}">{{ __('Registrase') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown mx-2">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Movimientos
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a style="color: black" class="nav-link" href="{{ route('incomes.create')}}">    Registrar ingreso</a>
                                    <a style="color: black" class="nav-link" href="{{ route('expenses.create')}}">    Registrar egreso</a>
                                    <a style="color: black" class="nav-link" href="{{ route('account', $user = Auth()->user()) }}">    Ver movimientos</a>
                                    <a style="color: black" class="nav-link" href="{{ route('graphics', $user = Auth()->user())}}">    Ver gráficas</a>
                                </div>
                            </li>
                                <li class="nav-item dropdown mx-2">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- -----------------------------Footer ----------------------------->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Right -->
        <div>
            <br>
            {{-- <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
            </a> --}}
        </div>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem "></i>Control de gastos
                </h6>
                <p> Proyecto desarrollado por: </p>
                <p> - Esteban Patiño Gaviria </p>
                <p> - Santiago Jiménez Villegas </p>
                <p> - Juan Sebastían Cardenas </p>
                <p> - Manuel Patiño Calderon </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Products
                </h6>
                <p>
                <a href="#!" class="text-reset">ORM</a>
                </p>
                <p>
                <a href="#!" class="text-reset">laravel-Collective</a>
                </p>
                <p>
                <a href="https://getbootstrap.com" class="text-reset">bootstrap</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Laravel</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Useful links
                </h6>
                <p>
                <a href="#!" class="text-reset">Google</a>
                </p>
                <p>
                <a href="https://www.youtube.com" class="text-reset">Youtube</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contact
                </h6>
                <p><i class="fas fa-home me-3"></i> Manizales, Colombia</p>
                <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i> ########</p>
            </div>
            <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>
