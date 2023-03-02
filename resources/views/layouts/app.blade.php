<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('frontend/main/css/bootstrap-reboot.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/main/css/bootstrap-grid.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/main/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/main/css/jquery.mCustomScrollbar.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/main/css/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/main/css/plyr.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/main/css/photoswipe.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/main/css/default-skin.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/main/css/main.css')}}" />

    <!-- Favicons -->
    <!-- <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png" /> -->

    <meta name="description" content="Online Movies, TV Shows & Cinema HTML Template" />
    <meta name="keywords" content="" />
    <meta name="author" content="Dmitry Volkov" />
    <title>Watch Movies</title>
</head>

<body class="body">
    <div class="sign section--bg" data-bg="img/section/section.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">

                    @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="{{asset('frontend/main/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/jquery.mCustomScrollbar.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/wNumb.js')}}"></script>
    <script src="{{asset('frontend/main/js/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/plyr.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/jquery.morelines.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/photoswipe.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('frontend/main/js/main.js')}}"></script>
</body>

</html>