<!-- ==== header start ==== -->
<header class="header header--secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="nav">
                    <div class="nav__content">
                        <div class="nav__logo">
                            <a href="{{ route('FrontEnd.home') }}">
                                <img src="{{ asset('assetsFront/images/logo-light.png') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="nav__menu">
                            <div class="nav__menu-logo d-flex d-xl-none">
                                <a href="index.html" class="text-center hide-nav">
                                    <img src="{{ asset('assetsFront/images/logo-light.png') }}" alt="Logo">
                                </a>
                                <a href="javascript:void(0)" class="nav__menu-close">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                            </div>

                            <ul class="nav__menu-items">
                                {{-- Home --}}
                                <li>
                                    <a href="{{ route('FrontEnd.home') }}" class="nav__menu-link">
                                        Home
                                    </a>
                                </li>
                                {{-- About Us --}}
                                <li>
                                    <a href="{{ route('FrontEnd.aboutUs') }}" class="nav__menu-link">
                                        About Us
                                    </a>
                                </li>
                                {{-- Facility --}}
                                <li class="nav__menu-item nav__menu-item--dropdown">
                                    <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                        Facility
                                    </a>
                                    <ul class="nav__dropdown">
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="{{ route('FrontEnd.facility') }}">Facility</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="{{ route('FrontEnd.facilityDetailsHome') }}">Facility
                                                Details</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Gallery --}}
                                <li>
                                    <a href="{{ route('FrontEnd.gallery') }}" class="nav__menu-link">
                                        Gallery
                                    </a>
                                </li>
                                {{-- Contact Us --}}
                                <li>
                                    <a href="{{ route('FrontEnd.contactUs') }}" class="nav__menu-link">
                                        Contact Us
                                    </a>
                                </li>

                                <li class="nav__menu-item nav__menu-item--dropdown">
                                    <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                        Pages
                                    </a>
                                    <ul class="nav__dropdown">
                                        {{-- <li>
                                            <a class="nav__dropdown-item hide-nav" href="{{ route('FrontEnd.aboutUs') }}">About Us</a>
                                        </li> --}}
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="pricing.html">Pricing
                                                Plan</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="event.html">Event</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="gallery.html">Gallery</a>
                                        </li>

                                        <li class="nav__menu-link-child">
                                            <a class="nav__dropdown-item nav__menu-link--dropdown nav__menu-link-childr"
                                                href="javascript:void(0)">Blog</a>
                                            <ul class="nav__dropdown-child">
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="blog.html">Blog
                                                        Grid</a>
                                                </li>
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="blog-list.html">Blog
                                                        List</a>
                                                </li>
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="blog-details.html">Blog
                                                        Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="contact-us.html">Contact
                                                Us</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="join-club.html">Join
                                                Club</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="support.html">Support</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="privacy-policy.html">Privacy
                                                Policy</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="404.html">Error</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav__menu-item d-block d-md-none">
                                    <a href="sign-in.html" class="cmn-button cmn-button--secondary">Sign In</a>
                                    <a href="sign-up.html" class="cmn-button">Sign Up</a>
                                </li>
                            </ul>
                            <div class="social">
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </div>
                        </div>
                        {{-- Login System --}}
                        <div class="nav__uncollapsed">
                            {{-- <a href="cart.html" class="cart">
                                <i class="golftio-cart"></i>
                            </a> --}}
                            <div class="nav__uncollapsed-item d-none d-md-flex">
                                {{-- <a href="sign-in.html" class="cmn-button cmn-button--secondary">Sign In</a>
                                <a href="sign-up.html" class="cmn-button">Sign Up</a> --}}
                                <a href="{{ route('member-ship.index') }}" class="cmn-button cmn-button--secondary"> Membership </a>
                                <a href="{{ route('book.index') }}" class="cmn-button cmn-button--secondary">Book Now</a>
                            </div>
                            {{-- <button class="nav__bar d-block d-xl-none">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button> --}}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="backdrop"></div>
</header>
<!-- ==== / header end ==== -->
