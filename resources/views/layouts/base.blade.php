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
    <title>@yield('title')</title>
    <!-- itsulu favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.html') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <!-- wrapper -->
    <div class="mil-wrapper">
        <!-- top bar -->
        @livewire('elements.header')
        {{ $slot }}


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
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-125314689-11');
    </script>

    <!-- bslthemes.com buttons html begin -->
    <div class="bsl-popup" data-theme="itsulu" data-category="html">
        <div class="bsl-popup__buttons"></div>
        <div class="bsl-popup__content bsl-popup__content-related">
            <div class="bsl-popup__menu"></div>
            <div class="bsl-popup__tabs">
                <div class="bsl-popup__tab bsl-popup__tab-demo"></div>
                <div class="bsl-popup__tab bsl-popup__tab-all"></div>
                <div class="bsl-popup__tab bsl-popup__tab-related"></div>
                <div class="bsl-popup__tab bsl-popup__tab-version"></div>
            </div>
        </div>
        <div class="bsl-popup__content bsl-popup__content-help"></div>
    </div>
    <!-- bslthemes.com buttons html end -->

    <!-- bslthemes.com buttons assets begin -->
    <link rel="{{ asset('stylesheet" href="bslthms-advanced-btns/assets/style.css') }}">
    <script src="{{ asset('bslthms-advanced-btns/assets/script.js') }}"></script>


</body>



</html>
