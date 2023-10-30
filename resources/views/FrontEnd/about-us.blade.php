<x-layouts.app title="AboutUs">
    @push('styleSheet')
        <style>
            .banner--inner {
                background-image: url('assetsFront/images/banner/her.png');
            }

            .odometer-inside {
                display: flex !important;
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
                                <li class="breadcrumb-item"><a href="{{ route('FrontEnd.facility') }}">Home</a></li>
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
                        <h5 class="section__content-sub-title">{{ $aboutUs->sub_title }}</h5>
                        <h2 class="section__content-title">
                            {{ $aboutUs->title }}
                        </h2>
                        <p class="section__content-text">
                            {!! $aboutUs->description !!}
                        </p>
                        <div class="about__section-inner">
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class={{ $aboutUsIcon->icon }}></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>{{ $aboutUsIcon->title }}</h5>
                                    <p class="secondary-text">
                                        {!! $aboutUsIcon->description !!}
                                    </p>
                                </div>
                            </div>
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class={{ $aboutUsIcon->second_icon }}></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>{{ $aboutUsIcon->second_title }}</h5>
                                    <p class="secondary-text">
                                        {!! $aboutUsIcon->second_description !!}
                                    </p>
                                </div>
                            </div>
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class={{ $aboutUsIcon->third_icon }}></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>{{ $aboutUsIcon->third_title }}</h5>
                                    <p class="secondary-text">
                                        {!! $aboutUsIcon->third_description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="section__content-cta">
                            <a href="about-us.html" class="cmn-button">Read More</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1 section__col">
                    <div class="about__thumb wow fadeInUp" data-wow-duration="0.4s">
                        <img src="assetsFront/images/{{ $aboutUs->image }}" alt="Image" />
                        <div class="about__experience">
                            <div class="about__experience-thumb">
                                <i class="golftio-ball"></i>
                            </div>
                            {{-- <h3>
                                <span class="odometer" data-odometer-final="{{ $aboutUs->num_of_years }}"></span>
                                <span>+</span>
                            </h3>
                            <p>Years of experience</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / about section end ==== -->

    <!-- ==== team section start ==== -->
    <section class="section team wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h5 class="section__header-sub-title">{{ $team->sub_title }}</h5>
                        <h2 class="section__header-title">{{ $team->title }}</h2>
                        <p>{!! $team->description !!}</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center"> --}}
            {{-- <div class="col-lg-7" style="margin: auto;"> --}}
            <img src="assetsFront/images/{{ $team->image }}" alt="img"
                style="width:100% !important;object-fit:contain;">
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- <div class="team__slider--secondary">
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
                </div> --}}
            {{-- <div class="row">
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
                </div> --}}
        </div>
    </section>
    <!-- ==== / team section end ==== -->

</x-layouts.app>
