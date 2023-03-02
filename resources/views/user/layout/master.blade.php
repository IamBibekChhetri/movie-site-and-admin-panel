<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('frontend/main/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/main/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/main/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/main/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/main/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/main/css/plyr.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/main/css/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/main/css/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/main/css/main.css')}}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{asset('frontend/main/icon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{asset('frontend/main/icon/favicon-32x32.png')}}">

    <meta name="description" content="Online Movies">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title> Online Movies</title>

</head>

<body class="body">
    @include('user/layout/header')
    @yield('content')
    @include('user/layout/footer')
    @include('user/layout/script')
</body>

</html>