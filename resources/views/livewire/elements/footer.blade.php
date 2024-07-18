<footer class="mil-dark-bg">
    <img src="{{ asset('img/deco/map.png') }}" alt="background" class="mil-footer-bg">
    <div class="container">
        <div class="mil-footer-content mil-p-120-90">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4 mil-mb-30">

                    <img src="{{ asset('img/logo/logo-light.png') }}" alt="" class="mil-logo mil-mb-30">

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
                        <div class="col-lg-12 mil-mb-30">

                            <h3 class="mil-light mil-up-font mil-mb-30">Our <span class="mil-accent">Security
                                    Statement</span></h3>
                            <p class="mil-light-soft">
                                At Mcomps, we understand that security is essential for both your business
                                and ours. We prioritize strategic incorporation of relevant security controls
                                to help minimize your business risks. Our commitment to cybersecurity is
                                unwavering, and we offer a comprehensive range of cybersecurity services
                                designed to protect your business from threats
                            </p>
                            <p>
                                With our array of cybersecurity solutions, we aim to safeguard your sensitive
data, systems, and operations. Our approach includes robust measures
such as threat monitoring, vulnerability assessments, secure coding
practices, and employee training. By partnering with us, you can trust that
we prioritize the security of your digital assets, providing you with peace of
mind and a strong defense against potential threats.
                            </p>

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
