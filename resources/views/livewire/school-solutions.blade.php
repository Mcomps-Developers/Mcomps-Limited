<div>
    @section('title')
    School Solutions
@endsection

    <div>
        <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>School IT Solutions</title>
        <!-- Link to CSS file -->
        <link rel="stylesheet" href="styles.css">
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Swiper for carousel (if needed) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    </head>

    <body>
        <div class="mil-wrapper">
            <!-- Banner -->
            <div class="mil-banner-sm mil-deep-bg">
                <img src="img/deco/school-bg.png" alt="background" class="mil-background-image">
                <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
                <div class="mil-banner-content">
                    <div class="container mil-relative">
                        <ul class="mil-breadcrumbs mil-mb-30">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('service4') }}">School Solutions</a></li>
                        </ul>
                        <h2 class="mil-uppercase">School IT Solutions</h2>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- About -->
            <section class="mil-p-120-90">
                <div class="mil-deco" style="bottom: 0; right: 20%; transform: rotate(180deg)"></div>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4">
                            <div class="mil-about-illustration mil-mb-60">
                                <div class="mil-image-frame">
                                    <img src="{{ asset('img/faces/t14.jpeg') }}">
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h2 class="mil-mb-30">Empower Your School with <span class="mil-accent">Advanced IT Solutions</span> for Effective Learning and Management</h2>
                            <div class="mil-hori-box mil-mb-30">
                                <div class="mil-mr-30">
                                    <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg">
                                        <img src="img/icons/md/1.svg" alt="icon">
                                    </div>
                                </div>
                                <p>Our <span class="mil-accent">comprehensive IT solutions</span> help schools manage their IT infrastructure, enhance student learning experiences, and streamline administrative processes.</p>
                            </div>
                            <a href="{{ route('contact') }}" class="mil-button mil-border mil-mb-30"><span>Get in Touch</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About End -->

            <div class="container">
                <div class="mil-divider"></div>
            </div>

            <!-- Explore School IT Solutions -->
            <section class="mil-p-120-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Discover Our Solutions</span>
                            <h2 class="mil-mb-30">Explore <span class="mil-accent">School IT Solutions</span></h2>
                            <p class="mil-mb-90">Education institutions can choose from our wide selection of our
                                customized services to get comprehensive solutions that address their
                                needs.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>I</h3>
                                </div>
                                <h5 class="mil-mb-30">School Management Systems</h5>
                                <p>Our school management systems streamline administrative tasks, enhancing efficiency and communication within educational institutions.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>II</h3>
                                </div>
                                <h5 class="mil-mb-30">Timetabling Systems</h5>
                                <p>We offer timetabling systems that simplify schedule creation, ensuring optimal use of resources and conflict-free planning.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>III</h3>
                                </div>
                                <h5 class="mil-mb-30">Bulk SMS</h5>
                                <p>Our bulk SMS services enable efficient communication with parents, students, and staff, delivering important updates and notifications.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>IV</h3>
                                </div>
                                <h5 class="mil-mb-30">School Bus Surveillance System</h5>
                                <p>We provide school bus surveillance systems, ensuring student safety through real-time monitoring and tracking of school transport.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>V</h3>
                                </div>
                                <h5 class="mil-mb-30">Biometric Attendance System</h5>
                                <p>Our biometric attendance systems offer accurate and secure tracking of student and staff attendance, reducing manual errors.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>VI</h3>
                                </div>
                                <h5 class="mil-mb-30">Custom E-Learning System</h5>
                                <p>We develop custom e-learning systems, tailored to your school's needs, providing an engaging and interactive online learning experience.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>VII</h3>
                                </div>
                                <h5 class="mil-mb-30">School Website</h5>
                                <p>Our school website services create a professional and informative online presence, enhancing communication and accessibility for all stakeholders.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Explore School IT Solutions End -->

           


        </div>

        <!-- Swiper JS (if used) -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <!-- Your JS file -->
        <script src="{{ asset('scripts.js') }}"></script>
    </body>

    </html>

    </div>


</div>
