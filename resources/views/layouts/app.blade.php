<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/icon-san.png') }}" type="image/x-icon">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
        @yield('css')
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @include('layouts.modal')
        @include('layouts.alert')
        <div id="app">
        <div class="row g-0">
            @guest
            @else
            <div class="col-md-2 min-vh-100 bg-primary-2">
            <div class="sticky-top">
            <div class="container">
                <nav class="navbar bg-primary shadow-sm">
                    <div class="container px-3">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/logo-1-w.png') }}" alt="" width="100%">
                    </a>
                    </div>
                </nav>
                </div>
            <div class="list-group list-group-flush nav-admin">
                <a href="{{ route('home') }}" class="list-group-item list-group-item-action"><i class="bi bi-shield-lock me-3"></i>Dashboard</a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#nav-1" aria-expanded="false">
                    <div>
                        <i class="bi bi-archive me-3"></i>Products
                    </div>
                    <div>
                        <i  class="bi bi-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse" id="nav-1">
                    <div class="list-group list-group-flush nav-admin">
                        <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Table</a>
                        <a href="{{ route('products.create') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Create</a>
                    </div>
                </div>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#nav-2" aria-expanded="false">
                    <div>
                        <i class="bi bi-bookmark-plus me-3"></i>Brands
                    </div>
                    <div>
                        <i  class="bi bi-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse" id="nav-2">
                    <div class="list-group list-group-flush nav-admin">
                        <a href="{{ route('brands.index') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Table</a>
                        <a href="{{ route('brands.create') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Create</a>
                    </div>
                </div>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#nav-3" aria-expanded="false">
                    <div>
                        <i class="bi bi-collection me-3"></i>Artikel
                    </div>
                    <div>
                        <i  class="bi bi-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse" id="nav-3">
                    <div class="list-group list-group-flush nav-admin">
                        <a href="{{ route('artikel.index') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Table</a>
                        <a href="{{ route('artikel.create') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Create</a>
                    </div>
                </div>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#nav-4" aria-expanded="false">
                    <div>
                        <i class="bi bi-file-earmark-break me-3"></i>Brosur
                    </div>
                    <div>
                        <i  class="bi bi-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse" id="nav-4">
                    <div class="list-group list-group-flush nav-admin">
                        <a href="{{ route('index.brosur') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Table</a>
                        <a href="{{ route('create.brosur') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Create</a>
                    </div>
                </div>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#nav-5" aria-expanded="false">
                    <div>
                        <i class="bi bi-layers me-3"></i>Sliders
                    </div>
                    <div>
                        <i  class="bi bi-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse" id="nav-5">
                    <div class="list-group list-group-flush nav-admin">
                        <a href="{{ route('index.slider') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Table</a>
                        <a href="{{ route('create.slider') }}" class="list-group-item list-group-item-action"><i class="bi bi-dot me-3"></i>Create</a>
                    </div>
                </div>
                <a href="{{ route('index.contact') }}" class="list-group-item list-group-item-action"><i class="bi bi-envelope-open me-3"></i>Contact</a>
                <a href="{{ route('index.home') }}" target="_blank" class="list-group-item list-group-item-action"><i class="bi bi-arrow-up-right-circle me-3"></i>Preview Web</a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#modalOut"><i class="bi bi-x-circle me-3"></i>Logout</a>
            </div>
            </div>
            </div>
            @endguest
            <div class="col-md">
                @guest
                @else
                <div class="sticky-top">
                <nav class="navbar bg-white shadow-sm p-0">
                    <div class="container">
                        <h5 class="m-0 title-6 text-uppercase">Dashboard</h5>
                        <ul class="nav ms-auto">
                            <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('img/user.png') }}" alt="" width="30" class="me-2">Account<i class="bi bi-chevron-down ms-2"></i> 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="javascript:void(0)">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalOut">Logout</a></li>
                            </ul>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
                </div>
                @endguest
                <div class="p-3">
                    @yield('content')
                </div>
            </div>
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('js')
    </body>
</html>