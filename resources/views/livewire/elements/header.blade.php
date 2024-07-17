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

                        </li>
                        <li class="mil-has-children">
                            <a href="#.">About Us</a>
                            <ul>
                                <li><a href="{{ route('about') }}">About Mcomps</a></li>
                                <li class="nav-item">
                                    <a href="{{ asset('img/Mcomps Limited Company Profile.pdf') }}" class="nav-link">Company
                                        profile</a>
                                </li>
                                <li><a href="{{ route('team') }}">Our Team</a></li>




                            </ul>

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
                        <a href="#.">Media</a>
                        <ul>

                            <li><a href="{{ route('blogs') }}">Blog</a></li>
                            <li><a href="{{ route('events') }}">Event</a></li>
                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                        </ul>
                        <li class="mil-has-children">
                            <a href="{{ route('careers') }}">Careers</a>

                        </li>
                        <li class="mil-has-children">
                            <a href="{{ route('contact') }}">Contact Us</a>

                        </li>
                    </ul>

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
