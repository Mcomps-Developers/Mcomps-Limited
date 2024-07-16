<footer class="mil-dark-bg">
    <img src="{{ asset('img/deco/map.png') }}" alt="background" class="mil-footer-bg">
    <div class="container">
        <div class="mil-footer-content mil-p-120-90">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4 mil-mb-30">

                    <img src="{{ asset('img/logo/logo-light.png') }}" alt="" class="mil-logo mil-mb-30"
                        style="width: 140px">

                    <p class="mil-light-soft mil-mb-30">We design, develop, and support business applications
                        using the latest
                        technology and standards.</p>

                    <a href="javascript:void(0);" class="mil-app-btn mil-mb-5">
                        <i class="fab fa-google-play"></i>
                        <div class="mil-app-text">
                            <span class="mil-accent mil-text-sm">Available on the</span>
                            <div class="mil-h6">Google Play</div>
                        </div>
                    </a>

                    <a href="javascript:void(0);" class="mil-app-btn">
                        <i class="fab fa-apple"></i>
                        <div class="mil-app-text">
                            <span class="mil-accent mil-text-sm">Download on the</span>
                            <div class="mil-h6">App Store</div>
                        </div>
                    </a>

                </div>
                <div class="col-xl-7 mil-mt-60-adapt">

                    <div class="row">
                        <div class="col-lg-7 mil-mb-30">

                            <h3 class="mil-light mil-up-font mil-mb-30">Join <span
                                    class="mil-accent">McompsLimited</span> <br>Experience</h3>
                            <p class="mil-light-soft">Are you ready to join Mcomps Limited and experience the
                                excitement of being part of a dynamic team dedicated to innovation and
                                excellence? With opportunities for growth and development, we strive to create
                                an environment where your skills and talents can flourish. Join us in shaping
                                the future of technology
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
                <li class="mil-adapt-links"><a href="https://www.facebook.com/McompsLimited">Facebook</a><a
                        href="https://www.facebook.com/McompsLimited">FB</a></li>
                {{-- <li class="mil-adapt-links"><a href="https://www.instagram.com">Instagram</a><a href="javascript:void(0);">IG</a></li> --}}
                <li class="mil-adapt-links"><a href="#!">LinkedIn</a><a href="#!">IN</a></li>
                <li class="mil-adapt-links"><a href="https://twitter.com/McompsLimited">Twitter</a><a
                        href="https://twitter.com/McompsLimited">TW</a></li>
                <li class="mil-adapt-links"><a href="javascript:void(0);">YouTube</a><a
                        href="https://youtube.com/McompsLimited">YT</a></li>
            </ul>
            <ul class="mil-additional-links mil-light">
                <li><a href="javascript:void(0);">Terms & Condition</a></li>
                <li><a href="javascript:void(0);">Privacy Policy</a></li>
                <li><a href="javascript:void(0);">Sitemap</a></li>
            </ul>
        </div>
    </div>
    <div class="mil-footer-bottom">
        <div class="container">
            <p class="mil-text-sm mil-light">© {{ date('Y') }} {{ config('app.name') }}.</p>
            <p class="mil-text-sm mil-light">All Rights Reserved.</p>
        </div>
    </div>
</footer>
