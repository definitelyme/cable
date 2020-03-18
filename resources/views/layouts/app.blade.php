<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'C.A.B.L.E') }}</title>

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- BoxIcons Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <!------------------------------- Styles --------------------->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <div id="app">
        <!-- Start Preloader Area -->
        @include('layouts.partials.loader')
        <!-- End Preloader Area -->

        <!-- Start Navigation Area -->
        @include('layouts.partials.nav')
        <!-- End Navigation Area -->

        <div class="app-main-content">
            @yield('content')
        </div>

        @include('layouts.partials.footer')
    </div>

    <div class="go-top"><i class='bx bx-chevron-up'></i></div>

    <!----------------- Scripts ---------------------->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery Min JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Popper Min JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap Min JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Appear Min JS -->
    <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
    <!-- Odometer Min JS -->
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- MeanMenu JS -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- WOW Min JS -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Message Conversation JS -->
    <script src="{{ asset('js/conversation.js') }}"></script>
    <!-- AjaxChimp Min JS -->
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <!-- Contact Form Min JS -->
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <!-- Particles Min JS -->
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/coustom-particles.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @stack('scripts')
</body>
</html>
