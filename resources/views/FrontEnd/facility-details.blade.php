<x-layouts.app title="{{ $facility->name }}">
    @push('styleSheet')
        <style>
            .banner--inner {
                position: relative;
                background-size: cover !important;
                background-position: center !important;
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                /* Black overlay with 0.5 opacity */
                pointer-events: none;
                /* Allows clicks to pass through the overlay to elements below */
            }

            .banner--inner__content h2 {
                color: #fff;
                /* Adjust text color for better visibility on the dark overlay */
            }

            .banner--inner__content h2 {
                color: #fff;
                /* Adjust text color for better visibility on the dark overlay */
                position: relative;
                z-index: 1;
            }
        </style>
    @endpush
    <!-- ==== banner start ==== -->
    <section class="banner--inner"
        style="background-image: url({{ asset('assetsFront/images/facility/' . $facility->image) }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>{{ $facility->name }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Facility</li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $facility->name }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->

    <!-- ==== details start ==== -->
    <section class="section details">
        <div class="container">
            <div class="row section__row">
                <div class="col-12 col-xl-8 section__col">
                    <div class="facility__details">
                        <h2 class="mb-4 mt-2">{{ $facility->name }}</h2>
                        <div class="facility__single mb-4">
                            <p>{!! $facility->description !!}</p>
                        </div>
                        <div class="facility__popup">
                            <img src="{{ asset('assetsFront/images/facility/' . $facility->image) }}"
                                alt="Facility Details">
                            <div class="play-wrapper">
                                <a href="{{ $facility->youtube_link }}" target="_blank" title="Youtube Video Player"
                                    class="play-btn">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 section__col">
                    <div class="sidebar wow fadeInUp" data-wow-duration="0.4s">
                        <div class="sidebar__single">
                            <h5>Search</h5>
                            <hr>
                            <form action="#" method="post">
                                <div class="search_form">
                                    <input type="text" name="post-search" id="postSearch" placeholder="Search">
                                    <button type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="sidebar__single">
                            <h5>All Facility</h5>
                            <div class="sidebar__tab">
                                <ul>
                                    @foreach ($facilities as $facility)
                                        <li><a href="{{ route('FrontEnd.facilityDetails', $facility->id) }}"
                                                class="facility-tab-btn"><i
                                                    class="fa-solid fa-angle-right"></i>{{ $facility->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar__single">
                            <h5>Follow Our Journey</h5>
                            <hr>
                            <div class="social justify-content-start">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / details end ==== -->
    <!-- ==== gallery slider section start ==== -->
    <section class="gallery-slider section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header--secondary">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="section__header--secondary__content">
                                    <h2>{{ $facility->name }} Gallery</h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="section__header--secondary__cta">
                                    <div class="slider-navigation justify-content-lg-end">
                                        <button class="next-gallery cmn-button cmn-button--secondary">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </button>
                                        <button class="prev-gallery cmn-button cmn-button--secondary">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-slider__wrapper">
            @foreach ($facilityImages as $facilityImage)
                <div class="gallery-slider__single">
                    <img src="{{ asset('assetsFront/images/facility/images/' . $facilityImage) }}" alt="Gallery">
                </div>
            @endforeach
        </div>
    </section>
    <!-- ==== / gallery slider section end ==== -->

    {{-- Related Facility --}}
    {{-- <!-- ==== facility  section start ==== -->
    <section class="section facility--main wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header--secondary">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="section__header--secondary__content">
                                    <h2>More Related Facility</h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="section__header--secondary__cta">
                                    <div class="slider-navigation justify-content-lg-end">
                                        <button class="next-related-facility cmn-button cmn-button--secondary">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </button>
                                        <button class="prev-related-facility cmn-button cmn-button--secondary">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-12">
                    <div class="facility--main__slider">
                        <div class="facility--main__card">
                            <div class="facility--main__card-thumb">
                                <a href="facility-details.html">
                                    <img src="assets/images/facility/one.png" alt="Image">
                                </a>
                            </div>
                            <div class="facility--main__card-content">
                                <h5><a href="facility-details.html">Golf Course</a></h5>
                                <p class="secondary-text">
                                    Lorem Ipsum is simply dummy text of the printing...
                                </p>
                                <a href="facility-details.html" class="facility--main__card-content__cta">View more <i
                                        class="golftio-long-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="facility--main__card">
                            <div class="facility--main__card-thumb">
                                <a href="facility-details.html">
                                    <img src="assets/images/facility/two.png" alt="Image">
                                </a>
                            </div>
                            <div class="facility--main__card-content">
                                <h5><a href="facility-details.html">Expert Trainer</a></h5>
                                <p class="secondary-text">
                                    Lorem Ipsum is simply dummy text of the printing...
                                </p>
                                <a href="facility-details.html" class="facility--main__card-content__cta">View more <i
                                        class="golftio-long-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="facility--main__card">
                            <div class="facility--main__card-thumb">
                                <a href="facility-details.html">
                                    <img src="assets/images/facility/three.png" alt="Image">
                                </a>
                            </div>
                            <div class="facility--main__card-content">
                                <h5><a href="facility-details.html">Fitnes Center</a></h5>
                                <p class="secondary-text">
                                    Lorem Ipsum is simply dummy text of the printing...
                                </p>
                                <a href="facility-details.html" class="facility--main__card-content__cta">View more <i
                                        class="golftio-long-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="facility--main__card">
                            <div class="facility--main__card-thumb">
                                <a href="facility-details.html">
                                    <img src="assets/images/facility/four.png" alt="Image">
                                </a>
                            </div>
                            <div class="facility--main__card-content">
                                <h5><a href="facility-details.html">Golf Club</a></h5>
                                <p class="secondary-text">
                                    Lorem Ipsum is simply dummy text of the printing...
                                </p>
                                <a href="facility-details.html" class="facility--main__card-content__cta">View more <i
                                        class="golftio-long-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="facility--main__card">
                            <div class="facility--main__card-thumb">
                                <a href="facility-details.html">
                                    <img src="assets/images/facility/five.png" alt="Image">
                                </a>
                            </div>
                            <div class="facility--main__card-content">
                                <h5><a href="facility-details.html">Restaurant</a></h5>
                                <p class="secondary-text">
                                    Lorem Ipsum is simply dummy text of the printing...
                                </p>
                                <a href="facility-details.html" class="facility--main__card-content__cta">View more <i
                                        class="golftio-long-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="facility--main__card">
                            <div class="facility--main__card-thumb">
                                <a href="facility-details.html">
                                    <img src="assets/images/facility/six.png" alt="Image">
                                </a>
                            </div>
                            <div class="facility--main__card-content">
                                <h5><a href="facility-details.html">Swimming Pool</a></h5>
                                <p class="secondary-text">
                                    Lorem Ipsum is simply dummy text of the printing...
                                </p>
                                <a href="facility-details.html" class="facility--main__card-content__cta">View more <i
                                        class="golftio-long-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="facility--main__card">
                            <div class="facility--main__card-thumb">
                                <a href="facility-details.html">
                                    <img src="assets/images/facility/seven.png" alt="Image">
                                </a>
                            </div>
                            <div class="facility--main__card-content">
                                <h5><a href="facility-details.html">Locker Room</a></h5>
                                <p class="secondary-text">
                                    Lorem Ipsum is simply dummy text of the printing...
                                </p>
                                <a href="facility-details.html" class="facility--main__card-content__cta">View more <i
                                        class="golftio-long-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="facility--main__card">
                            <div class="facility--main__card-thumb">
                                <a href="facility-details.html">
                                    <img src="assets/images/facility/eight.png" alt="Image">
                                </a>
                            </div>
                            <div class="facility--main__card-content">
                                <h5><a href="facility-details.html">Best Ground</a></h5>
                                <p class="secondary-text">
                                    Lorem Ipsum is simply dummy text of the printing...
                                </p>
                                <a href="facility-details.html" class="facility--main__card-content__cta">View more <i
                                        class="golftio-long-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / facility section end ==== --> --}}


</x-layouts.app>
