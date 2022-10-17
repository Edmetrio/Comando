<!DOCTYPE html>
<html lang="pt_pt" dir="ltr">


<!-- Mirrored from demo.frontted.com/flowdash/120/ui-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 15:31:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestão de Esquadras</title>
    <link rel="icon" href="{{ asset('assets/images/avatar/nacional.png') }}"> 

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('assets/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/app.rtl.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('assets/css/vendor-material-icons.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/vendor-material-icons.rtl.css') }}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ asset('assets/css/vendor-fontawesome-free.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/vendor-fontawesome-free.rtl.css') }}" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-133433427-1');
    </script>

    @livewireStyles

</head>

<body class="layout-default">

    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
                    <div class="container-fluid p-0">

                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-right d-block d-lg-none" type="button"
                            data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Navbar Brand -->
                        <a href="{{ Route('/') }}">
                            <img src="{{ asset('assets/images/avatar/nacional.png') }}" alt="Foto"
                                class="avatar-img rounded-circle" style="width: 40px; height: 40px;">
                            <span>Ministério do Interior</span>
                        </a>

                        <form class="search-form d-none d-sm-flex flex" action="">
                            <button class="btn" type="submit"><i class="material-icons">search</i></button>
                            <input type="text" class="form-control" placeholder="Procurar...">
                        </form>

                        <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    data-caret="false">
                                    <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                </a>
                                <div id="notifications_menu"
                                    class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                    <div class="dropdown-item d-flex align-items-center py-2">
                                        <span class="flex navbar-notifications-menu__title m-0">Notificação</span>
                                        <a href="javascript:void(0)" class="text-muted"><small>Apagar Tudo</small></a>
                                    </div>
                                    <!-- <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                        <div class="py-2">

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="{{ asset('assets/images/256_luke-porter-261779-unsplash.jpg') }}" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">A.Demian</a> left a comment on <a href="#">FlowDash</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="{{ asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg') }}" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">A.Demian</a> left a comment on <a href="#">FlowDash</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="{{ asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg') }}" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">A.Demian</a> left a comment on <a href="#">FlowDash</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div> -->
                                    <a href="javascript:void(0);"
                                        class="dropdown-item text-center navbar-notifications-menu__footer">Ver
                                        Tudo</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    data-caret="false">
                                    <span class="mr-1 d-flex-inline">
                                        <span class="text-light">{{ Auth::user()->name }}</span>
                                    </span>
                                    <img src="{{ asset('assets/images/avatar/256_luke-porter-261779-unsplash.jpg') }}"
                                        class="rounded-circle" width="32" alt="Frontted">
                                </a>
                                <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item-text dropdown-item-text--lh">
                                        <div><strong>{{ Auth::user()->name }}</strong></div>
                                        <div class="text-muted">{{ Auth::user()->email }}</div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ Route('/')}}"><i class="material-icons">dvr</i>
                                        Início</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons">account_circle</i> Meu Perfil</a>
                                    <a class="dropdown-item" href="#"><i class="material-icons">edit</i>
                                        Alterar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"><i class="material-icons">exit_to_app</i>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="ion-android-lock" style="padding: 10px;"></i>
                                                {{ __('Sair') }}
                                            </a>
                                        </form>
                                    </a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">

            {{ $slot }}

                    
                </div>
                <!-- // END drawer-layout__content -->

                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content">
                        <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
                            <div class="sidebar-heading">Menu</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Gerir Credenciais</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="dashboards_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ Route('role')}}">
                                                <span class="sidebar-menu-text">Role</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ Route('rota')}}">
                                                <span class="sidebar-menu-text">Rota</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ Route('permissao')}}">
                                                <span class="sidebar-menu-text">Permissão</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                                        <i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                        <span class="sidebar-menu-text">Gerir Indiciados</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="apps_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ Route('indiciado')}}">
                                                <span class="sidebar-menu-text">Indiciado</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ Route('esquadra')}}">
                                                <span class="sidebar-menu-text">Listar Esquadras</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button" data-toggle="collapse"
                                                href="#course_menu">
                                                <span class="sidebar-menu-text">Indiciados Existentes</span>
                                                <span class="ml-auto d-flex align-items-center">
                                                    <span class="sidebar-menu-toggle-icon"></span>
                                                </span>
                                            </a>
                                            <ul class="sidebar-submenu collapse " id="course_menu">
                                                <li class="sidebar-menu-item ">
                                                    <a class="sidebar-menu-button" href="{{ Route('indiciadoitem')}}">
                                                        <span class="sidebar-menu-text">Lista</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item ">
                                                    <a class="sidebar-menu-button" href="app-course.html">
                                                        <span class="sidebar-menu-text">Course</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item ">
                                                    <a class="sidebar-menu-button" href="app-lesson.html">
                                                        <span class="sidebar-menu-text">Lesson</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                                        <i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                        <span class="sidebar-menu-text">Gerir Indiciados</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="apps_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ Route('indiciado')}}">
                                                <span class="sidebar-menu-text">Indiciado</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ Route('esquadra')}}">
                                                <span class="sidebar-menu-text">Listar Esquadras</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-projects.html">
                                                <span class="sidebar-menu-text">Projects</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-fullcalendar.html">
                                                <span class="sidebar-menu-text">Event Calendar</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-chat.html">
                                                <span class="sidebar-menu-text">Chat</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-email.html">
                                                <span class="sidebar-menu-text">Email</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button" data-toggle="collapse"
                                                href="#course_menu">
                                                <span class="sidebar-menu-text">Education</span>
                                                <span class="ml-auto d-flex align-items-center">
                                                    <span class="badge badge-primary">NEW</span>
                                                    <span class="sidebar-menu-toggle-icon"></span>
                                                </span>
                                            </a>
                                            <ul class="sidebar-submenu collapse " id="course_menu">
                                                <li class="sidebar-menu-item ">
                                                    <a class="sidebar-menu-button" href="app-browse-courses.html">
                                                        <span class="sidebar-menu-text">Browse Courses</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item ">
                                                    <a class="sidebar-menu-button" href="app-course.html">
                                                        <span class="sidebar-menu-text">Course</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item ">
                                                    <a class="sidebar-menu-button" href="app-lesson.html">
                                                        <span class="sidebar-menu-text">Lesson</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> --}}

                                <li class="sidebar-menu-item active open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                                        <i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                        <span class="sidebar-menu-text">Desaparecidos</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="pages_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ Route('desaparecido')}}">
                                                <span class="sidebar-menu-text">Desaparecidos</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="stories.html">
                                                <span class="sidebar-menu-text">Stories</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                                        <i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                        <span class="sidebar-menu-text">Gerir Diversos</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="layouts_menu">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="{{ Route('provincia')}}">
                                                <span class="sidebar-menu-text">Província</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ Route('distrito')}}">
                                                <span class="sidebar-menu-text">Distritos</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fixed-blank.html">
                                                <span class="sidebar-menu-text">Crime</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="mini-blank.html">
                                                <span class="sidebar-menu-text">Fases</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                           {{--  <div class="sidebar-heading">Components</div>
                            <div class="sidebar-block p-0 mb-0">
                                <ul class="sidebar-menu" id="components_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-buttons.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                                            <span class="sidebar-menu-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-alerts.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>
                                            <span class="sidebar-menu-text">Alerts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-avatars.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                                            <span class="sidebar-menu-text">Avatars</span>
                                            <span class="badge badge-primary ml-auto">NEW</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-modals.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>
                                            <span class="sidebar-menu-text">Modals</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-charts.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                                            <span class="sidebar-menu-text">Charts</span>
                                            <span class="badge badge-warning ml-auto">PRO</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-icons.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>
                                            <span class="sidebar-menu-text">Icons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-forms.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                                            <span class="sidebar-menu-text">Forms</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-range-sliders.html">
                                            <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                            <span class="sidebar-menu-text">Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-datetime.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>
                                            <span class="sidebar-menu-text">Time &amp; Date</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-tables.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                                            <span class="sidebar-menu-text">Tables</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-tabs.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tab</i>
                                            <span class="sidebar-menu-text">Tabs</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-loaders.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>
                                            <span class="sidebar-menu-text">Loaders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-drag.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>
                                            <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-pagination.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>
                                            <span class="sidebar-menu-text">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-vector-maps.html">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
                                            <span class="sidebar-menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sidebar-p-a sidebar-b-y">
                                    <div class="d-flex align-items-top mb-2">
                                        <div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Progress</div>
                                        <div class="font-weight-bold text-success">60%</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                                <a href="profile.html"
                                    class="flex d-flex align-items-center text-underline-0 text-body">
                                    <span class="avatar avatar-sm mr-2">
                                        <img src="assets/images/avatar/demi.png" alt="avatar"
                                            class="avatar-img rounded-circle">
                                    </span>
                                    <span class="flex d-flex flex-column">
                                        <strong>{{ Auth::user()->name }}</strong>
                                        <small class="text-muted text-uppercase">Site Manager</small>
                                    </span>
                                </a>
                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" data-caret="false"
                                        class="text-muted"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>{{ Auth::user()->name }}</strong></div>
                                            <div>{{ Auth::user()->email }}</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="index.html">Dashboard</a>
                                        <a class="dropdown-item" href="profile.html">My profile</a>
                                        <a class="dropdown-item" href="edit-account.html">Edit account</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="login.html">Logout</a>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-p-a">
                                <a href="https://themeforest.net/item/stack-admin-bootstrap-4-dashboard-template/22959011"
                                    class="btn btn-primary btn-block">Purchase &dollar;35</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END drawer-layout -->
        <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
                    <div class="sidebar-heading">Menu</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                <span class="sidebar-menu-text">Dashboards</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="dashboards_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="index.html">
                                        <span class="sidebar-menu-text">Default</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="analytics.html">
                                        <span class="sidebar-menu-text">Analytics</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="staff.html">
                                        <span class="sidebar-menu-text">Staff</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ecommerce.html">
                                        <span class="sidebar-menu-text">E-commerce</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="dashboard-quick-access.html">
                                        <span class="sidebar-menu-text">Quick Access</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                <span class="sidebar-menu-text">Apps</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="apps_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="app-activities.html">
                                        <span class="sidebar-menu-text">Activities</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="app-trello.html">
                                        <span class="sidebar-menu-text">Trello</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="app-projects.html">
                                        <span class="sidebar-menu-text">Projects</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="app-fullcalendar.html">
                                        <span class="sidebar-menu-text">Event Calendar</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="app-chat.html">
                                        <span class="sidebar-menu-text">Chat</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="app-email.html">
                                        <span class="sidebar-menu-text">Email</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#course_menu">
                                        <span class="sidebar-menu-text">Education</span>
                                        <span class="ml-auto d-flex align-items-center">
                                            <span class="badge badge-primary">NEW</span>
                                            <span class="sidebar-menu-toggle-icon"></span>
                                        </span>
                                    </a>
                                    <ul class="sidebar-submenu collapse " id="course_menu">
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button" href="app-browse-courses.html">
                                                <span class="sidebar-menu-text">Browse Courses</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button" href="app-course.html">
                                                <span class="sidebar-menu-text">Course</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button" href="app-lesson.html">
                                                <span class="sidebar-menu-text">Lesson</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-item active open">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                <span class="sidebar-menu-text">Pages</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse show " id="pages_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="companies.html">
                                        <span class="sidebar-menu-text">Companies</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="stories.html">
                                        <span class="sidebar-menu-text">Stories</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="discussions.html">
                                        <span class="sidebar-menu-text">Discussions</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="invoice.html">
                                        <span class="sidebar-menu-text">Invoice</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="pricing.html">
                                        <span class="sidebar-menu-text">Pricing</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="edit-account.html">
                                        <span class="sidebar-menu-text">Edit Account</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="profile.html">
                                        <span class="sidebar-menu-text">User Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="payout.html">
                                        <span class="sidebar-menu-text">Payout</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="digital-product.html">
                                        <span class="sidebar-menu-text">Digital Product</span>
                                        <span class="badge badge-primary ml-auto">NEW</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#login_menu">
                                        <span class="sidebar-menu-text">Login</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="login_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="login.html">
                                                <span class="sidebar-menu-text">Login / Background Image</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="login-centered-boxed.html">
                                                <span class="sidebar-menu-text">Login / Centered Boxed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#signup_menu">
                                        <span class="sidebar-menu-text">Sign Up</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="signup_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="signup.html">
                                                <span class="sidebar-menu-text">Sign Up / Background Image</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="signup-centered-boxed.html">
                                                <span class="sidebar-menu-text">Sign Up / Centered Boxed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="product-listing.html">
                                        <span class="sidebar-menu-text">Product Listing</span>
                                        <span class="badge badge-primary ml-auto">NEW</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="blank.html">
                                        <span class="sidebar-menu-text">Blank Page</span>
                                        <span class="badge badge-primary ml-auto">NEW</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                <span class="sidebar-menu-text">Layouts</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="layouts_menu">
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="blank.html">
                                        <span class="sidebar-menu-text">Default</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="fluid-blank.html">
                                        <span class="sidebar-menu-text">Full Width Navs</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="fixed-blank.html">
                                        <span class="sidebar-menu-text">Fixed Navs</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="mini-blank.html">
                                        <span class="sidebar-menu-text">Mini Sidebar + Navs</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="sidebar-heading">Components</div>
                    <div class="sidebar-block p-0 mb-0">
                        <ul class="sidebar-menu" id="components_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-buttons.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                                    <span class="sidebar-menu-text">Buttons</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-alerts.html">
                                    <i
                                        class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>
                                    <span class="sidebar-menu-text">Alerts</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-avatars.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                                    <span class="sidebar-menu-text">Avatars</span>
                                    <span class="badge badge-primary ml-auto">NEW</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-modals.html">
                                    <i
                                        class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>
                                    <span class="sidebar-menu-text">Modals</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-charts.html">
                                    <i
                                        class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                                    <span class="sidebar-menu-text">Charts</span>
                                    <span class="badge badge-warning ml-auto">PRO</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-icons.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>
                                    <span class="sidebar-menu-text">Icons</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-forms.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                                    <span class="sidebar-menu-text">Forms</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-range-sliders.html">
                                    <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                    <span class="sidebar-menu-text">Range Sliders</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-datetime.html">
                                    <i
                                        class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>
                                    <span class="sidebar-menu-text">Time &amp; Date</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-tables.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                                    <span class="sidebar-menu-text">Tables</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-tabs.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tab</i>
                                    <span class="sidebar-menu-text">Tabs</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-loaders.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>
                                    <span class="sidebar-menu-text">Loaders</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-drag.html">
                                    <i
                                        class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>
                                    <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-pagination.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>
                                    <span class="sidebar-menu-text">Pagination</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-vector-maps.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
                                    <span class="sidebar-menu-text">Vector Maps</span>
                                </a>
                            </li>
                        </ul>

                        <div class="sidebar-p-a sidebar-b-y">
                            <div class="d-flex align-items-top mb-2">
                                <div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Progress</div>
                                <div class="font-weight-bold text-success">60%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                        <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                            <span class="avatar avatar-sm mr-2">
                                <img src="assets/images/avatar/demi.png" alt="avatar"
                                    class="avatar-img rounded-circle">
                            </span>
                            <span class="flex d-flex flex-column">
                                <strong>Adrian Demian</strong>
                                <small class="text-muted text-uppercase">Site Manager</small>
                            </span>
                        </a>
                        <div class="dropdown ml-auto">
                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i
                                    class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-item-text dropdown-item-text--lh">
                                    <div><strong>Adrian Demian</strong></div>
                                    <div>@adriandemian</div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html">Dashboard</a>
                                <a class="dropdown-item" href="profile.html">My profile</a>
                                <a class="dropdown-item" href="edit-account.html">Edit account</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.html">Logout</a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-p-a">
                        <a href="https://themeforest.net/item/stack-admin-bootstrap-4-dashboard-template/22959011"
                            class="btn btn-primary btn-block">Purchase &dollar;35</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default"
            :layout-location="{
                'default': 'ui-tables.html',
                'fixed': 'fixed-ui-tables.html',
                'fluid': 'fluid-ui-tables.html',
                'mini': 'mini-ui-tables.html'
            }">
        </app-settings>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{ asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>

    <!-- DOM Factory -->
    <script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>

    <!-- MDK -->
    <script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>

    <!-- App -->
    <script src="{{ asset('assets/js/toggle-check-all.js') }}"></script>
    <script src="{{ asset('assets/js/check-selected-row.js') }}"></script>
    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-mini.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{ asset('assets/js/app-settings.js') }}"></script>

    <!-- List.js -->
    <script src="{{ asset('assets/vendor/list.min.js') }}"></script>
    <script src="{{ asset('assets/js/list.js') }}"></script>

    <script>
  
        window.addEventListener('swal:modal', event => { 
            swal({
              title: event.detail.message,
              text: event.detail.text,
              icon: event.detail.type,
            });
        });
          
        window.addEventListener('swal:confirm', event => { 
            swal({
              title: event.detail.message,
              text: event.detail.text,
              icon: event.detail.type,
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.livewire.emit('remove');
              }
            });
        });
         </script>

    @livewireScripts
</body>



</html>
