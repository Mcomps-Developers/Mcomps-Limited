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
    <title>Mcomps Limited - Made To Go Beyond</title>
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
        <div class="mil-top-position mil-fixed">
            <div class="mil-top-panel mil-top-panel-transparent mil-animated">
                <!-- mil-top-panel-transparent -->
                <div class="container">
                    <a href="/" class="mil-logo" style="width: 140px"></a>
                    <div class="mil-navigation">
                        <nav>
                            <ul>
                                <li class="mil-has-children">
                                    <a href="/">Home</a>
                                    <ul>
                                        {{-- <li><a href="home-2.html">Home V2</a></li> --}}


                                        {{-- <li><a href="team-single.html">Team Member</a></li> --}}
                                        <li><a href="careers.html">Careers</a></li>
                                        {{-- <li><a href="{{ route('pricing') }}">Prices</a></li> --}}


                                    </ul>
                                </li>
                                {{-- <li><a href="{{ route('portfolio') }}">Case Studies</a></li> --}}
                                <li class="mil-has-children">
                                    <a href="#.">Services</a>
                                    <ul>
                                </li>
                                        <li><a href="{{ route('service1') }}">SAAS-Development-Services</a></li>
                                        <li><a href="{{ route('service2') }}">UI/UX design</a></li>
                                        <li><a href="{{ route('service3') }}">Mobile app development</a></li>
                                        <li><a href="{{ route('service4') }}">Cybersecurity</a></li>
                                    </ul>
                                </li>
                                <li class="mil-has-children">
                                    <a href="#.">About</a>
                                    <ul>
                                        <li><a href="{{ route('about') }}">About Mcomps</a></li>
                                        <li class="nav-item">
                                            <a href="{{ asset('img/Mcomps Limited Company Profile.pdf') }}" class="nav-link">Company
                                                profile</a>
                                        </li>
                                        <li><a href="{{ route('team') }}">Our Team</a></li>




                                    </ul>
                                    <li class="mil-has-children">
                                        <a href="#.">Media</a>
                                        <ul>

                                            <li><a href="{{ route('blogs') }}">Blog</a></li>
                                            <li><a href="{{ route('events') }}">Event</a></li>
                                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                                        </ul>

                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li class="mil-has-children">
                                    {{-- <a href="#.">Other</a>
                                    <ul>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul> --}}
                                </li>
                            </ul>
                            <div class="mil-search-icon">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="../../../www.w3.org/2000/svg.html">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.5848 19.7029C20.3908 19.8999 20.1358 19.997 19.8808 19.997C19.6268 19.997 19.3718 19.8999 19.1778 19.7029L15.5118 16.2199C13.9778 17.2549 12.3798 17.997 9.92584 17.997C4.98484 17.997 0.964844 13.959 0.964844 8.99695C0.964844 4.34995 4.98484 0.199951 9.92584 0.199951C14.8668 0.199951 18.8858 4.34995 18.8858 8.99695C18.8858 11.118 18.1468 13.68 16.9188 14.608L20.5848 18.29C20.9738 18.681 20.9738 19.3129 20.5848 19.7029ZM9.92584 1.99695C6.82984 1.99695 2.95684 5.13695 2.95684 8.99695C2.95684 12.857 6.82984 15.998 9.92584 15.998C11.8398 15.998 13.5758 15.217 14.8368 13.957C14.8408 13.952 14.8418 13.945 14.8468 13.941C14.8518 13.936 14.8578 13.935 14.8628 13.93C16.1168 12.663 16.8948 10.92 16.8948 8.99695C16.8948 5.13695 13.7678 1.99695 9.92584 1.99695Z" />
                                </svg>
                            </div>
                        </nav>

                    </div>
                    <!-- mobile menu button -->
                    <div class="mil-menu-btn">
                        <span></span>
                    </div>
                    <!-- mobile menu button end -->
                </div>
            </div>
        </div>
        {{ $slot }}


        <footer class="mil-dark-bg">
            <img src="{{ asset('img/deco/map.png') }}" alt="background" class="mil-footer-bg">
            <div class="container">
                <div class="mil-footer-content mil-p-120-90">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4 mil-mb-30">

                            <img src="{{ asset('img/logo/logo-light.png') }}" alt="" class="mil-logo mil-mb-30"
                                style="width: 140px">

                            <p class="mil-light-soft mil-mb-30">We design, develop, and support business applications using the latest
                                 technology and standards.</p>

                            {{-- <a href="#." class="mil-app-btn mil-mb-5">
                                <i class="fab fa-google-play"></i>
                                <div class="mil-app-text">
                                    <span class="mil-accent mil-text-sm">Available on the</span>
                                    <div class="mil-h6">Google Play</div>
                                </div>
                            </a>

                            <a href="#." class="mil-app-btn">
                                <i class="fab fa-apple"></i>
                                <div class="mil-app-text">
                                    <span class="mil-accent mil-text-sm">Download on the</span>
                                    <div class="mil-h6">App Store</div>
                                </div>
                            </a> --}}

                        </div>
                        <div class="col-xl-7 mil-mt-60-adapt">

                            <div class="row">
                                <div class="col-lg-7 mil-mb-30">

                                    <h3 class="mil-light mil-up-font mil-mb-30">Join <span
                                            class="mil-accent">McompsLimited</span> <br>Experience</h3>
                                    <p class="mil-light-soft">Are you ready to join Mcomps Limited and experience the excitement of being part of a dynamic team dedicated to innovation and excellence? With opportunities for growth and development, we strive to create an environment where your skills and talents can flourish. Join us in shaping the future of technology
                                         and making a meaningful impact in the industry.</p>

                                </div>
                                <div class="col-lg-5 mil-mb-30">

                                    <form>

                                        <input class="mil-rounded-input mil-text-center mil-mb-5" type="text"
                                            placeholder="Your email address">
                                        <button class="mil-button mil-accent-bg mil-fw"><span>Subscribe
                                                Now</span></button>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mil-divider mil-light"></div>

                <div class="mil-footer-links">
                    <ul class="mil-social mil-light">
                        <li class="mil-adapt-links"><a href="https://www.facebook.com/McompsLimited">Facebook</a><a href="#.">FB</a></li>
                        {{-- <li class="mil-adapt-links"><a href="https://www.instagram.com">Instagram</a><a href="#.">IG</a></li> --}}
                        <li class="mil-adapt-links"><a href="#.">LinkedIn</a><a href="#.">IN</a></li>
                        <li class="mil-adapt-links"><a href="https://twitter.com/McompsLimited">Twitter</a><a href="#.">TW</a></li>
                        <li class="mil-adapt-links"><a href="#.">YouTube</a><a href="#.">YT</a></li>
                    </ul>
                    <ul class="mil-additional-links mil-light">
                        <li><a href="#.">Terms & Condition</a></li>
                        <li><a href="#.">Privacy Policy</a></li>
                        <li><a href="#.">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="mil-footer-bottom">
                <div class="container">
                    <p class="mil-text-sm mil-light">© McompsLimited 2024.</p>
                    <p class="mil-text-sm mil-light">All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        <!-- footer end -->

    </div>
    <!-- wrapper end -->

    <!-- jQuery js -->
    <script src="js/plugins/jquery.min.js"></script>
    <!-- swiper js -->
    <script src="js/plugins/swiper.min.js"></script>
    <!-- itsulu js -->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="../../../www.googletagmanager.com/gtag/js701c?id=UA-125314689-11"></script>
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
    <link rel="{{ asset('stylesheet" href="../../bslthms-advanced-btns/assets/style.css') }}">
    <script src="{{ asset('../../bslthms-advanced-btns/assets/script.js') }}"></script>


</body>



</html>
