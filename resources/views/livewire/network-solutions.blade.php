<div>
    @section('title')
    Network Solutions
@endsection
    <div>
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Network Solutions | Comprehensive IT Network Services</title>
        <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
        <!-- You can also include FontAwesome or any other icon library if needed -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <div>
            <!-- Banner -->
            <div class="mil-banner-sm mil-deep-bg">
                <img src="img/deco/network-background.png" alt="background" class="mil-background-image">
                <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
                <div class="mil-banner-content">
                    <div class="container mil-relative">
                        <ul class="mil-breadcrumbs mil-mb-30">
                            <li><a href="/">Home</a></li>
                            <li><a href="#network-solutions">Network Solutions</a></li>
                        </ul>
                        <h2 class="mil-uppercase">Network Solutions</h2>
                    </div>
                </div>
            </div>
            <!-- Banner end -->

            <!-- About -->
            <section class="mil-p-120-90" id="network-solutions">
                <div class="mil-deco" style="bottom: 0; right: 20%; transform: rotate(180deg)"></div>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4">
                            <div class="mil-circle-illustration mil-with-dots-2 mil-mb-60" data-swiper-parallax-scale=".8">
                                <div class="mil-circle-bg"></div>
                                <div class="mil-image-frame">
                                    <img src="{{ asset('img/faces/t10.jpeg') }}" alt="network solutions image">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h2 class="mil-mb-30">Optimize Your IT Infrastructure with Our <span class="mil-accent">Network Solutions</span></h2>
                            <div class="mil-hori-box mil-mb-30">
                                <div class="mil-mr-30">
                                    <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg">
                                        <img src="img/icons/md/1.svg" alt="icon">
                                    </div>
                                </div>
                                <p>Our <span class="mil-accent">network solutions</span> offer comprehensive IT services designed to enhance your network infrastructure, ensure security, and support your business operations.</p>
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

            <!-- Network Solutions Services -->
            <section class="mil-p-120-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Expertise in Network Solutions</span>
                            <h2 class="mil-mb-30">Explore Our <span class="mil-accent">Network Solutions</span></h2>
                            <p class="mil-mb-90">Discover how our network solutions can address your IT needs, from network design to security and management, ensuring a robust and reliable IT infrastructure for your business.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <img src="img/icons/md/design.svg" alt="Network Design and Architecture">
                                </div>
                                <h5 class="mil-mb-30">Network Design and Architecture</h5>
                                <p>We design and build scalable and efficient network infrastructures tailored to your business requirements, ensuring optimal performance and reliability.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <img src="img/icons/md/security.svg" alt="Network Security Solutions">
                                </div>
                                <h5 class="mil-mb-30">Network Security Solutions</h5>
                                <p>Protect your network from threats with advanced security solutions including firewalls, intrusion detection systems, and security audits to safeguard your data and infrastructure.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <img src="img/icons/md/management.svg" alt="Network Management and Monitoring">
                                </div>
                                <h5 class="mil-mb-30">Network Management and Monitoring</h5>
                                <p>Ensure the smooth operation of your network with our management and monitoring services, including performance optimization, troubleshooting, and regular maintenance.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <img src="img/icons/md/support.svg" alt="Network Support and Troubleshooting">
                                </div>
                                <h5 class="mil-mb-30">Network Support and Troubleshooting</h5>
                                <p>Get expert support for network issues with our troubleshooting services, offering solutions to connectivity problems, performance issues, and other network-related challenges.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <img src="img/icons/md/cloud.svg" alt="Cloud Networking Solutions">
                                </div>
                                <h5 class="mil-mb-30">Cloud Networking Solutions</h5>
                                <p>Leverage cloud technology to enhance your network capabilities with solutions for cloud connectivity, hybrid networks, and cloud-based network management.</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mil-hover-card mil-box-center mil-mb-30">
                                <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                    <img src="img/icons/md/upgrade.svg" alt="Network Upgrades and Scalability">
                                </div>
                                <h5 class="mil-mb-30">Network Upgrades and Scalability</h5>
                                <p>Upgrade your existing network infrastructure to meet growing demands with our scalable solutions for expanding bandwidth, improving performance, and integrating new technologies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Network Solutions Services end -->

            <!-- Explore More Solutions -->
            <section class="mil-deep-bg mil-p-120-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Explore More Network Solutions</span>
                            <h2 class="mil-mb-90">Expand Your <span class="mil-accent">IT Network</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mil-mb-30">
                            <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                            <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                <img src="img/icons/md/setup.svg" alt="Network Setup and Installation">
                            </div>
                            <h5 class="mil-mb-30">Network Setup and Installation</h5>
                            <p>Professional setup and installation of network hardware and software to establish a robust and secure network environment for your business.</p>
                        </div>
                        <div class="col-xl-3 mil-mb-30">
                            <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                            <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                <img src="img/icons/md/performance.svg" alt="Network Performance Optimization">
                            </div>
                            <h5 class="mil-mb-30">Network Performance Optimization</h5>
                            <p>Enhance network performance with solutions for bandwidth management, latency reduction, and overall network efficiency improvements.</p>
                        </div>
                        <div class="col-xl-3 mil-mb-30">
                            <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                            <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                <img src="img/icons/md/recovery.svg" alt="Disaster Recovery Planning">
                            </div>
                            <h5 class="mil-mb-30">Disaster Recovery Planning</h5>
                            <p>Develop and implement disaster recovery plans to ensure business continuity in the event of network failures or other IT emergencies.</p>
                        </div>
                        <div class="col-xl-3 mil-mb-30">
                            <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                            <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                <img src="img/icons/md/consultation.svg" alt="Network Consultation Services">
                            </div>
                            <h5 class="mil-mb-30">Network Consultation Services</h5>
                            <p>Get expert advice on network design, upgrades, and best practices to optimize your IT infrastructure for current and future needs.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Explore More Solutions end -->

            <!-- Network Readiness Assessment -->
            <section class="mil-gradient-bg mil-p-120-90">
                <div class="mil-deco mil-deco-accent" style="bottom: 0; right: 20%; transform: rotate(180deg)"></div>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4">
                            <span class="mil-suptitle mil-suptitle-2 mil-light mil-mb-30">Assess Your Network Needs</span>
                            <h2 class="mil-light mil-mb-90">Do You Know What Your <span class="mil-accent">Network</span> Needs?</h2>
                        </div>
                        <div class="col-xl-7 mil-mb-30">
                            <p class="mil-light-soft mil-mb-30">By answering a few questions about your current network setup and future goals, you will receive a comprehensive assessment of what your network infrastructure needs to succeed.</p>
                            <a href="#." class="mil-button mil-border mil-light"><span>Start Assessment</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Network Readiness Assessment end -->

           

            <!-- Footer -->
            <footer class="mil-footer mil-deep-bg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <p>&copy; 2024 Your Company Name. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <ul class="mil-footer-socials">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer end -->
        </div>

        <!-- JavaScript includes -->
        <script src="scripts.js"></script> <!-- Link to your JavaScript file -->
    </body>
    </html>

    </div>

</div>
