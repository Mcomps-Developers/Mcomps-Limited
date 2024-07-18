<div>
    @section('title')
    Web Solutions
@endsection

    <div>
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Solutions | Your Partner for Online Success</title>
        <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    </head>
    <body>
        <div>
            <!-- Banner -->
            <div class="mil-banner-sm mil-deep-bg">
                <img src="img/deco/map.png" alt="background" class="mil-background-image">
                <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
                <div class="mil-banner-content">
                    <div class="container mil-relative">
                        <ul class="mil-breadcrumbs mil-mb-30">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('service4') }}">Web Solutions</a></li>
                        </ul>
                        <h2 class="mil-uppercase">Web Solutions</h2>
                    </div>
                </div>
            </div>
            <!-- Banner end -->

            <!-- About -->
            <section class="mil-p-120-90">
                <div class="mil-deco" style="bottom: 0; right: 20%; transform: rotate(180deg)"></div>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4">
                            <div class="mil-about-illustration mil-mb-60">
                                <div class="mil-image-frame">
                                    <img src="{{ asset('img/faces/t9.jpeg') }}">
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h2 class="mil-mb-30">Transform Your Online Presence with <span class="mil-accent">Comprehensive Web Solutions</span></h2>
                            <div class="mil-hori-box mil-mb-30">
                                <div class="mil-mr-30">
                                    <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg">
                                        <img src="img/icons/md/1.svg" alt="icon">
                                    </div>
                                </div>
                                <p>Our <span class="mil-accent">expert web solutions</span> help you build a strong online presence with professional design, development, and marketing services tailored to your business needs.</p>
                            </div>
                            <a href="{{ route('contact') }}" class="mil-button mil-border mil-mb-30"><span>Get in Touch</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About end -->

            <div class="container">
                <div class="mil-divider"></div>
            </div>

            <!-- Web Solutions Services -->
            <section class="mil-p-120-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Discover Our Expertise</span>
                            <h2 class="mil-mb-30">Explore Our <span class="mil-accent">Web Solutions</span></h2>
                            <p class="mil-mb-90">Be part of the digital world aided by our outstanding, professional and fully
                                tailored web Services.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>I</h3>
                                </div>
                                <h5 class="mil-mb-30">Web Development and Design</h5>
                                <p>We create visually appealing and functional websites, ensuring a seamless user experience and responsive design for all devices.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>II</h3>
                                </div>
                                <h5 class="mil-mb-30">Domain Registration</h5>
                                <p>Our domain registration services help you secure a unique online address, establishing your brand's presence on the internet.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>III</h3>
                                </div>
                                <h5 class="mil-mb-30">Web Hosting</h5>
                                <p>We provide reliable web hosting solutions, ensuring your website is always accessible, fast, and secure for users.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>IV</h3>
                                </div>
                                <h5 class="mil-mb-30">Email Services</h5>
                                <p>Our email services offer professional and secure communication solutions, supporting your business with reliable email hosting.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>V</h3>
                                </div>
                                <h5 class="mil-mb-30">Digital Marketing</h5>
                                <p>We specialize in digital marketing strategies, enhancing your online visibility through SEO, social media, and targeted advertising.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>VI</h3>
                                </div>
                                <h5 class="mil-mb-30">Managed Web Services</h5>
                                <p>Our managed web services ensure your website is maintained, updated, and secure, allowing you to focus on your business.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <h3>VI</h3>
                                </div>
                                <h5 class="mil-mb-30">Website Redesigning</h5>
                                <p>We offer website redesigning services, revamping your existing site to improve aesthetics, functionality, and user engagement.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Web Solutions Services end -->



           


        </div>
    </body>
    </html>

    </div>


</div>
