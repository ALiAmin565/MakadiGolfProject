<x-layouts.app title="john Sanford">
    @push('styleSheet')
        <style>
            .selectHole {
                color: #0e7a31 !important;
            }

            .social a.selectHole:hover {
                background-color: #0e7a31;
                color: white !important;
            }

            .hole-card {
                display: flex;
                background-color: #ffffff;
                padding: 30px;
                -webkit-box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.08);
                box-shadow: -6px 5px 20px 10px rgba(0, 0, 0, 0.08);
                border-radius: 5px;
                margin: 30px 0px;
            }
        </style>
        <style>
            /* Add styles for the image popup */
            .popup {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.7);
                z-index: 1000;
                text-align: center;
            }

            .popup-content {
                position: absolute;
                top: 60%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: #fff;
                padding: 20px;
                width: 70%;
                border-radius: 10px;
                height: 90%;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                z-index: 10000;
            }

            .close-popup {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 24px;
                cursor: pointer;
            }

            .popup-image {
                max-width: 90%;
                max-height: 90%;
            }

            /* Styles to show the popup */
            .popup.active {
                display: block;
            }

            .overlay {
                position: absolute;
                top: 20%;
                right: 0;
                width: 35%;
                height: 80%;
                background: rgba(0, 0, 0, 0.7);
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 10px;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .overlay:hover {
                opacity: 1;
            }

            .overlay i {
                color: #fff;
                font-size: 24px;
                cursor: pointer;
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
                                <li class="breadcrumb-item">Full Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->

    <!-- ==== details start ==== -->
    <section class="section details" id="holeSection">
        <div class="container">
            <div class="row section__row">
                <div class="col-12 col-xl-12 section__col">
                    <div class="facility__details">
                        <h2 class="mb-4 mt-2">Hole By Hole</h2>

                        <div class="social justify-content-start">
                            @foreach ($holes as $hole)
                                <a href="{{ route('frontEnd.singleDetailsJhonSanford', $hole->id) }}"
                                    class="selectHole">
                                    {{ $loop->iteration }}
                                </a>
                            @endforeach
                        </div>

                        <div class="row hole-card">
                            <div class="col-12 col-xl-8">
                                <div>
                                    <img src="{{ asset('assetsFront/images/holes/' . $holeSingle->logo) }}"
                                        alt="{{ $holeSingle->title }}" style="height: 120px;object-fit: contain;">
                                    <h2>{{ $holeSingle->title }}<br>
                                        <div>{!! $holeSingle->description !!}
                                        </div>
                                    </h2>
                                </div>
                            </div>
                            {{-- <div class="col-12 col-xl-4">
                                <img src="{{ asset('assetsFront/images/holes/' . $holeSingle->image) }}"
                                    alt="{{ $holeSingle->title }}">
                            </div> --}}
                            <div class="col-12 col-xl-4">
                                <div class="image-container">
                                    <img src="{{ asset('assetsFront/images/holes/' . $holeSingle->image) }}"
                                        alt="{{ $holeSingle->title }}">
                                    <div class="overlay">
                                        <i class="fas fa-search-plus"></i> <!-- You can use any icon you prefer -->
                                    </div>
                                </div>
                            </div>
                            <div class="popup">
                                <div class="popup-content">
                                    <span class="close-popup">&times;</span>
                                    <img src="" alt="" class="popup-image">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="col-12 col-xl-4 section__col">
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
                            <h5>Golf Course</h5>
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
                </div> --}}
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



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const overlays = document.querySelectorAll('.overlay');
            const popup = document.querySelector('.popup');
            const popupImage = document.querySelector('.popup-image');
            const closePopup = document.querySelector('.close-popup');

            overlays.forEach(function(overlay) {
                overlay.addEventListener('click', function() {
                    // Get the larger image URL
                    const imageUrl = this.previousElementSibling.src;

                    // Set the image source in the popup
                    popupImage.src = imageUrl;

                    // Show the popup
                    popup.classList.add('active');
                });
            });

            // Close the popup when the close button is clicked
            closePopup.addEventListener('click', function() {
                popup.classList.remove('active');
            });

            // Close the popup when the background is clicked
            popup.addEventListener('click', function(event) {
                if (event.target === this) {
                    popup.classList.remove('active');
                }
            });
        });
    </script>


</x-layouts.app>
