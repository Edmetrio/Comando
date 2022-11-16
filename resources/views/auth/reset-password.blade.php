{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Reset Password') }}
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
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="container-fluid page__container">
            @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

        <form method="POST" action="{{ route('password.update') }}">
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
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

            <div class="form-group">
                <label class="text-label" for="password_2">Palavra-passe:</label>
                <div class="input-group input-group-merge">
                    <input id="password_2" type="password" required="" name="password" class="form-control form-control-prepended"
                        placeholder="Enter your password">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-key"></span>
                        </div>
                    </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            <div class="form-group">
                <label class="text-label" for="password_2">Confirmar Palavra-passe:</label>
                <div class="input-group input-group-merge">
                    <input id="password_2" type="password" required="" name="password_confirmation" class="form-control form-control-prepended"
                        placeholder="Enter your password">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-key"></span>
                        </div>
                    </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
