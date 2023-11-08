<!-- ==== header start ==== -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="nav">
                    <div class="nav__content">
                        <div class="nav__logo" style="width: 10%;">
                            <a href="{{ route('FrontEnd.home') }}">
                                <img src="{{ asset('assetsFront/images/Madinat_makadi_Golf_logo.png') }}" alt="Logo"
                                    style="width: 100%">
                            </a>
                        </div>
                        <div class="nav__menu">
                            <div class="nav__menu-logo d-flex d-xl-none">
                                <a href="index.html" class="text-center hide-nav">
                                    <img src="{{ asset('assetsFront/images/Madinat_makadi_Golf_logo.png') }}"
                                        alt="Logo">
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

                                <li>
                                    <a href="{{ route('FrontEnd.facility') }}" class="nav__menu-link">
                                        Facilities
                                    </a>
                                </li>
                                {{-- <li class="nav__menu-item nav__menu-item--dropdown">
                                    <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                        Facility
                                    </a>
                                    <ul class="nav__dropdown">
                                        <li>
                                            <a class="nav__dropdown-item hide-nav"
                                                href="{{ route('FrontEnd.facility') }}">Facility</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav"
                                                href="{{ route('FrontEnd.facilityDetailsHome') }}">Facility
                                                Details</a>
                                        </li>
                                    </ul>
                                </li> --}}
                                {{-- Golf Course --}}
                                <li class="nav__menu-item nav__menu-item--dropdown">
                                    <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                        Golf
                                    </a>
                                    <ul class="nav__dropdown">
                                        <li>
                                            <a class="nav__dropdown-item hide-nav"
                                                href="{{ route('FrontEnd.johnSanford') }}">John Sanford</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav"
                                                href="{{ route('FrontEnd.johnSanfordDetails') }}">Golf Course
                                            </a>
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


                                <li class="nav__menu-item d-block d-md-none">
                                    {{-- <a href="sign-in.html" class="cmn-button cmn-button--secondary">Sign In</a>
                                    <a href="sign-up.html" class="cmn-button">Sign Up</a> --}}
                                    <a href="{{ route('member-ship.index') }}"
                                        class="cmn-button cmn-button--secondary">
                                        Membership </a>
                                    <a href="{{ route('book.index') }}" class="cmn-button cmn-button--secondary">Book
                                        Now</a>
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
                                <a href="{{ route('member-ship.index') }}" class="cmn-button cmn-button--secondary">
                                    Membership </a>
                                <a href="{{ route('book.index') }}" class="cmn-button cmn-button--secondary">Book
                                    Now</a>
                                {{-- <a href="https://madinatmakadigolf.com/ttrequestv2.aspx" class="cmn-button cmn-button--secondary">Book
                                    Now</a> --}}
                            </div>
                            <button class="nav__bar d-block d-xl-none">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="backdrop"></div>
</header>
<!-- ==== / header end ==== -->
