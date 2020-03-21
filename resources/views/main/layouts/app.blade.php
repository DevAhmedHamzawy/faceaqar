<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {!! SEO::generate() !!}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js" defer></script>

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
        @if (url()->current() === env('APP_URL'))
            @include('main.layouts.includes.slider')
        @endif

            @yield('content')

        @include('main.layouts.includes.footer')
        @yield('footer')


        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5e6cc0038d24fc2265879014/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
</body>
</html>
