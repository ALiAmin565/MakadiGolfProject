<!-- ==== footer start ==== -->
<footer class="footer">
    <div class="container">
        <div class="row section__row">
            <div class="col-md-6 col-lg-4 col-xl-3 section__col">
                <div class="footer__single">
                    <a href="index.html">
                        <img src="assetsFront/images/logo-light.png" alt="Logo">
                    </a>
                    <div class="footer__single-content">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry...
                        </p>
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
            </div>
            <div class="col-md-6 col-lg-2 col-xl-3 section__col">
                <div class="footer__single">
                    <h5>Quick Links</h5>
                    <div class="footer__single-content">
                        <ul>
                            <li><a href="{{ route('FrontEnd.home') }}">Home</a></li>
                            <li><a href="{{ route('FrontEnd.aboutUs') }}">About Us</a></li>
                            <li><a href="{{ route('FrontEnd.facility') }}">Facility</a></li>
                            <li><a href="{{ route('FrontEnd.gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('FrontEnd.contactUs') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 section__col">
                <div class="footer__single">
                    <h5>Address</h5>
                    <div class="footer__single-content">
                        <div class="footer__single-content__group">
                           {!! $contactUs->numbers !!}
                        </div>
                        <div class="footer__single-content__group">
                           {!! $contactUs->emails !!}
                        </div>
                        <div class="footer__single-content__group">
                           {!! $contactUs->location !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 section__col">
                <h5>Newsletter</h5>
                <div class="footer__single">
                    <div class="footer__single-content">
                        <p>Subscribe our newsletter to get our latest update & news</p>
                        <form action="#" method="post" name="newsletterForm">
                            <div class="newsletter">
                                <input type="email" name="news-mail" id="newsMail" placeholder="Your email address"
                                    required>
                                <button type="submit">
                                    <i class="golftio-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <p>
                                Copyright &copy; <span id="copyYear"></span> Golftio. All
                                Rights Reserved
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><a href="support.html">Support</a></li>
                                <li><a href="terms-conditions.html">Terms of Use</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==== / footer end ==== -->
