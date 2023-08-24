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
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner--inner__breadcrumb d-flex justify-content-start justify-content-md-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                        <h2 class="section__header-title">Contact Us</h2>
                        <p>
                            Golftio Sports Club is a golf club with a history that goes back
                            to XX century. From a cricket club to soccer tournaments,
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
                            <p class="secondary-text">(907) 555-0101</p>
                            <p class="secondary-text">(252) 555-0126</p>
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
                            <p class="secondary-text">sara.cruz@example.com</p>
                            <p class="secondary-text">bill.sanders@example.com</p>
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
                            <p class="secondary-text">Royal Ln. Mesa, New Jersey 45463</p>
                            <p class="secondary-text">
                                Thornridge Cir. Shiloh, Hawaii 81063
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
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('subscribe') }}" method="post">
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
                                    placeholder="I would like to get in touch with you..."></textarea>
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
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.400800712204!2d31.01155777547872!3d30.02535727493323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585bd743593113%3A0x6a9c2b3c2bbc4ac2!2sTravco%20Travel%20Company%20of%20Egypt!5e0!3m2!1sen!2seg!4v1692867765092!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" width="100" height="800" style="border:0;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ==== / google map end ==== -->

</x-layouts.app>
