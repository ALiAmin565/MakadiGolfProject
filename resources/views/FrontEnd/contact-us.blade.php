<x-layouts.app title="ContactUs">
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
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('FrontEnd.home') }}">Home</a></li>
                                <li class="breadcrumb-item"> Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->

    <!-- ==== contact section start ==== -->
    <section class="section contact wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h2 class="section__header-title">{{ $contactUs->title }}</h2>
                        <p class="secondary-text">
                            {!! $contactUs->description !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center section__row">
                <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                    <div class="contact__item">
                        <div class="contact__item-thumb">
                            <i class="golftio-phone"></i>
                        </div>
                        <div class="contact__item-content">
                            <h5>Call Now</h5>
                            <p class="secondary-text">
                                {!! $contactUs->numbers !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                    <div class="contact__item">
                        <div class="contact__item-thumb">
                            <i class="golftio-email"></i>
                        </div>
                        <div class="contact__item-content">
                            <h5>Email Address</h5>
                            <p class="secondary-text">
                                {!! $contactUs->emails !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4 section__col">
                    <div class="contact__item">
                        <div class="contact__item-thumb">
                            <i class="golftio-pin-location"></i>
                        </div>
                        <div class="contact__item-content">
                            <h5>Location</h5>
                            <p>
                                {!! $contactUs->location !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / contact section end ==== -->

    <!-- ==== contact form start ==== -->
    <section class="section contact-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h2 class="section__header-title">Get in touch with us.</h2>
                        <p>Fill up the form and our team will get back to you within 24 hours</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="contact-form__inner">
                        @if ($errors->any())
                            <div class="alert alert-danger text-center">
                                <i class="fa-solid fa-envelope"></i>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success text-center">
                                <i class="fa-solid fa-envelope"></i> &nbsp; {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('user.contactUs') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <div class="input-single">
                                    <label for="contactFirstName">First name</label>
                                    <input type="text" name="firstname" id="contactFirstName" required
                                        placeholder="Enter your first name">
                                </div>
                                <div class="input-single">
                                    <label for="contactLastName">Last name</label>
                                    <input type="text" name="lastname" id="contactLastName" required
                                        placeholder="Enter your last name">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single">
                                    <label for="contactEmail">Email</label>
                                    <input type="email" name="email" id="contactEmail" required
                                        placeholder="Enter your email">
                                </div>
                                <div class="input-single">
                                    <label for="contactPhone">Phone</label>
                                    <input type="text" name="number" id="contactPhone" required
                                        placeholder="Enter your phone">
                                </div>
                            </div>
                            <div class="input-single">
                                <label for="contactMessage">Message</label>
                                <textarea name="message" id="contactMessage" cols="30" rows="4"
                                    placeholder="I would like to get in touch with you..." required></textarea>
                            </div>
                            <div class="section__cta">
                                <button type="submit" class="cmn-button">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / contact form end ==== -->

    <!-- ==== google map start ==== -->
    <div class="map-wrapper">
        <iframe src="{{ $contactUs->google_map_link }}" width="600" height="450" style="border:0;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            width="100" height="800" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ==== / google map end ==== -->
    <div class="section__cta mb-5">
        <a class="cmn-button"
            href="https://www.google.com/maps?ll=26.984045,33.892335&z=6&t=m&hl=en&gl=EG&mapclient=embed&cid=3795213861599852084"
            target="_blank" title="Google-Map">Location</a>
    </div>

</x-layouts.app>
