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
                        <h3 class="mil-mb-60"><span class="mil-uppercase mil-light">We Provide Software solutions
                                <br>and
                                Digital Products </span> <span class="mil-font-3 mil-accent"> to africa & beyond</span>
                        </h3>
                        <div class="mil-flex-hori-center">
                            <div>
                                <a href="{{ route('about') }}" class="mil-button mil-border mil-light"><span>About Us</span></a>
                            </div>
                            <p class="mil-button-descr mil-light-soft">We design, develop, and support business
                                applications using the latest technology and standards.</p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="mil-illustration-1">
                            <div class="mil-item mil-item-1">
                                <div class="mil-plus">
                                    <div class="mil-hover-window">
                                        <div class="mil-window-content">
                                            <h5 class="mil-dark mil-mb-15">Assured Services</h5>
                                            <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                            <p class="mil-text-sm">Client satisfaction matters very much
                                                to us and we take it very seriously. We
                                                do not over promise but rather we over
                                                deliver.</p>
                                        </div>
                                    </div>
                                    <div class="mil-item-hover">
                                        <div class="mil-plus-icon">+</div>
                                        <h6 class="mil-light">Assured Services</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="mil-item mil-item-2">
                                <div class="mil-plus">
                                    <div class="mil-hover-window">
                                        <div class="mil-window-content">
                                            <h5 class="mil-dark mil-mb-15">Tailored Services</h5>
                                            <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                            <p class="mil-text-sm">We build powerful and customized IT
                                                solutions and support systems that
                                                underpin the daily operations of your
                                                business.</p>
                                        </div>
                                    </div>
                                    <div class="mil-item-hover">
                                        <div class="mil-plus-icon">+</div>
                                        <h6 class="mil-light">Tailored Services</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="mil-item mil-item-3">
                                <div class="mil-plus">
                                    <div class="mil-hover-window">
                                        <div class="mil-window-content">
                                            <h5 class="mil-dark mil-mb-15">Expertise</h5>
                                            <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                            <p class="mil-text-sm">You have over 20 qualified and certified
                                                technicians & engineers at your disposal
                                                who have the capabilities to meet all your IT
                                                requirements.</p>
                                        </div>
                                    </div>
                                    <div class="mil-item-hover">
                                        <div class="mil-plus-icon">+</div>
                                        <h6 class="mil-light">Quality Expertise</h6>
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
    {{-- <div class="mil-partners mil-p-90-60">
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
    </div> --}}
    <!-- partners end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <section class="mil-deep-bg mil-p-120-60">
        <div class="mil-deco" style="top: 0; right: 15%;"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mil-mb-60">

                    <div class="mil-about-illustration mil-mb-60">
                        <div class="mil-image-frame">
                            <img src="{{ asset('img/faces/25.jpg') }}">
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 mil-mb-60">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">We are providing the key
                        solutions to your needs.</span>
                    <h2 class="mil-mb-50">Hello!</h2>

                    <p class="mil-mb-50">Mcomps Limited is a pioneering company in the ICT industry. With a clear
                        vision and a dedication to meeting our clients' specific requirements, we
                        have been providing custom solutions since our establishment. Our
                        primary objective has always been to deliver exceptional ICT solutions that
                        empower our clients to achieve their business goals. Over the years, we
                        have had the privilege of serving prominent brands and government
                        institutions. The quality of our solutions has garnered praise and
                        recognition from numerous satisfied clients. We remain unwavering in our
                        commitment to offering tailored infrastructure solutions that perfectly align
                        with the needs of our clients.</p>



                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="mil-services mil-deep-bg mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 20%;"></div>
        <div class="container">

            <div class="row align-items-center mil-mb-90">
                <div class="col-md-6 col-xl-6">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Services and Solutions</span>
                    <h2>Our Products & Solutions</h2>

                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right mil-mt-60-adapt">
                        <div class="mil-slider-nav">
                            <div class="mil-slider-btn-prev mil-services-prev"><i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span></div>
                            <div class="mil-slider-btn-next mil-services-next"><span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-container mil-services-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">Managed I.T.
                                Services</h4>
                            <p class="mil-mb-50">Benefit from our superior I.T. services that support the success of your
                                organization.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li> Professional support</li>
                                <li> Proactive Maintenance.</li>
                                <li>Managed Cyber Security Services.</li>
                                <li>Managed Backup and Disaster Recovery Services.</li>
                                <li>Managed Unified Communications (3CX).</li>
                                <li> Managed Web Services.</li>
                                <li> Network as a Service.</li>
                                <li> Infrastructure Suppor.</li>
                                <li> Virtual CIO Services and Consulting.</li>
                            </ul>
                            <a href="{{ route('manageditservices') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">Cyber Security</h4>
                            <p class="mil-mb-50">Helping your business quickly and effectively respond to cyber attacks
                                using the very best tools and technologies.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li> Endpoint Security.</li>
                                <li> Perimeter Security.</li>
                                <li>Endpoint detection and response.</li>
                                <li> Storage and cloud security.</li>
                                <li>  Email Security.</li>
                                <li>  Dark web Monitoring.</li>
                                <li> Authentication.</li>
                                <li> Cyber Awareness Training.</li>
                                <li> Managed Cyber Security.</li>
                            </ul>
                            <a href="{{ route('service4') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">Unified
                                Communications</h4>
                            <p class="mil-mb-50">Offering you an all in one communication hub that improves efficiency
                                reduces cost and enhances internal and external collaboration.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>IP Telephony.</li>
                                <li>Contact Center.</li>
                                <li>Video Conferencing.</li>
                                <li> Mobility.</li>
                                <li>  Managed Unified Communications.</li>

                                <li> Bulky SMS.</li>
                            </ul>
                            <a href="{{ route('unified.communications') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">Software Solutions</h4>
                            <p class="mil-mb-50">I.T. software solutions that are customized to fit your business needs,
                                improve efficiency, drastically reduce errors and increase productivity and
                                profits.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Business Applications.</li>
                                <li> School systems.</li>
                                <li>Payment Gateways.</li>
                                <li> Fintech solutions.</li>
                                <li> System Integrations.</li>
                            </ul>
                            <a href="{{ route('software.solutions') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">Web Solutions</h4>
                            <p class="mil-mb-50">Be part of the digital world aided by our outstanding, professional and fully
                                tailored web Services.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Web Development and Design.</li>
                                <li> Domain Registration.</li>
                                <li> Web Hosting.</li>
                                <li>  Email Services.</li>
                                <li> Digital Marketing.</li>
                                <li> Managed Web Services.</li>
                                <li> Website redesigning.</li>

                            </ul>
                            <a href="{{ route('web.solutions') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>


                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">Network Solutions</h4>
                            <p class="mil-mb-50">We deliver network and infrastructure solutions that future proof your
                                business. Solutions that reduce operational costs and increase connectivity.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li> Structured Cabling.</li>
                                <li> CCTV Camer as Installation.</li>
                                <li>Video Surveillance Analytics.</li>
                                <li>Biometrics and Access Control.</li>
                                <li>Storage Solutions.</li>
                                <li> SDWAN, LAN, WLAN.</li>
                                <li>  Network as a Service .</li>

                            </ul>
                            <a href="{{ route('network.solutions') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">Data Center
                                Solution</h4>
                            <p class="mil-mb-50">Our future proof DC solution helps enterprises tap into the real value of
                                data, accelerate digital transformation and promote the development of the
                                digital economy.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Server Virtualization.</li>
                                <li> Server Hosting.</li>
                                <li> Data center Architecture Design.</li>
                                <li> Colocation Services.</li>

                            </ul>
                            <a href="{{ route('data.centre.solutions') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">Business Continuity
                                & Cloud Services</h4>
                            <p class="mil-mb-50">Backup your organization’s data to a secure cloud storage that is
                                accessible to authorized users only. With us, you get world class cloud
                                infrastructure that ensures security, reliability, availability.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li> Offsite Backup (cloud) Management.</li>
                                <li> Disaster Recovery.</li>
                                <li> Secret Data Handling.</li>
                                <li>  Email Backup Solutions.</li>
                                <li>   File Folder Backup.</li>
                                <li>   High Availability.</li>

                            </ul>
                            <a href="{{ route('business.continuity.and.cloud.services') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">School Solutions</h4>
                            <p class="mil-mb-50">Education institutions can choose from our wide selection of our
                                customized services to get comprehensive solutions that address their
                                needs.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li> School Management Systems.</li>
                                <li> Time tabling Systems.</li>
                                <li> Bulk SMS.</li>
                                <li> School Bus Surveillance System.</li>
                                <li>    Custom E-Learning System.</li>
                                <li>   School Website.</li>

                            </ul>
                            <a href="{{ route('school.solutions') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <h4 class="mil-mb-30">Digital Finance
                                Solutions</h4>
                            <p class="mil-mb-50">We provide financial institutions and financial service providers with digital
                                solutions to assist them in serving the needs of clients putting in mind
                                security, accessibility, and reliability.</p>
                            <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>E-Wallet.</li>
                                <li>  Revenue Collection System.</li>
                                <li>  Self-Service Portals.</li>
                                <li> Payment Gateway.</li>

                                <li>    Fintech Solution.</li>

                            </ul>
                            <a href="{{ route('digital.finance.solutions') }}" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="mil-about mil-p-120-60">
        <div class="mil-deco" style="top: 0; right: 10%;"></div>
        <div class="container">

            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-xl-5">

                    <div class="mil-about-illustration mil-mb-60">
                        <div class="mil-image-frame">
                            <img src="{{ asset('img/faces/26.jpg') }}">
                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-xl-6">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Your Parner In Digital Computing</span>
                    <h2 class="mil-mb-30">Why Choose Us</h2>
                    <p class="mil-mb-30">Our corporate philosophy establishes the fundamental principles of our
                        management system. Our operational and performance standards translate
                        the corporate. We preserve a high level of business ethics characterized by
                        integrity and honesty in all business actions.</p>
                    <ul class="mil-simple-list mil-mb-60">
                        <li>Assured Services.</li>
                        <li>Quality Expertise.</li>
                        <li>Tailored Services.</li>
                        <li>Assured Services.</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="mil-how-it-works mil-deep-bg mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 20%;"></div>
        <div class="mil-deco" style="bottom: 0; left: 30%; transform: rotate(180deg)"></div>
        <div class="container">
            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Discover Our Company</span>
            <h2 class="mil-mb-90">Why<span class="mil-accent"> We Exist</span></h2>
            <div class="row">

                <div class="col-md-4 col-xl-4">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="{{ asset('img/icons/sm/2.svg') }}">
                            </div>
                            <h5>Vision</h5>
                        </div>
                        <p>At Mcomps, our vision is to provide the best affordable
                            and reliable software solutions and digital products
                            specifically tailored for the African market and
                            beyond.</p>
                    </div>

                </div>
                <div class="col-md-4 col-xl-4">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="{{ asset('img/icons/sm/3.svg') }}">
                            </div>
                            <h5>Mission</h5>
                        </div>
                        <p>To offer Technology Solutions that increase
                            productivity, improve ease of Business daily
                            operations, increase sales, reduce expenses,
                            enhancing continuity and business security
                            contributing to attainment of every organizational
                            goals and vision.</p>
                    </div>

                </div>
                <div class="col-md-4 col-xl-4">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="{{ asset('img/icons/sm/4.svg') }}">
                            </div>
                            <h5>Goal</h5>
                        </div>
                        <p>Since our inception, our goal has been to provide top notch
                            ICT solutions that help our clientele have smooth day to day
                            operations and achieve their business objectives.
                            Our quality and efficient solutions have earned us a reputa-
                            tion and recognition from many of our clients who got satis-
                            faction from our services.</p>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <div class="container">
        <div class="mil-divider"></div>
    </div>





    <div class="container">
        <div class="mil-divider"></div>
    </div>

    {{-- <section class="mil-events mil-deep-bg mil-p-120-120">
        <div class="mil-deco" style="top: 0; right: 20%;"></div>
        <div class="container">

            <div class="row align-items-end mil-mb-60-adapt">
                <div class="col-md-4 col-xl-4">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Let's Engage</span>
                    <h2 class="mil-mb-30">Our Events</h2>

                </div>
                <div class="col-md-5 col-xl-5">

                    <p class="mil-mb-30">Let's connect during our events, exchange knowledge while empowering our society. We address our clientele and reason together while introducing new solutions to the market.</p>

                </div>
                <div class="col-md-3 col-xl-3">

                    <div class="mil-adaptive-right mil-mb-30">
                        <div class="mil-slider-nav">
                            <div class="mil-slider-btn-prev mil-events-prev"><i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span></div>
                            <div class="mil-slider-btn-next mil-events-next"><span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-container mil-events-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <a href="event.html" class="mil-card-2">
                            <div class="mil-cover-frame">
                                <img src="{{ asset('img/projects/1.jpg') }}" alt="project">
                            </div>
                            <div class="mil-description">
                                <ul class="mil-speakers">
                                    <li class="mil-speaker">
                                        <img src="{{ asset('img/faces/1.jpg') }}" alt="speaker">
                                    </li>
                                    <li class="mil-speaker">
                                        <img src="{{ asset('img/faces/2.jpg') }}" alt="speaker">
                                    </li>
                                    <li class="mil-speaker">
                                        <img src="{{ asset('img/faces/3.jpg') }}" alt="speaker">
                                    </li>
                                </ul>
                                <div class="mil-card-title">
                                    <p class="mil-category mil-text-sm mil-mb-15">Data Security</p>
                                    <h4>Development for the next era of the Internet economy</h4>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="route('events')" class="mil-card-2">
                            <div class="mil-cover-frame">
                                <img src="{{ asset('img/projects/2.jpg') }}" alt="project">
                            </div>
                            <div class="mil-description">
                                <ul class="mil-speakers">
                                    <li class="mil-speaker">
                                        <img src="{{ asset('img/faces/1.jpg') }}" alt="speaker">
                                    </li>
                                    <li class="mil-speaker">
                                        <img src="{{ asset('img/faces/3.jpg') }}" alt="speaker">
                                    </li>
                                </ul>
                                <div class="mil-card-title">
                                    <p class="mil-category mil-text-sm mil-mb-15">Data Security</p>
                                    <h4>Development for the next era of the Internet economy</h4>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="event.html" class="mil-card-2">
                            <div class="mil-cover-frame">
                                <img src="{{ asset('img/projects/3.jpg') }}" alt="project">
                            </div>
                            <div class="mil-description">
                                <ul class="mil-speakers">
                                    <li class="mil-speaker">
                                        <img src="{{ asset('img/faces/1.jpg') }}" alt="speaker">
                                    </li>
                                    <li class="mil-speaker">
                                        <img src="{{ asset('img/faces/2.jpg') }}" alt="speaker">
                                    </li>
                                    <li class="mil-speaker">
                                        <img src="{{ asset('img/faces/3.jpg') }}" alt="speaker">
                                    </li>
                                </ul>
                                <div class="mil-card-title">
                                    <p class="mil-category mil-text-sm mil-mb-15">Data Security</p>
                                    <h4>Development for the next era of the Internet economy</h4>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="event.html" class="mil-card-2">
                            <div class="mil-cover-frame">
                                <img src="{{ asset('img/projects/4.jpg') }}" alt="project">
                            </div>
                            <div class="mil-description">
                                <ul class="mil-speakers">
                                    <li class="mil-speaker">
                                        <img src="img/faces/1.jpg" alt="speaker">
                                    </li>
                                </ul>
                                <div class="mil-card-title">
                                    <p class="mil-category mil-text-sm mil-mb-15">Data Security</p>
                                    <h4>Development for the next era of the Internet economy</h4>
                                </div>

                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <section class="mil-p-120-60">
        <div class="mil-deco" style="top: 0; left: 25%;"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="mil-h1">{{date('Y')-2020}}<span class="mil-accent">+</span></div>
                    <h6 class="mil-mb-60">Years Since Inception</h6>

                    <h4 class="mil-mb-60">We Run All Kinds of IT Services That Vow Your Success</h4>
                </div>
                <div class="col-lg-6">

                    <h4 class="mil-mb-60">Accelerate <span class="mil-accent">Innovation</span> with world class tech teams We’ll match you to an entire <span class="mil-accent">Remote Technology</span></h4>

                    <div class="row">
                        <div class="col-lg-6">

                            <h6 class="mil-mb-30"><span class="mil-accent">10+</span>&nbsp; Proffesional Staff</h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>
                        <div class="col-lg-6">

                            <h6 class="mil-mb-30"><span class="mil-accent">1000+</span>&nbsp; Satisfied Clients</h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>

                        <div class="col-lg-6">

                            <h6 class="mil-mb-30"><span class="mil-accent">50+</span>&nbsp; Solutions Offered</h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


</div>
