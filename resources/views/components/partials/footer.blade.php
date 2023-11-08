<!-- ==== footer start ==== -->
<footer class="footer">
    <div class="container">
        <div class="row section__row">
            <div class="col-md-6 col-lg-4 col-xl-3  mb-3">
                <div class="footer__single">
                    <a href="{{ route('FrontEnd.home') }}">
                        <img src="{{ asset('assetsFront/images/Madinat_makadi_Golf_logo.png') }}" alt="Logo"
                            style="width:60% !important">
                    </a>
                    <div class="footer__single-content">
                        <p>
                            Designed by John Sanford of SGD, Madinat Makadi Resort, Golf & Spa spreads over a vast 1.4
                            million square meters and includes a world acclaimed 18-hole championship golf course & a
                            9-hole par 3 executive course, voted Egypt’s No.1 Golf Resort 2014 - 2019 (World Golf
                            Awards)
                        </p>
                        <div class="social">
                            <a href="https://www.facebook.com/MAKADIGOLF/?fref=ts&ref=br_tf" target="_blank">
                                <i class="fa-brands fa-facebook-f" title="Facebook"></i>
                            </a>
                            <a href="https://instagram.com/madinatmakadigolf?igshid=OGQ5ZDc2ODk2ZA==" target="_blank">
                                <i class="fa-brands fa-square-instagram" title="Instagram"></i>
                            </a>
                            <a
                                href="https://www.tripadvisor.com/Attraction_Review-g297549-d7680790-Reviews-Madinat_Makadi_Golf-Hurghada_Red_Sea_and_Sinai.html" target="_blank">
                                <i class="fa-solid fa-glasses" title="Tripadvisor"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xl-3  mt-1 mb-3">
                <div class="footer__single">
                    <h5>Quick Links</h5>
                    <div class="footer__single-content">
                        <ul>
                            <li><a href="{{ route('FrontEnd.home') }}">Home</a></li>
                            <li><a href="{{ route('FrontEnd.aboutUs') }}">About Us</a></li>
                            <li><a href="{{ route('FrontEnd.facility') }}">Facilites</a></li>
                            <li><a href="{{ route('FrontEnd.johnSanford') }}">Golf</a></li>
                            <li><a href="{{ route('FrontEnd.gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('FrontEnd.contactUs') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3  mt-1 mb-3">
                <div class="footer__single">
                    <div class="row">
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

                    <div class="row mt-5">
                        <h5>Club Opening Hours</h5>
                        <div class="footer__single-content">
                            <div class="footer__single-content__group" style="color:white;">
                                Open 7:00 AM 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3  mb-3">
                {{-- <h5>Newsletter</h5>
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
                </div> --}}
                <div class="mb-4">
                    <div id="dateInfo" class="date-info"></div>
                </div>
                <div>
                    <div class="elfsight-app-bdf7f867-4688-454b-a5e7-be5fa7f141bc " data-elfsight-app-lazy></div>
                    <div>
                        <p
                            style="width:100%; height: 50px;background: #05441a;position: relative;z-index: 234564484;top: -55px;">
                        </p>
                    </div>
                </div>

                <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                <script>
                    function updateDateInfo() {
                        var dateElement = document.getElementById('dateInfo');
                        var currentDate = new Date();

                        var dayOfWeek = currentDate.toLocaleDateString('en-US', {
                            weekday: 'long'
                        });
                        var dayOfMonth = currentDate.getDate();
                        var month = currentDate.toLocaleDateString('en-US', {
                            month: 'long'
                        });
                        var year = currentDate.getFullYear();

                        var dateInfo =
                            `<span class="day-color d-block mb-3">${dayOfWeek}</span>  <br> ${month} ${dayOfMonth}, ${year}`;

                        dateElement.innerHTML = dateInfo;
                    }

                    // Call the function to update the date information.
                    updateDateInfo();
                </script>
            </div>
            <div class="team__slider--secondary">
                @foreach ($awards as $award)
                    <div class="">
                        <div class="team__slider-card__thumb" style="text-align: center;">
                            <img src="{{ asset('assetsFront/images/awards/' . $award) }}" alt="Team"
                                style="height: 10% !important;max-width: 80% !important;">
                        </div>
                    </div>
                @endforeach
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
