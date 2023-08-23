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
                        <h2>Facility</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Facility
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->
    <!-- ==== facility  section start ==== -->
    <section class="section facility--main wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row section__row justify-content-center">
                @foreach ($facilities as $facility)
                    <div class="col-sm-10 col-md-6 col-lg-4 col-xxl-3 section__col">
                        <div class="facility--main__card">
                            <div class="facility--main__card-thumb">
                                <a href="facility-details.html">
                                    <img src='assetsFront/images/facility/{{ $facility->image }}' alt="Image"
                                        style="width: 100%;
                                        height: 150px;
                                        object-fit: contain;">
                                </a>
                            </div>
                            <div class="facility--main__card-content">
                                <h5><a href="facility-details.html">{{ $facility->name }}</a></h5>
                                @php
                                    $desc = strip_tags($facility->description); // Strip HTML tags.
                                    $facilityDesc = strlen($desc) > 15 ? substr($desc, 0, 15) . '...' : $desc;
                                 @endphp
                                <p class="secondary-text">
                                    {{ $facilityDesc }}
                                </p>
                                <a href="{{ route('FrontEnd.facilityDetails', $facility->id) }}"
                                    class="facility--main__card-content__cta">View more <i
                                        class="golftio-long-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 justify-content-center section__cta">
                    <ul class="pagination">
                        @if ($facilities->onFirstPage())
                            <li class="disabled">
                                <button><i class="fa-solid fa-angle-left"></i></button>
                            </li>
                        @else
                            <li>
                                <a href="{{ $facilities->previousPageUrl() }}"><i
                                        class="fa-solid fa-angle-left"></i></a>
                            </li>
                        @endif

                        @php
                            $currentPage = $facilities->currentPage();
                            $lastPage = $facilities->lastPage();
                            $startPage = max(1, $currentPage - 1);
                            $endPage = min($lastPage, $startPage + 2);
                        @endphp

                        @for ($i = $startPage; $i <= $endPage; $i++)
                            <li>
                                <a href="{{ $facilities->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        @if ($currentPage < $lastPage)
                            <li>
                                <a href="{{ $facilities->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></a>
                            </li>
                        @else
                            <li class="disabled">
                                <button><i class="fa-solid fa-angle-right"></i></button>
                            </li>
                        @endif
                    </ul>
                </div>




            </div>
        </div>
    </section>
    <!-- ==== / facility section end ==== -->

    <!-- ==== join club section start ==== -->
    <section class="join--tertiary bg-img" data-background="assetsFront/images/join-bg-three.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-2 col-xl-6 offset-xl-6">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">Join Club</h5>
                        <h2 class="section__content-title">Join our club</h2>
                        <div class="join-club__form">
                            <form action="#" method="post" name="joinClubForm">
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="text" name="user-name" id="userName" required
                                            placeholder="Your Name *">
                                    </div>
                                    <div class="input-single">
                                        <input type="text" name="user-phone" id="userPhone" required
                                            placeholder="Your Phone *">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="email" name="user-email" id="userEmail" required
                                            placeholder="Your Email *">
                                    </div>
                                    <div class="input-single">
                                        <input type="text" name="user-url" id="userUrl" placeholder="Website URL ">
                                    </div>
                                </div>
                                <div class="input-single">
                                    <textarea name="user-message" id="userMessage" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="cmn-button">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / join club section end ==== -->

    <!-- ==== sponsor section start ==== -->
    <div class="sponsor wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sponsor__inner">
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/two.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/three.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/four.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/five.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/six.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/one.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/one.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/two.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/three.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/four.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/five.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/six.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assetsFront/images/sponsor/one.png" alt="Sponsor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / sponsor section end ==== -->
</x-layouts.app>
