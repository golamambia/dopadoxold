<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('public') }}/images/favicon.png" type="image/x-icon" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/front/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/owl.theme.default.css') }}">

    <link rel="stylesheet" href="{{ asset('public/front/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/front/css/responsive.css') }}" />
    <link href="{{ asset('public/front/css/responsive.css') }}" rel="stylesheet">
</head>
<body>
    
    @yield('content')
</body>
    <script src="{{ asset('public/front') }}/js/jquery.min.js ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js "></script>
    <script src="{{ asset('public/front') }}/js/custom.js "></script>
    <script src="{{ asset('public/front') }}/js/wow.min.js "></script>
    <script src="{{ asset('public/front') }}/js/custom.js "></script>
    <script src="{{ asset('public/front') }}/js/owl.carousel.js "></script>
    

</html>
