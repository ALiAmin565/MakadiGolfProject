<x-layouts.app title="john Sanford">
    @push('styleSheet')
        <style>
            .banner--inner {
                background-image: url('assetsFront/images/banner/her.png');
            }
            figure {
                width: 800px;
                height: 500px;
                overflow: hidden;
                border: 3px solid #fff;
                position: relative;
            }

            figure img {
                position: relative;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                z-index: 10;
                pointer-events: none;
            }
        </style>
    @endpush
    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">John Sanford</li>
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
                        <h2 class="mb-4 mt-2">John Sanford</h2>
                        <div class="facility__popup">
                            <figure id="magnifying_area">
                                <img id="magnifying_img"
                                    src="https://madinatmakadigolf.com/images/slider/GolfBanner2.jpg"
                                    alt="Facility Details">
                            </figure>
                            <div class="play-wrapper">
                            </div>
                        </div>
                        <div class="facility__single mb-4">
                            <p> When it came to the design of this fantastic golf course in the middle of ‘pure desert’
                                along the Red Sea coastline, John & his team created a highly sustainable golf course
                                that was a very challenging project both for the required water consumption and strong
                                winds that affect the region at certain times of the year.

                                To overcome this, a strain of paspalum was planted in the form of Sea Dwarf for the
                                greens and Seashore for the fairways to ensure year round playability over 46Ha. This
                                drought resistant grass can be resistant to high salt tolerances (ppm) and delivers a
                                firm but fair playing surface for all levels of player. This was combined with 1200 date
                                palms & 200 Washingtonians that represent the majority of the superb landscape.

                                John’s team worked the topography to unseen shaping in the region; holes 11 and 16 are
                                testimonies of this with their steep undulations from endless cut and fill that
                                delivered two very exciting signature holes.

                                Sanford Design is no stranger to Egypt and has completed several other projects in the
                                region, but it’s fair to say that John has somewhat of a ‘soft point’ for Egypt’s No1
                                Golf Resort.</p>
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
                                    <li><a href="" class="facility-tab-btn"><i
                                                class="fa-solid fa-angle-right"></i>john Sanford</a></li>
                                    <li><a href="" class="facility-tab-btn"><i
                                                class="fa-solid fa-angle-right"></i>Full Deatils</a></li>
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

    @push('scripts')
        <script>
            var magnifying_area = document.getElementById("magnifying_area");
            var magnifying_img = document.getElementById("magnifying_img");

            magnifying_area.addEventListener("mousemove", function(event) {
                clientX = event.clientX - magnifying_area.offsetLeft
                clientY = event.clientY - magnifying_area.offsetTop

                var mWidth = magnifying_area.offsetWidth
                var mHeight = magnifying_area.offsetHeight
                clientX = clientX / mWidth * 100
                clientY = clientY / mHeight * 100

                //magnifying_img.style.transform = 'translate(-50%,-50%) scale(2)'
                magnifying_img.style.transform = 'translate(-' + clientX + '%, -' + clientY + '%) scale(2)'
            })

            magnifying_area.addEventListener("mouseleave", function() {
                magnifying_img.style.transform = 'translate(-50%,-50%) scale(1)'
            })
        </script>
    @endpush

</x-layouts.app>
