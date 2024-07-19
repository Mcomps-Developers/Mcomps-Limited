<div>
    @section('title')
        Contact
    @endsection
    <div class="mil-banner-sm mil-deep-bg">
        <img src="{{ asset('img/deco/map.png') }}" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
                <h2 class="mil-uppercase">Let’s discuss your opportunity</h2>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- contact -->
    <section class="mil-contact mil-p-120-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 col-xl-8 mil-mb-120">

                    <form>

                        <h4 class="mil-mb-60"><span class="mil-accent">01.</span> Tell Us About Yourself</h4>

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>First Name</span></label>
                                    <input type="text" placeholder="Mcomps">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6"><span>Last Name</span></label>
                                    <input type="text" placeholder="Limited">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6"><span>Email Address</span></label>
                                    <input type="email" placeholder="mcomps@mydomain.com">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6"><span>Phone</span></label>
                                    <input type="number" placeholder="Enter your phone number">
                                </div>

                            </div>
                            <div class="col-lg-6">


                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>Company</span></label>
                                    <input type="text" placeholder="Your company name">
                                </div>

                            </div>
                            <div class="col-lg-6 mil-mb-30">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>Role</span></label>
                                    <input type="text" placeholder="Your role">
                                </div>

                            </div>
                        </div>

                        <h4 class="mil-mb-60"><span class="mil-accent">02.</span> What Can We Help You With?</h4>

                        <div class="row">
                            <div class="col-lg-6 mil-mb-30">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>Product Design</span></label>
                                    <input type="text" placeholder="Web Designer">
                                </div>

                            </div>
                        </div>

                        <h4 class="mil-mb-60"><span class="mil-accent">03.</span> Tell Us About Your Project</h4>

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6"><span>Project Description</span></label>
                                    <textarea placeholder="Your Message" class="mil-shortened"></textarea>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="mil-attach-frame mil-dark mil-mb-30">
                                    <i class="fas fa-paperclip"></i>
                                    <label class="mil-custom-file-input">
                                        <span>Attach your file</span>
                                        <input type="file" id="mil-file-input">
                                    </label>
                                    <p class="mil-text-sm mil-light-soft">up to 20MB</p>
                                </div>
                            </div>

                            <div class="col-lg-6 mil-mb-30">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>Project Budget</span></label>
                                    <input type="number" placeholder="123">
                                </div>

                            </div>

                            <div class="col-lg-12">

                                <button class="mil-button mil-border mil-fw"><span>Submit Now</span></button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>
        </div>
    </section>
    <!-- contact end -->

    <!-- map -->
    {{-- <div>
        <div class="mil-map-frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.289421122936!2d-74.0577166!3d40.7107384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250aee3ee6da7%3A0xe8a316c6c836011f!2sBuddy's%20JC!5e0!3m2!1sen!2sua!4v1682071433844!5m2!1sen!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container"></div>
    </div> --}}
    <!-- map end -->

    <!-- contact info -->
    <section class="mil-p-120-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">

                    <div class="mil-mb-60">
                        <h4 class="mil-mb-30">ADDRESS</h4>
                        <h5 class="mil-list-title mil-mb-15">Nairobi</h5>
                        <p class="mil-mb-30">Karen Plains Arcade, Karen Plains Road off Karen Road</p>
                        <div class="mil-divider mil-divider-left mil-mb-30"></div>

                        <h6 class="mil-mb-15"><i class="fas fa-phone"></i> <span class="mil-accent">+ 254</span> 7-0010-6541</h6>
                        <h6><i class="fas fa-envelope"></i> info@mcomps.africa</h6>
                    </div>


                </div>
                {{-- <div class="col-xl-4">

                    <div class="mil-mb-60">
                        <h4 class="mil-mb-30">Germany</h4>
                        <h5 class="mil-list-title mil-mb-15">Berlin</h5>
                        <p class="mil-mb-30">501, Satyamev Eminence, Science City Road,
                            Ahmedabad, Gujarat - 380060</p>
                        <div class="mil-divider mil-divider-left mil-mb-30"></div>

                        <h6 class="mil-mb-15"><span class="mil-accent">+ 90</span> 700 300 000</h6>
                        <h6><span class="mil-accent">germany</span>.support@mydomain.com</h6>
                    </div>

                </div> --}}
                {{-- <div class="col-xl-4">

                    <div class="mil-mb-60">
                        <h4 class="mil-mb-30">France</h4>
                        <h5 class="mil-list-title mil-mb-15">Paris</h5>
                        <p class="mil-mb-30">397 Bedford Highway, Suite 323 Halifax NS B3M 2L3 Science City Road</p>
                        <div class="mil-divider mil-divider-left mil-mb-30"></div>

                        <h6 class="mil-mb-15"><span class="mil-accent">+ 90</span> 700 300 000</h6>
                        <h6><span class="mil-accent">france</span>.support@mydomain.com</h6>
                    </div>

                </div> --}}
            </div>
        </div>
    </section>
</div>
