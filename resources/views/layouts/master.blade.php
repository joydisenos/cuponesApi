<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>Cupones Argentina</title>
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}"/>
<link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png" sizes="16x16">
<link rel="stylesheet" href="{{ asset('assets/vendor/pace/pace.css') }}">
<script src="{{ asset('assets/vendor/pace/pace.min.js') }}"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/timepicker/bootstrap-timepicker.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/fonts/jost/jost.css')}}">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/materialdesignicons/materialdesignicons.min.css')}}">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/atmos.min.css')}}">
<!-- Additional library for page -->
<link rel="stylesheet" href="{{asset('assets/fonts/flow/flow.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
@yield('header')
</head>
<!--body with default sidebar pinned -->
<body class="sidebar-pinned">
<!--sidebar Begins-->
<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="{{ asset('assets/img/logo.svg')}}" width="40" alt="atmos Logo">
        <span class="admin-brand-content"><a href="{{ route('inicio') }}">  Cupones</a></span>
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <!-- Menu List Begins-->
        <ul class="menu">
            <!--list item begins-->
            <li class="menu-item">
                <a href="{{route('inicio')}}" class="menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Inicio
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                   <span class="icon-badge badge-success badge badge-pill">1</span>

                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                </a>

            </li>
            <!--list item ends-->

            <!--list item begins-->
            <li class="menu-item">
                <a href="{{route('usuarios.admin')}}" class="menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Usuarios
                                                </span>
                                            </span>
                    <span class="menu-icon">

                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                </a>

            </li>
            <!--list item ends-->

            <!--list item begins-->
            <li class="menu-item">
                <a href="{{route('empresas.admin')}}" class="menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Empresas
                                                </span>
                                            </span>
                    <span class="menu-icon">

                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                </a>

            </li>
            <!--list item ends-->

            <!--list item begins-->
            <li class="menu-item">
                <a href="{{route('reservas.admin')}}" class="menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Reservas
                                                </span>
                                            </span>
                    <span class="menu-icon">

                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                </a>

            </li>
            <!--list item ends-->

           

            <!--list item begins-->
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Ofertas
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Crear o editar ofertas</span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="{{route('ofertas.crear')}}" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Crear</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    L
                                                </i>
                                            </span>
                        </a>

                    </li>

                    <li class="menu-item">
                        <a href="{{route('ofertas.admin')}}" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Generales</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    L
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Categorías
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            @foreach(App\Categoria::categoriasActivas() as $categoria)
                                <li class="menu-item">
                                    <a href="{{route('ofertas.admin.categoria' , [$categoria->link])}}" class=" menu-link">
                                                        <span class="menu-label">
                                                            <span class="menu-name">{{$categoria->nombre}}</span>
                                                        </span>
                                        <span class="menu-icon">
                                                            <i class="icon-placeholder  ">
                                                            {{ str_limit($categoria->nombre , 1 , '') }}
                                                            </i>
                                                        </span>
                                    </a>

                                </li>
                           @endforeach

                        </ul>
                    </li>

                    

                </ul>
            </li>

            <li class="menu-item">
                        <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Códigos</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    C
                                                </i>
                                            </span>
                        </a>

                    </li>

                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Descuentos</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    D
                                                </i>
                                            </span>
                        </a>

                    </li>

                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Códigos</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    C
                                                </i>
                                            </span>
                        </a>

                    </li>

                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Mailing</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    M
                                                </i>
                                            </span>
                        </a>

                    </li>

                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Banners</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    B
                                                </i>
                                            </span>
                        </a>

                    </li>
            <!--list item ends-->
        </ul>
        <!-- Menu List Ends-->
    </div>

</aside>
<!--sidebar Ends-->


<main class="admin-main">

    <!--site header begins-->
<header class="admin-header">

    <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

    <nav class=" mr-auto my-auto">
        <ul class="nav align-items-center">

            <li class="nav-item">
                <a class="nav-link  " data-target="#siteSearchModal" data-toggle="modal" href="#">
                    <i class=" mdi mdi-magnify mdi-24px align-middle"></i>
                </a>
            </li>
        </ul>
    </nav>
    <nav class=" ml-auto">
        <ul class="nav align-items-center">

            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-24px mdi-bell-outline"></i>
                        <span class="notification-counter"></span>
                    </a>

                    <div class="dropdown-menu notification-container dropdown-menu-right">
                        <div class="d-flex p-all-15 bg-white justify-content-between border-bottom ">
                            <a href="#!" class="mdi mdi-18px mdi-settings text-muted"></a>
                            <span class="h5 m-0">Notifications</span>
                            <a href="#!" class="mdi mdi-18px mdi-notification-clear-all text-muted"></a>
                        </div>
                        <div class="notification-events bg-gray-300">
                            <div class="text-overline m-b-5">today</div>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-circle text-success"></i> All systems operational.</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-upload-multiple "></i> File upload successful.</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="mdi mdi-cancel text-danger"></i> Your holiday has been denied
                                    </div>
                                </div>
                            </a>


                        </div>

                    </div>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">V</span>

                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right"   >
                    <a class="dropdown-item" href="#">  Add Account
                    </a>
                    <a class="dropdown-item" href="#">  Reset Password</a>
                    <a class="dropdown-item" href="#">  Help </a>
                    <div class="dropdown-divider"></div>
                    @guest
                    @else
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar sesión</a>
                    @endguest
                </div>
            </li>

        </ul>

    </nav>
</header>
<!--site header ends -->    <section class="admin-content">
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <!--  container or container-fluid as per your need           -->
        <div class="loader">
            <div class="m-b-10">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        @yield('content')
        <!-- END PLACE PAGE CONTENT HERE -->
    </section>
</main>


<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>

                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">


                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                                class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                    class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                    class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@guest
@else
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endguest


<script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/vendor/popper/popper.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/vendor/select2/js/select2.full.min.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{ asset('assets/vendor/listjs/listjs.min.js')}}"></script>
<script src="{{ asset('assets/vendor/moment/moment.min.js')}}"></script>
<script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{ asset('assets/js/atmos.min.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>
<!--page specific scripts for demo-->

@include('includes.notificaciones')
@include('includes.errores')
@yield('scripts')

</body>
</html>