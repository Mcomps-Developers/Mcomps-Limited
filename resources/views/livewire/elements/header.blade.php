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
                        {{-- <li><a href="{{ route('portfolio') }}">Case Studies</a></li> --}}
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
                        <a href="#.">About</a>
                        <ul>
                            <li><a href="{{ route('about') }}">About Mcomps</a></li>
                            <li class="nav-item">
                                <a href="{{ asset('img/Mcomps Limited Company Profile.pdf') }}" class="nav-link">Company
                                    profile</a>
                            </li>
                            <li><a href="{{ route('team') }}">Our Team</a></li>




                        </ul>
                    <li class="mil-has-children">
                        <a href="#.">Media</a>
                        <ul>

                            <li><a href="{{ route('blogs') }}">Blog</a></li>
                            <li><a href="{{ route('events') }}">Event</a></li>
                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                        </ul>
                        <li class="mil-has-children">
                            <a href="{{ route('careers') }}">Careers</a>

                        </li>
                        <li class="mil-has-children">
                            <a href="{{ route('contact') }}">Contact Us</a>

                        </li>
                    </ul>
                    <div class="mil-search-icon">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                            xmlns="{{ asset('www.w3.org/2000/svg.html') }}">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.5848 19.7029C20.3908 19.8999 20.1358 19.997 19.8808 19.997C19.6268 19.997 19.3718 19.8999 19.1778 19.7029L15.5118 16.2199C13.9778 17.2549 12.3798 17.997 9.92584 17.997C4.98484 17.997 0.964844 13.959 0.964844 8.99695C0.964844 4.34995 4.98484 0.199951 9.92584 0.199951C14.8668 0.199951 18.8858 4.34995 18.8858 8.99695C18.8858 11.118 18.1468 13.68 16.9188 14.608L20.5848 18.29C20.9738 18.681 20.9738 19.3129 20.5848 19.7029ZM9.92584 1.99695C6.82984 1.99695 2.95684 5.13695 2.95684 8.99695C2.95684 12.857 6.82984 15.998 9.92584 15.998C11.8398 15.998 13.5758 15.217 14.8368 13.957C14.8408 13.952 14.8418 13.945 14.8468 13.941C14.8518 13.936 14.8578 13.935 14.8628 13.93C16.1168 12.663 16.8948 10.92 16.8948 8.99695C16.8948 5.13695 13.7678 1.99695 9.92584 1.99695Z" />
                        </svg>
                    </div>
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
