<!-- ==== header start ==== -->
<header class="header header--secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="nav">
                    <div class="nav__content">
                        <div class="nav__logo">
                            <a href="index.html">
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
                                <a href="{{ route('FrontEnd.home') }}" class="nav__menu-link">
                                    Home
                                </a>
                                {{-- To Choose Selected Home Page --}}
                                {{-- <li class="nav__menu-item nav__menu-item--dropdown">
                                    <ul class="nav__dropdown">
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="index.html">Home One</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="index-two.html">Home
                                                Two</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="index-three.html">Home
                                                Three</a>
                                        </li>
                                    </ul>
                                </li> --}}
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
                                <li class="nav__menu-item nav__menu-item--dropdown">
                                    <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                        Trainings
                                    </a>
                                    <ul class="nav__dropdown">
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="training.html">Trainings</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="training-details.html">Training
                                                Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav__menu-item nav__menu-item--dropdown">
                                    <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                        Shop
                                    </a>
                                    <ul class="nav__dropdown">
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="product-details.html">Product
                                                Details</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="cart.html">Cart</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a class="nav__dropdown-item hide-nav"
                                                href="payment-successfull.html">Successfull</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav__menu-item nav__menu-item--dropdown">
                                    <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                        Pages
                                    </a>
                                    <ul class="nav__dropdown">
                                        <li>
                                            <a class="nav__dropdown-item hide-nav" href="{{ route('FrontEnd.aboutUs') }}">About Us</a>
                                        </li>
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
                        <div class="nav__uncollapsed">
                            <a href="cart.html" class="cart">
                                <i class="golftio-cart"></i>
                            </a>
                            <div class="nav__uncollapsed-item d-none d-md-flex">
                                <a href="sign-in.html" class="cmn-button cmn-button--secondary">Sign In</a>
                                <a href="sign-up.html" class="cmn-button">Sign Up</a>
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
