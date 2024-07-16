<div>
    @section('title')
        Home
    @endsection
    <div class="mil-banner mil-top-space-0">
        <div class="swiper-container mil-banner-slideshow">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('img/photo/1.jpg') }}" class="mil-background-image" style="object-position: center"
                        data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/photo/2.jpg') }}" class="mil-background-image"
                        style="object-position: center" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/photo/3.jpg') }}" class="mil-background-image"
                        style="object-position: center" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                </div>
            </div>
        </div>
        <div class="mil-overlay"></div>

        <div class="mil-banner-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8">
                        <span class="mil-suptitle mil-mb-60"><span class="mil-light">MADE TO</span> <span
                                class="mil-accent">GO BEYOND</span></span>
                        <h2 class="mil-mb-60"><span class="mil-uppercase mil-light">We Provide Software solutions
                                <br>and
                                Digital Products </span> <span class="mil-font-3 mil-accent"> to africa & beyond</span>
                        </h2>
                        <div class="mil-flex-hori-center">
                            <div>
                                <a href="{{ route('contact') }}" class="mil-button mil-border mil-light"><span>Let’s
                                        Talk</span></a>
                            </div>
                            <p class="mil-button-descr mil-light-soft">We design, develop, and support business
                                applications using the <br> latest technology and standards.</p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="mil-illustration-1">
                            <div class="mil-item mil-item-1">
                                <div class="mil-plus">
                                    <div class="mil-hover-window">
                                        <div class="mil-window-content">
                                            <h5 class="mil-dark mil-mb-15">Experts</h5>
                                            <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                            <p class="mil-text-sm">Our dedicated team of experts ensures your project is
                                                a success.</p>
                                        </div>
                                    </div>
                                    <div class="mil-item-hover">
                                        <div class="mil-plus-icon">+</div>
                                        <h6 class="mil-light">Dedicated Team</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="mil-item mil-item-2">
                                <div class="mil-plus">
                                    <div class="mil-hover-window">
                                        <div class="mil-window-content">
                                            <h5 class="mil-dark mil-mb-15">Experts</h5>
                                            <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                            <p class="mil-text-sm">And here's some amazing content. It's very engaging.
                                                Right?</p>
                                        </div>
                                    </div>
                                    <div class="mil-item-hover">
                                        <div class="mil-plus-icon">+</div>
                                        <h6 class="mil-light">Developers</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="mil-item mil-item-3">
                                <div class="mil-plus">
                                    <div class="mil-hover-window">
                                        <div class="mil-window-content">
                                            <h5 class="mil-dark mil-mb-15">Experts</h5>
                                            <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                            <p class="mil-text-sm">And here's some amazing content. It's very engaging.
                                                Right?</p>
                                        </div>
                                    </div>
                                    <div class="mil-item-hover">
                                        <div class="mil-plus-icon">+</div>
                                        <h6 class="mil-light">Designers</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- partners -->
    <div class="mil-partners mil-p-90-60">
        <div class="container">
            <div class="mil-partners-frame">
                <a href="#."><img src="{{ asset('img/partners/1.png') }}" alt="partner"></a>
                <a href="#."><img src="{{ asset('img/partners/2.png') }}" alt="partner"></a>
                <a href="#."><img src="{{ asset('img/partners/3.png') }}" alt="partner"></a>
                <a href="#."><img src="{{ asset('img/partners/4.png') }}" alt="partner"></a>
                <a href="#."><img src="{{ asset('img/partners/5.png') }}" alt="partner"></a>
                <a href="#."><img src="{{ asset('img/partners/6.png') }}" alt="partner"></a>
            </div>
        </div>
    </div>
    <!-- partners end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- services -->
    <section class="mil-services mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 20%;"></div>
        <div class="container">
            <h2 class="mil-mb-30">How We Can <span class="mil-accent">Help You</span></h2>
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <h4 class="mil-mb-60 mil-mt-30">IT Services</h4>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="{{ asset('img/icons/md/1.svg') }}">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">01</span> Dedicated Team</h5>
                            <p>Our dedicated team model ensures you have a skilled and focused team working exclusively
                                on your projects,
                                offering flexibility and control.</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="{{ asset('img/icons/md/2.svg') }}">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">02</span> QA and Testing</h5>
                            <p>We offer comprehensive quality assurance and testing services to ensure your software is
                                bug-free,
                                reliable, and performs optimally.</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="{{ asset('img/icons/md/3.svg') }}">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">03</span> SaaS</h5>
                            <p>We develop robust Software as a Service (SaaS) solutions that are scalable, secure,
                                and designed to meet your business needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <h4 class="mil-mb-60 mil-mt-30">IT Solutions</h4>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="{{ asset('img/icons/md/4.svg') }}">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">01</span> Blockchain</h5>
                            <p>We harness the power of blockchain technology to provide secure, transparent,
                                and efficient solutions for various business applications.</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="{{ asset('img/icons/md/5.svg') }}">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">02</span> Artificial Intelligence</h5>
                            <p>Our AI solutions are designed to automate processes, provide insights,
                                and enhance decision-making to drive business growth and innovation.</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="{{ asset('img/icons/md/6.svg') }}">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">03</span> Internet of Things</h5>
                            <p>We develop IoT solutions that connect devices and systems, enabling real-time data
                                collection and analysis
                                for smarter decision-making and improved efficiency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- portfolio -->
    <section class="mil-works mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 40%;"></div>
        <div class="container">
            <div class="row align-items-center mil-mb-60-adapt">
                <div class="col-md-6 col-xl-6">

                    <h2 class="mil-mb-30">Latest Projects</h2>

                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right">
                        <div class="mil-slider-nav mil-mb-30">
                            <div class="mil-slider-btn-prev mil-works-prev"><i class="fas fa-arrow-left"></i><span
                                    class="mil-h6">Prev</span></div>
                            <div class="mil-slider-btn-next mil-works-next"><span class="mil-h6">Next</span><i
                                    class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-container mil-works-slider mil-mb-90">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <a href="https://www.studybuddy.co.ke/" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="{{ asset('img/projects/1.png') }}" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Study Buddy</h4>
                                    <a href="https://www.studybuddy.co.ke/"><b>StydyBuddy</b></a>
                                </div>
                                <div class="mil-card-text">
                                    <p>Study Buddy is an innovative platform that connects students directly with
                                        teachers,
                                        facilitating personalized learning and real-time academic support.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="https://angoloexpert.com/" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="{{ asset('img/projects/2.png') }}" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Angolo Experts.</h4>
                                    <a href="https://angoloexpert.com/"><b>Angolo Experts</b></a>
                                </div>
                                <div class="mil-card-text">
                                    <p>Angolo Experts is a dynamic content selling platform designed to empower creators
                                        and connect
                                        them with their audience through high-quality, engaging content.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="https://pointpro.mcomps.co.ke/" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="{{ asset('img/projects/3.png') }}" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">PointPro</h4>
                                    <a href="https://pointpro.mcomps.co.ke/"><b>PointPro</b></a>
                                </div>
                                <div class="mil-card-text">
                                    <p>PointPro is a web-based POS system that you can easily use on your mobile phone,
                                        designed to streamline your business operations effortlessly.</p>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-xl-6">

                    <a href="portfolio.html" class="mil-link mil-mb-30"><span>View All Cases</span><i
                            class="fas fa-arrow-right"></i></a>

                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right">
                        <a href="{{ route('contact') }}" class="mil-button mil-border mil-mb-30"><span>Get
                                Started</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- portfolio end -->

    <!-- how it works -->
    <section class="mil-how-it-works mil-deep-bg mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 20%;"></div>
        <div class="mil-deco" style="bottom: 0; left: 30%; transform: rotate(180deg)"></div>
        <div class="container">
            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Discover Our Company</span>
            <h2 class="mil-mb-90">How We <span class="mil-accent">Collaborate</span> With You</h2>
            <div class="row">
                <div class="col-md-6 col-xl-3">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="{{ asset('img/icons/sm/1.svg') }}">
                            </div>
                            <h5>Thinking Big</h5>
                        </div>
                        <p>At McompsLimited, we believe in thinking big and setting ambitious goals. We aim to
                            revolutionize the
                            software industry with innovative
                            solutions tailored to meet our clients' needs.</p>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="{{ asset('img/icons/sm/2.svg') }}">
                            </div>
                            <h5>Starting Small</h5>
                        </div>
                        <p>We understand the importance of starting small and focusing on the details. Our team works
                            closely with clients from the initial idea to the final product,
                            ensuring every aspect is perfected..</p>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="{{ asset('img/icons/sm/3.svg') }}">
                            </div>
                            <h5>Creating Fast</h5>
                        </div>
                        <p>Mcomps Limited is committed to rapid development without compromising quality. Our
                            experienced team leverages cutting-edge technologies and
                            best practices to deliver solutions quickly and efficiently.</p>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="{{ asset('img/icons/sm/4.svg') }}">
                            </div>
                            <h5>Innovating Scale</h5>
                        </div>
                        <p>At Mcomps Limited, we believe in innovation at scale. We continuously explore new
                            technologies and methodologies to drive innovation in our solutions,
                            ensuring they remain cutting-edge and future-proof.</p>
                    </div>

                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-xl-6">

                    <a href="#." class="mil-link mil-mb-30"><span>Learn More</span><i
                            class="fas fa-arrow-right"></i></a>

                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right">
                        <a href="#." class="mil-button mil-border mil-mb-30"><span>How We Work</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- how it works end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- contact -->
    <section class="mil-contact mil-gradient-bg mil-p-120-0">
        <div class="mil-deco mil-deco-accent" style="top: 0; right: 10%;"></div>
        <div class="container">
            <h2 class="mil-light mil-mb-90">Contact <span class="mil-accent">Us</span></h2>
            <form>
                <div class="row">
                    <div class="col-lg-6">

                        <div class="mil-input-frame mil-mb-30">
                            <label><span class="mil-light">Name</span><span class="mil-accent">Required</span></label>
                            <input type="text" placeholder="Enter Your Name Here">
                        </div>
                        <div class="mil-input-frame mil-mb-60">
                            <label><span class="mil-light">Phone</span><span
                                    class="mil-light-soft">Optional</span></label>
                            <input type="number" placeholder="Your Phone">
                        </div>
                        <div class="mil-attach-frame mil-mb-60">
                            <i class="fas fa-paperclip"></i>
                            <label class="mil-custom-file-input">
                                <span>Attach your file</span>
                                <input type="file" id="mil-file-input">
                            </label>
                            <p class="mil-text-sm mil-light-soft">up to 20MB</p>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="mil-input-frame mil-mb-30">
                            <label><span class="mil-light">Email Adress</span><span
                                    class="mil-accent">Required</span></label>
                            <input type="email" id="email" placeholder="Your Email">
                        </div>
                        {{-- <p class="mil-text-sm mil-light-soft mil-mb-15">We will process your personal information in
                            accordance with our Privacy Policy.</p> --}}
                        <div class="mil-input-frame mil-mb-30">
                            <label><span class="mil-light">Subject</span><span
                                    class="mil-accent">Required</span></label>
                            <input type="text" id="name" placeholder="Your Email">
                        </div>

                        <div class="mil-checbox-frame mil-mb-60">
                            <input class="mil-checkbox" id="checkbox-1" type="checkbox" value="value">
                            <label for="checkbox-1" class="mil-text-sm mil-light">I would like to be contacted with
                                news and updates about your <a href="#." class="mil-accent">events and
                                    services</a></label>
                        </div>

                    </div>
                    <div class="col-12">

                        <button class="mil-button mil-accent-bg mil-fw"><span>Send Message Now</span></button>

                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
