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
            /* Add this to your existing stylesheet or create a new one */
            .popup-container {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.8);
                justify-content: center;
                align-items: center;
                /* z-index: 999; */
                /* Set a high z-index to ensure the popup appears over other elements */
            }


            .popup-content {
                position: relative;
            }

            .popup-image {
                max-width: 25%;
                max-height: 25%;
                display: block;
                margin: auto;
            }

            .close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                background: none;
                border: none;
                color: #fff;
                font-size: 24px;
                cursor: pointer;
                outline: none;
            }

            /* Add overlay styles */
            .popup-container:hover {
                background: rgba(0, 0, 0, 0.8);
            }

            .no-scroll {
                overflow: hidden;
            }

            /* on mobile */
            @media (max-width: 600px) {
                .popup-image {
                    max-width: 50%;
                    max-height: 75%;
                }
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
                                <li class="breadcrumb-item"><a href="{{ route('FrontEnd.home') }}">Home</a></li>
                                <li class="breadcrumb-item">Golf Course</li>
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
            <h2 class="mb-4 mt-2 text-center">Holes</h2>
            <div class="section gallery wow fadeInUp text-center" data-wow-duration="0.4s">
                <div class="container">
                    <div class="row section__row align-items-center">
                        <div class="row">
                            @foreach ($holes as $hole)
                                <div class="col-6 col-md-3 mb-3">
                                    <img src="{{ asset('assetsFront/images/holes/' . $hole->image) }}"
                                        class="img-fluid popup-trigger" alt="Hole Image" style="height: 250px">
                                </div>
                            @endforeach
                        </div>
                        <!-- Popup Container -->
                        <div class="popup-container">
                            <div class="popup-content">
                                <img src="" class="popup-image" alt="Popup Image">
                                <button class="close-btn">&times;</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row section__row">
                <div class="col-12 col-xl-12 section__col">
                    <div class="facility__details">
                        <h2 class="mb-4 mt-2">Hole By Hole</h2>
                        <div class="social justify-content-start">
                            @foreach ($holes as $hole)
                                <?php
                                $currentURL = Request::url();
                                $urlParts = explode('/', $currentURL);
                                $urlNumber = end($urlParts);
                                ?>

                                <a href="{{ route('frontEnd.singleDetailsJohnSanford', $hole->id) }}" class="selectHole"
                                    style="background-color: {{ $urlNumber == $hole->id ? 'green' : 'transparent' }};color:{{ $urlNumber == $hole->id ? 'white !important' : 'green !important' }} ">
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
                                    {{-- <div class="overlayHole">
                                        <i class="fas fa-search-plus"></i> <!-- You can use any icon you prefer -->
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="popup">
                                <div class="popup-content">
                                    <span class="close-popup">&times;</span>
                                    <img src="" alt="" class="popup-image">
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
                <div class="col-12 col-xl-4 section__col w-100">
                    <div class="nav__uncollapsed">
                        <h2 class="mb-4 mt-2 ">Factsheet & Rating</h2>
                        <div class="nav__uncollapsed-item d-md-flex justify-content-around">
                            <a href="{{ route('download-pdfs', ['filename' => $pdf->pdf_fact_sheet]) }}"
                                class="cmn-button cmn-button--secondary zIndexStyle" download>
                                Download Factsheet
                            </a>

                            <a href="{{ route('download-pdfs', ['filename' => $pdf->pdf_rating]) }}"
                                class="cmn-button cmn-button--secondary zIndexStyle" download>
                                Download Rating
                            </a>

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

    <script>
        // Add this to your existing JavaScript file or within a script tag in your Blade file

        document.addEventListener('DOMContentLoaded', function() {
            const popupContainer = document.querySelector('.popup-container');
            const popupImage = document.querySelector('.popup-image');
            const closeBtn = document.querySelector('.close-btn');
            const popupTriggers = document.querySelectorAll('.popup-trigger');
            const body = document.querySelector('body');

            popupTriggers.forEach(function(trigger) {
                trigger.addEventListener('click', function() {
                    const imagePath = trigger.getAttribute('src');
                    popupImage.setAttribute('src', imagePath);
                    popupContainer.style.display = 'flex';
                    body.classList.add('no-scroll'); // Add class to body to disable scrolling
                });
            });

            closeBtn.addEventListener('click', function() {
                popupContainer.style.display = 'none';
                body.classList.remove('no-scroll'); // Remove class to enable scrolling
            });
        });
    </script>

</x-layouts.app>
