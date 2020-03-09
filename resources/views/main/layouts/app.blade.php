<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('main/css/bootstrap-a.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .owl-dots{
            display: none;
        }
        .photo-cen {
            margin: 5px 40px 0 0;
        }
    </style>

    <!-- custom script -->
    <script>
        
        function submitmemberlogin() {
            $("#member-login").submit();
        }

        function submitmemberloginone() {
            $("#member-login-one").submit();
        }

        function submitregister() {
            $("#register").submit();
        }

    </script>

    @yield('header')
</head>
<body>
        @include('main.layouts.includes.header')
        @include('main.layouts.includes.slider')

            @yield('content')

        @include('main.layouts.includes.footer')
        @yield('footer')
</body>
</html>
