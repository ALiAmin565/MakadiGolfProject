<x-layouts.app>
    @push('styleSheet')
        <style>
            .banner--secondary {
                background-image: linear-gradient(90deg, #a7a7a7 0%, rgba(255, 255, 255, 0) 100%), url({{ asset('assetsFront/images/banner/' . $banner->image) }});
            }
        </style>
    @endpush
    <!-- ==== banner section start ==== -->
    <section class="banner--secondary">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="banner__content wow fadeInUp" data-wow-duration="0.4s">
                        <h5 class="banner__content-sub-title">{{ $banner->sub_title }}</h5>
                        <h1 class="banner__content-title">{{ $banner->title }}</h1>
                        <p class="primary-text banner__content-text">{!! $banner->description !!}</p>
                        <div class="banner__content-cta">
                            <a href="join-club.html" class="cmn-button">@lang('Join Our Club')</a>
                            <a href="about-us.html" class="cmn-button cmn-button--secondary">@lang('About Us')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner section end ==== -->
    <!-- ==== facility section start ==== -->
    <section class="section facility wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h5 class="section__header-sub-title">{{ $facilityPage->sub_title }}</h5>
                        <h2 class="section__header-title">{{ $facilityPage->title }}</h2>
                        <p>{!! $facilityPage->description !!}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10 col-lg-12">
                    <div class="facility__slider">
                        @foreach ($facilities as $facility)
                            <div class="facility__card">
                                <div class="facility__card-icon">
                                    <i class="{{ $facility->icon }}"></i>
                                </div>
                                <div class="facility__card-content">
                                    <h5><a
                                            href="{{ route('FrontEnd.facilityDetails', $facility->id) }}">{{ $facility->name }}</a>
                                    </h5>
                                    @php
                                        $desc = strip_tags($facility->description); // Strip HTML tags.
                                        $facilityDesc = strlen($desc) > 15 ? substr($desc, 0, 15) . '...' : $desc;
                                    @endphp
                                    <p class="secondary-text">{{ $facilityDesc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-navigation">
                        <button class="next-facility cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button class="prev-facility cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / facility section end ==== -->

    <!-- ==== about section start ==== -->
    <section class="section about--secondary wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xxl-5 d-none d-lg-block">
                    <div class="about--secondary__thumb dir-rtl">
                        <img src="assetsFront/images/{{ $aboutUs->image }}" alt="{{ $aboutUs->sub_title }}"
                            class="unset">
                        <div class="about--secondary__thumb-experience">
                            <h3><span class="odometer" data-odometer-final="30"></span> <span>+</span></h3>
                            <p>Years <br> of experience</p>
                        </div>
                        <div class="about--secondary__modal">
                            <img src="assetsFront/images/{{ $aboutUs->image }}" alt="img">
                            <div class="play-wrapper">
                                <a href="{{ $aboutUs->youtube_link }}" target="_blank" title="Youtube Video Player"
                                    class="play-btn">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl-6 offset-xxl-1">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">{{ $aboutUs->sub_title }}</h5>
                        <h2 class="section__content-title">{{ $aboutUs->title }}</h2>
                        <p class="section__content-text">{!! $aboutUs->description !!} </p>
                        <div class="row">
                            <div class="col-sm-12 col-md-11 col-lg-12">
                                <div class="about--secondary__single">
                                    <div class="row section__row">
                                        <div class="col-6 col-sm-4 section__col">
                                            <div class="about--secondary__single-item">
                                                <div class="about--secondary__single-item__icon">
                                                    <i class="golftio-flag"></i>
                                                </div>
                                                <h6>Professional Team</h6>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 section__col">
                                            <div class="about--secondary__single-item">
                                                <div class="about--secondary__single-item__icon">
                                                    <i class="golftio-shot-upper"></i>
                                                </div>
                                                <h6>Professional Trainings</h6>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 section__col">
                                            <div class="about--secondary__single-item">
                                                <div class="about--secondary__single-item__icon">
                                                    <i class="golftio-shot-ground"></i>
                                                </div>
                                                <h6>Facilities with Gym</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section__content-cta">
                            <a href="{{ route('FrontEnd.aboutUs') }}" class="cmn-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / about section end ==== -->

    <!-- ==== event section start ==== -->
    <section class="section event wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header--secondary">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="section__header--secondary__content">
                                    <h5>Event</h5>
                                    <h2>Our upcoming events</h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="section__header--secondary__cta">
                                    <a href="event.html" class="cmn-button">See All Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center section__row">
                <div class="col-sm-10 col-md-6 section__col">
                    <div class="event__single">
                        <div class="event__single-thumb">
                            <a href="sign-up.html">
                                <img src="assetsFront/images/event/one.png" alt="Image">
                            </a>
                        </div>
                        <div class="event__single-content">
                            <h3>13 <span class="primary-text">Nov</span></h3>
                            <p>Friday at 10:00 am</p>
                            <h5>Master Class</h5>
                            <p class="secondary-text"><i class="golftio-location"></i> Parker Rd. Allentown, 31134</p>
                            {{-- <p>Free</p> --}}
                            {{-- <a href="sign-up.html" class="cmn-button">Join Now</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 section__col">
                    <div class="event__single">
                        <div class="event__single-thumb">
                            <a href="sign-up.html">
                                <img src="assetsFront/images/event/two.png" alt="Image">
                            </a>
                        </div>
                        <div class="event__single-content">
                            <h3>27 <span class="primary-text">Nov</span></h3>
                            <p>Saturday at 04:00 pm</p>
                            <h5>Golf Championship</h5>
                            <p class="secondary-text"><i class="golftio-location"></i> Parker Rd. Allentown, 31134</p>
                            {{-- <p>$40.00</p>
                            <a href="sign-up.html" class="cmn-button">Join Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / event section end ==== -->

    <!-- ==== sponsor section start ==== -->
    <section class="section team wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="team__slider--secondary">
                @foreach ($partners as $partner)
                    <div class="">
                        <div class="team__slider-card__thumb" style="text-align: center;">
                            <img src="assetsFront/images/partners/{{ $partner->image }}" alt="Team"
                                style="height: 100px !important;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ==== / sponsor section end ==== -->

    <!-- ==== team section start ==== -->
    <section class="section team wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h5 class="section__header-sub-title">Our Team</h5>
                        <h2 class="section__header-title">Meet Our Experts</h2>
                        <p>Golftio Sports Club is a golf club with a history that goes back to XX century. From a
                            cricket club to soccer tournaments,</p>
                    </div>
                </div>
            </div>
            <div class="team__slider--secondary">
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="assetsFront/images/team/one.png" alt="Team">
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Jerome Bell</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="assetsFront/images/team/two.png" alt="Team">
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Mariah Tal</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="assetsFront/images/team/three.png" alt="Team">
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Robert Fox</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="assetsFront/images/team/four.png" alt="Team">
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Andrea Reed</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="assetsFront/images/team/one.png" alt="Team">
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Jerome Bell</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="assetsFront/images/team/two.png" alt="Team">
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Mariah Tal</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="assetsFront/images/team/three.png" alt="Team">
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Robert Fox</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team__slider-card">
                    <div class="team__slider-card__thumb">
                        <img src="assetsFront/images/team/four.png" alt="Team">
                    </div>
                    <div class="team__slider-card__content">
                        <h5>Andrea Reed</h5>
                        <p class="secondary-text">Golfer</p>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-navigation">
                        <button class="next-team--secondary cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button class="prev-team--secondary cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / team section end ==== -->

    <!-- ==== testimonial section start ==== -->
    <section class="section testimonial testimonial--secondary wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row align-items-center section__row">
                <div class="col-lg-6 col-xxl-6 section__col">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">Testimonial</h5>
                        <h2 class="section__content-title">Our Members Thinking About Us</h2>
                        <p class="section__content-text">Our professional team will make sure that you find the right
                            course and the best trainer to receive maximum efficiency. All our trainers are professional
                            golf players with the highest...</p>
                        <div class="section__content-cta">
                            {{-- <a href="join-club.html" class="cmn-button">Join Our Club</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-5 offset-xxl-1 section__col">
                    <div class="testimonial__slider--secondary">
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="quotation">
                                    <i class="golftio-quote"></i>
                                </div>
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assetsFront/images/testimonial/one.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Jenelia D'suza</h6>
                                    <p class="secondary-text">Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="quotation">
                                    <i class="golftio-quote"></i>
                                </div>
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assetsFront/images/testimonial/two.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Sarika Paleccha</h6>
                                    <p class="secondary-text">Player</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="quotation">
                                    <i class="golftio-quote"></i>
                                </div>
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assetsFront/images/testimonial/three.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Brad Hogds</h6>
                                    <p class="secondary-text">Junior Player</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="quotation">
                                    <i class="golftio-quote"></i>
                                </div>
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assetsFront/images/testimonial/one.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Jenelia D'suza</h6>
                                    <p class="secondary-text">Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="quotation">
                                    <i class="golftio-quote"></i>
                                </div>
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assetsFront/images/testimonial/two.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Sarika Paleccha</h6>
                                    <p class="secondary-text">Player</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="quotation">
                                    <i class="golftio-quote"></i>
                                </div>
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assetsFront/images/testimonial/three.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Brad Hogds</h6>
                                    <p class="secondary-text">Junior Player</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-navigation justify-content-lg-end">
                        <button class="next-testimonial--secondary cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button class="prev-testimonial--secondary cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / testimonial section end ==== -->

    <!-- ==== shop section start ==== -->
    {{-- <section class="section shop shop--secondary wow fadeInUp" data-wow-duration="0.4s"
        data-background="assetsFront/images/player-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h5 class="section__header-sub-title">Shop</h5>
                        <h2 class="section__header-title">Featured products</h2>
                        <p>Golftio Sports Club is a golf club with a history that goes back to XX century. From a
                            cricket club to soccer tournaments,</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center section__row">
                <div class="col-md-10 col-lg-6 col-xl-6 section__col">
                    <div class="shop__card">
                        <div class="shop__card-thumb">
                            <a href="product-details.html">
                                <img src="assetsFront/images/shop/ball-alt.png" alt="Image">
                            </a>
                        </div>
                        <div>
                            <div class="shop__card-info">
                                <h5><a href="product-details.html">Golf Ball</a></h5>
                                <p>$165.00 <span>$252.00</span></p>
                            </div>
                            <div class="shop__card-review">
                                <i class="golftio-star"></i>
                                <i class="golftio-star"></i>
                                <i class="golftio-star"></i>
                                <i class="golftio-star"></i>
                                <i class="golftio-star"></i>
                            </div>
                            <div class="shop__card-cta">
                                <a href="cart.html" class="cmn-button">Add Cart</a>
                                <a href="sign-up.html" class="cmn-button cmn-button--secondary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-6 section__col">
                    <div class="shop__card">
                        <div class="shop__card-thumb">
                            <a href="product-details.html">
                                <img src="assetsFront/images/shop/gloves-alt.png" alt="Image">
                            </a>
                        </div>
                        <div>
                            <div class="shop__card-info">
                                <h5><a href="product-details.html">White Gloves</a></h5>
                                <p>$165.00 <span>$252.00</span></p>
                            </div>
                            <div class="shop__card-review">
                                <i class="golftio-star"></i>
                                <i class="golftio-star"></i>
                                <i class="golftio-star"></i>
                                <i class="golftio-star"></i>
                                <i class="golftio-star"></i>
                            </div>
                            <div class="shop__card-cta">
                                <a href="cart.html" class="cmn-button">Add Cart</a>
                                <a href="sign-up.html" class="cmn-button cmn-button--secondary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section__cta">
                        <a href="shop.html" class="cmn-button">See all products</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==== / shop section end ==== -->
</x-layouts.app>
