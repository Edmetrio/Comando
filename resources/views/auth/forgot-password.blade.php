{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from demo.frontted.com/flowdash/120/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 13:01:26 GMT -->

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

{{--     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-133433427-1');
    </script>

</head>

<body class="layout-login">

    <div class="layout-login__overlay"></div>
    <div class="layout-login__form bg-white" data-perfect-scrollbar>
        <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
            <a href="index.html" class="navbar-brand" style="min-width: 0">
                <img class="navbar-brand-icon" src="{{ asset('assets/images/avatar/nacional.png') }}" width="80" alt="Stack">
            </a>
        </div>

        <h4 class="mb-1">PRM!</h4>
        <p class="mb-3">Acede já a plataforma </p>
       {{--  <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
        <div class="container-fluid page__container">
            @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label class="text-label" for="email_2">E-mail:</label>
                <div class="input-group input-group-merge">
                    <input id="email_2" type="email" required="" name="email" class="form-control form-control-prepended"
                        placeholder="prm@gov.mz">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-envelope"></span>
                        </div>
                    </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-primary mb-5" type="submit">Redefinir palavra-passe</button><br>
            </div>
        </form>
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

</body>



</html>
