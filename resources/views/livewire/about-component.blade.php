<div>
    @section('title')
        About
    @endsection
    <div class="mil-banner-sm mil-deep-bg">
        <img src="{{ asset('img/deco/map.png') }}" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                </ul>
                <h2 class="mil-uppercase">#MadeToGoBeyond</h2>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- call to action -->
    <section class="mil-p-120-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-6">

                    <h4 class="mil-mb-60">Your Partner In  <span class="mil-accent">Digital Computing.</span> </h4>

                </div>
                <div class="col-lg-12 col-xl-6">

                    <div class="mil-adaptive-right">
                        <a href="{{ route('contact') }}" class="mil-button mil-border mil-mr-15 mil-mb-30"><span>Talk To an Expert</span></a>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- call to action end -->

    <!-- about -->
    <section class="mil-deep-bg mil-p-120-60">
        <div class="mil-deco" style="top: 0; left: 35%;"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mil-mb-60">

                    <div class="mil-circle-illustration">
                        <div class="mil-circle-bg"></div>
                        <div class="mil-image-frame">
                            <img src="{{ asset('img/faces/t3.png') }}" alt="img">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">About Us</span>
                    <h2 class="mil-mb-50">Who   <span class="mil-accent">We Are</span></h2>

                    <p class="mil-mb-50">We are a leading Information and Communication Technology
                        providing a complete suite of end-to-end IT and Communications
                        solutions that allow businesses and organizations improve operational
                        efficiency, enable innovation, mitigate risk and reduce expenditures.
                        We design, develop, and support business applications using the latest
                        technology and standards. We have built a state-of-the art platform of
                        technology assets, engineering talent and strategic partnerships to
                        deliver world class services to our customers.
                        In addition to configuring and deploying cutting edge technology solutions,
                        we also use the same platform to fuse the right security, disaster discovery
                        and management portfolio around your business. With Mcomps, you are
                        assured that your mission critical data is up and running at all times,
                        protected and compliant. </p>

                    <div class="row align-items-end">

                        <div class="col-xl-7">

                            <ul class="mil-check-icon-list mil-mb-60">
                                <li>
                                    <img src="{{ asset('img/icons/sm/12.svg') }}" alt="icon">
                                    <span class="mil-dark">Strategic planning and consulting</span>
                                </li>
                                <li>
                                    <img src="{{ asset('img/icons/sm/12.svg') }}" alt="icon">
                                    <span class="mil-dark">Cutting-edge technology solutions.</span>
                                </li>
                                <li>
                                    <img src="{{ asset('img/icons/sm/12.svg') }}" alt="icon">
                                    <span class="mil-dark">Agile development methodologies.</span>
                                </li>
                                <li>
                                    <img src="{{ asset('mg/icons/sm/12.svg') }}" alt="icon">
                                    <span class="mil-dark">Continuous innovation and improvement.</span>
                                </li>
                            </ul>

                        </div>
                        {{-- <div class="col-xl-5">

                            <a href="team-single.html" class="mil-post-sm mil-mb-60">
                                <div class="mil-cover-frame"><img src="img/faces/1.jpg" alt="cover"></div>
                                <div class="mil-description">
                                    <h4 class="mil-font-3 mil-accent">Almeida Manzolo</h4>
                                    <p class="mil-text-sm">CEO & Co-Founder</p>
                                </div>
                            </a>

                        </div> --}}

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- counters -->
    <section class="mil-p-120-60">
        <div class="mil-deco" style="top: 0; left: 25%;"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="mil-h1">4<span class="mil-accent">+</span></div>
                    <h6 class="mil-mb-60">Years Experience</h6>

                    <h2 class="mil-mb-60">We Run All Kinds of IT Services That Vow Your Success</h2>
                </div>
                <div class="col-lg-6">

                    <h3 class="mil-mb-60">Accelerate <span class="mil-accent">Innovation</span> with world class tech teams We’ll match you to an entire <span class="mil-accent">Remote Technology</span></h3>

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
    <!-- counters end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- partners -->
    {{-- <div class="mil-partners mil-p-120-90">
        <div class="container">
            <div class="mil-partners-frame">
                <a href="#."><img src="img/partners/1.png" alt="partner"></a>
                <a href="#."><img src="img/partners/2.png" alt="partner"></a>
                <a href="#."><img src="img/partners/3.png" alt="partner"></a>
                <a href="#."><img src="img/partners/4.png" alt="partner"></a>
                <a href="#."><img src="img/partners/5.png" alt="partner"></a>
                <a href="#."><img src="img/partners/6.png" alt="partner"></a>
            </div>
        </div>
    </div> --}}
    <!-- partners end -->

    <!-- about -->
    <section class="mil-deep-bg mil-p-120-60">
        <div class="mil-deco" style="top: 0; right: 15%;"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mil-mb-60">

                    <div class="mil-circle-illustration">
                        <div class="mil-circle-bg"></div>
                        <div class="mil-image-frame">
                            <img src="img/faces/t2.png" alt="img">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 mil-mb-60">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">IT Enterprise</span>
                    <h2 class="mil-mb-50">Our Mission</h2>

                    <p class="mil-mb-50">To offer Technology Solutions that increase
                        productivity, improve ease of Business daily
                        operations, increase sales, reduce expenses,
                        enhancing continuity and business security
                        contributing to attainment of every organizational
                        goals and vision</p>

                    <ul class="mil-simple-list">
                        <li>Accelerate innovation.</li>
                        <li>With world class tech teams.</li>
                        <li>Our all service offerings to enhance.</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- features -->
    <section class="mil-p-120-120">
        <div class="container">

            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Discover Our Company</span>
            <h2 class="mil-mb-120">Why Choose Us</h2>

            <div class="mil-divider"></div>
            <div class="mil-line-icon-box">
                <div class="row align-items-center">
                    <div class="col-xl-2">

                        <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                            <img src="img/icons/md/6.svg" alt="icon">
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <h4 class="mil-mb-30">Assured Services</h4>

                    </div>
                    <div class="col-xl-6">

                        <p class="mil-box-text mil-mb-30">Client satisfaction matters very much
                            to us and we take it very seriously. We
                            do not over promise but rather we over
                            deliver.</p>

                    </div>
                </div>
            </div>
            <div class="mil-divider"></div>
            <div class="mil-line-icon-box">
                <div class="row align-items-center">
                    <div class="col-xl-2">

                        <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <h4 class="mil-mb-30">Quality Expertise</h4>

                    </div>
                    <div class="col-xl-6">

                        <p class="mil-box-text mil-mb-30">You have over 20 qualified and certified
                            technicians & engineers at your disposal
                            who have the capabilities to meet all your IT
                            requirements.</p>

                    </div>
                </div>
            </div>
            <div class="mil-divider"></div>
            <div class="mil-line-icon-box">
                <div class="row align-items-center">
                    <div class="col-xl-2">

                        <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                            <img src="img/icons/md/2.svg" alt="icon">
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <h4 class="mil-mb-30">Tailored Services</h4>

                    </div>
                    <div class="col-xl-6">

                        <p class="mil-box-text mil-mb-30">We build powerful and customized IT
                            solutions and support systems that
                            underpin the daily operations of your
                            business.</p>

                    </div>
                </div>
            </div>
            <div class="mil-divider"></div>
            <div class="mil-line-icon-box">
                <div class="row align-items-center">
                    <div class="col-xl-2">

                        <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                            <img src="img/icons/md/4.svg" alt="icon">
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <h4 class="mil-mb-30">Assured Services</h4>

                    </div>
                    <div class="col-xl-6">

                        <p class="mil-box-text mil-mb-30">Client satisfaction matters very much to us and
                            we take it very seriously. We do not over prom-
                            ise but rather we over deliver.</p>

                    </div>
                </div>
            </div>
            <div class="mil-divider"></div>

        </div>
    </section>
    <!-- features end -->

    <!-- features -->
    <section class="mil-deep-bg mil-p-120-60">
        <div class="mil-deco" style="top: 0; right: 25%;"></div>
        <div class="container">
            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Values</span>
            <h2 class="mil-mb-120">Our  <span class="mil-accent">Coorperate</span> Values</h2>

            <div class="row">
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Innovation</h4>
                            <p class="mil-box-text">At Mcomps, we prioritize innovation as a cornerstone of our business. We are committed to
                                continuously introducing new ideas and advanced technologies to enhance our services and products. By fostering a
                                culture of creativity and forward-thinking, we ensure that we stay ahead in the rapidly evolving IT industry.
                                 Our dedication to innovation drives us to deliver cutting-edge solutions that meet the dynamic needs of our clients.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Transformation</h4>
                            <p class="mil-box-text">Transformation is at the heart of what we do at Mcomps. We specialize in helping our clients undergo digital transformation, leveraging technology to fundamentally change how their businesses operate and deliver value. Our expertise enables organizations to embrace new digital strategies, streamline processes,
                                and achieve greater efficiency and competitiveness in the marketplace.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Customer Care</h4>
                            <p class="mil-box-text">Customer care is a core value that defines our approach to business.
                                 At Mcomps, we are dedicated to providing exceptional support and service to our customers. We prioritize understanding and addressing their needs, ensuring satisfaction, and fostering long-term relationships. Our customer-centric approach helps us to build trust and loyalty,
                                making us a preferred partner for our clients.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Excellence</h4>
                            <p class="mil-box-text">Excellence is a non-negotiable value at Mcomps. We strive for the highest quality in
                                 every aspect of our work, from product development to customer service. Our commitment to excellence ensures that we deliver superior products and services, creating outstanding customer experiences. We believe in setting high standards and consistently
                                 exceeding them to maintain our reputation for quality and reliability.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Integrity</h4>
                            <p class="mil-box-text">Integrity is the foundation of our business practices at Mcomps. We believe in conducting all our dealings with honesty and strong moral principles. Our commitment to integrity builds trust with our clients, partners, and employees. By ensuring that all our actions are ethical and transparent,
                                we create a reliable and trustworthy business environment.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Commitment</h4>
                            <p class="mil-box-text">Commitment is a value that we hold dear at Mcomps. We are dedicated to fulfilling our promises and obligations. This means being reliable and steadfast in delivering on our commitments to customers, partners, and employees. Our unwavering commitment ensures consistent and dependable service,
                                reinforcing our reputation as a trustworthy and dependable IT solutions provider.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

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
                        <div class="mil-input-frame mil-mb-30">
                            <label><span class="mil-light">Email Adress</span><span class="mil-accent">Required</span></label>
                            <input type="email" id="email" placeholder="Your Email">
                        </div>
                        <div class="mil-input-frame mil-mb-60">
                            <label><span class="mil-light">Phone</span><span class="mil-light-soft">Optional</span></label>
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
                            <label><span class="mil-light">Email Adress</span><span class="mil-accent">Required</span></label>
                            <textarea placeholder="Your Message"></textarea>
                        </div>
                        <p class="mil-text-sm mil-light-soft mil-mb-15">We will process your personal information in accordance with our Privacy Policy.</p>

                        <div class="mil-checbox-frame mil-mb-60">
                            <input class="mil-checkbox" id="checkbox-1" type="checkbox" value="value">
                            <label for="checkbox-1" class="mil-text-sm mil-light">I would like to be contacted with news and updates about your <a href="#." class="mil-accent">events and services</a></label>
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
