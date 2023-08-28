<x-layouts.app>
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
                        <h2>Gallery</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
            {{-- <div class="row section__row align-items-center">
                <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                    <div class="gallery__thumb">
                        <div class="gallery__thumb-single">
                            <img src="assetsfRONT/images/gallery/images/1693217353_download.jpeg" alt="Image">
                        </div>
                        <div class="gallery__thumb-single">
                            <img src="assetsfRONT/images/gallery/images/1693217353_download.jpeg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 section__col d-none d-lg-block">
                    <div class="gallery__thumb">
                        <div class="gallery__thumb-single">
                            <img src="assetsfRONT/images/gallery/images/1693217353_download.jpeg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                    <div class="gallery__thumb">
                        <div class="gallery__thumb-single">
                            <img src="assetsfRONT/images/gallery/images/1693217353_download.jpeg" alt="Image">
                        </div>
                        <div class="gallery__thumb-single">
                            <img src="assetsfRONT/images/gallery/images/1693217353_download.jpeg" alt="Image">
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row section__row align-items-center">
                @foreach ($groupedGallery as $galleryChunk)
                    <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                        <div class="gallery__thumb">
                            <div class="gallery__thumb-single">
                                @foreach ($galleryChunk as $image)
                                    <img src="assetsFront/images/gallery/images/{{ $image->image }}"
                                        alt="{{ $image->image }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- ==== / gallery section end ==== -->
</x-layouts.app>
