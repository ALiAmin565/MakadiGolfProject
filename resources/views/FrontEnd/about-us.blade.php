<x-layouts.app title="Facilities">
    @push('styleSheet')
        <style>
            .banner--inner {
                background-image: url('assetsFront/images/banner/her.png');
            }
        </style>
    @endpush
    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    About Us
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->
    <!-- ==== about section start ==== -->
    <section class="section about about--alt">
        <div class="container">
            <div class="row section__row align-items-center">
                <div class="col-lg-6 col-xl-6 section__col">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">About us</h5>
                        <h2 class="section__content-title">
                            We Are The Best Golf Club In Your Local Area
                        </h2>
                        <p class="section__content-text">
                            We offer a lot of courses of varying difficulty and beautiful
                            scenery that golfers of all skill levels can enjoy. You will
                            learn golf from professionals with our competent and experienced
                            staff. You will have a great fun with our magnificent
                            illuminated field.
                        </p>
                        <div class="about__section-inner">
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class="golftio-flag"></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>Professional Team</h5>
                                    <p class="secondary-text">
                                        Modern & latest equipment with expert coaching
                                    </p>
                                </div>
                            </div>
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class="golftio-shot-great-upper"></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>Professional Trainings</h5>
                                    <p class="secondary-text">
                                        Modern & latest equipment with expert coaching
                                    </p>
                                </div>
                            </div>
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class="golftio-sticks"></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>Practice Facilities</h5>
                                    <p class="secondary-text">
                                        Modern & latest equipment with expert coaching
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="section__content-cta">
                            <a href="about-us.html" class="cmn-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1 section__col">
                    <div class="about__thumb wow fadeInUp" data-wow-duration="0.4s">
                        <img src="assetsFront/images/about-thumb.png" alt="Image" class="unset">
                        <div class="about__experience">
                            <div class="about__experience-thumb">
                                <i class="golftio-ball"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-odometer-final="30"></span>
                                <span>+</span>
                            </h3>
                            <p>Years of experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / about section end ==== -->

</x-layouts.app>
