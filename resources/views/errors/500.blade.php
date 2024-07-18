<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap-grid.css') }}">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/font-awesome.min.css') }}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
    <!-- itsulu css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Internal Servor Error</title>
    <!-- itsulu favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.html') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#0934f1">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <!-- wrapper -->
    <div class="mil-wrapper">
        <!-- top bar -->
        @livewire('elements.header')
        <div class="mil-dark-bg mil-add-page">
            <div class="mil-deco mil-deco-accent" style="top: 40vh; right: 10%; transform: rotate(90deg)"></div>
            <img src="img/deco/map.png" alt="background" class="mil-map-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">

                        <div class="mil-text-center mil-mb-30">
                            <h5 class="mil-light">Error</h5>
                            <h1 class="mil-light mil-404-number">500</h1>
                            <h5 class="mil-light">Internal <span class="mil-accent">Servor</span> Error</h5>
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <div class="mil-404-text">
                            <p class="mil-light-soft mil-mb-30">Internal Servor Error Occured.</p>
                            <a href="/" class="mil-button mil-border mil-light"><span>Back to
                                    homepage</span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        @livewire('elements.footer')
        <!-- footer end -->

    </div>
    <!-- wrapper end -->

    <!-- jQuery js -->
    <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
    <!-- itsulu js -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- bslthemes.com buttons assets begin -->
    <link rel="{{ asset('stylesheet" href="bslthms-advanced-btns/assets/style.css') }}">
    <script src="{{ asset('bslthms-advanced-btns/assets/script.js') }}"></script>


</body>



</html>
