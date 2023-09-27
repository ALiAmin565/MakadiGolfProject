<x-layouts.app>
    @push('styleSheet')
        <style>
            .banner--inner {
                background-image: url('assetsFront/images/banner/her.png');
            }

            .zoomable-image {
                overflow: hidden;
                position: relative;
            }

            .zoomable-image img {
                transition: transform 0.3s;
            }

            .zoomable-image:hover img {
                transform: scale(1.1);
            }

            .selected {
                border: 3px solid green !important;
                border-radius: 8px;
            }
        </style>
    @endpush
    <!-- ==== banner start ==== -->
    <section class="banner--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner--inner__content">
                        <h2>Gallery</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('FrontEnd.home') }}">Home</a></li>
                                <li class="breadcrumb-item">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->
    <!-- ==== gallery section start ==== -->
    <div class="section gallery wow fadeInUp text-center" data-wow-duration="0.4s">
        <div class="container">
            <div class="row section__row align-items-center">
                @foreach ($galleryGroup as $gallery)
                    <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                        <div class="gallery__thumb">
                            <div class="gallery__thumb-single">
                                <div class="zoomable-image">
                                    <img src="assetsFront/images/gallery/images/{{ $gallery->image }}"
                                        alt="{{ $gallery->image }}" style="height: 250px; object-fit:cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center section__cta">
                <ul class="pagination">
                    @if ($galleryGroup->onFirstPage())
                        <li class="disabled">
                            <button><i class="fa-solid fa-angle-left"></i></button>
                        </li>
                    @else
                        <li>
                            <a href="{{ $galleryGroup->previousPageUrl() }}"><i class="fa-solid fa-angle-left"></i></a>
                        </li>
                    @endif
                    @php
                        $currentPage = $galleryGroup->currentPage();
                        $lastPage = $galleryGroup->lastPage();
                        $startPage = max(1, $currentPage - 1);
                        $endPage = min($lastPage, $startPage + 2);
                    @endphp
                    @for ($i = $startPage; $i <= $endPage; $i++)
                        <li class="{{ $i === $currentPage ? 'selected' : '' }}">
                            <a href="{{ $galleryGroup->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    @if ($currentPage < $lastPage)
                        <li>
                            <a href="{{ $galleryGroup->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></a>
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
    <!-- ==== / gallery section end ==== -->
</x-layouts.app>
