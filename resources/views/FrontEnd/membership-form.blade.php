<x-layouts.app title="Membership">

    @push('styleSheet')
        <style>
            .custom-bullet {
                list-style-type: disc;
                /* You can change 'disc' to 'square' or 'circle' as needed */
                margin-left: 20px;
                /* Adjust the margin as needed to control the spacing */
            }
        </style>
        <style>
            .banner--inner {
                background-image: url('assetsFront/images/banner/her.png');
            }

            .select-dropdown {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 0.375rem 0.75rem;
                font-size: 0.8125rem;
                font-weight: 400;
                line-height: 1;
                color: #212529;
                text-align: center;
                white-space: nowrap;
                background-color: #f7fcf9;
                border: 1px solid #ced4da;
                border-radius: 2px;
                width: 100%;
                /* Adjust the width as needed */
            }

            /* Style for the dropdown arrow indicator (optional) */
            .select-dropdown::after {
                content: '\25BC';
                /* Unicode arrow down character */
                position: absolute;
                right: 10px;
                /* Adjust as needed */
            }

            /* Style for the dropdown list */
            .select-dropdown select {
                appearance: none;
                /* Remove default appearance */
                background: transparent;
                border: none;
                width: 100%;
                cursor: pointer;
                outline: none;
                padding: 0 0.75rem;
            }

            .setPos {
                margin-top: 5% !important;
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
                                <li class="breadcrumb-item">Membership </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->
    <!-- ==== contact form start ==== -->
    <section class="section contact-form wow fadeInUp setPos" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section__header">
                        <h2 class="section__header-title">Membership Registration </h2>
                        <p>If you visit Madinat Makadi Golf resort either for a longer period of time or several times a
                            year you would be wise to consider taking up membership. This could save you a considerable
                            amount of your hard earnt money. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-12">
                    <div class="section__header" style="text-align: justify !important;">
                        <h4>Annual Membership</h4>
                        <p>Single €1590 </p>
                        <p>Family €2620</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section__header" style="text-align: justify !important;">
                        <h4>Your benefits of membership:</h4>
                        <ul>
                            <li><strong>1.</strong> 40% discount on the rates for Golf Carts.</li>
                            <li><strong>2.</strong> Free use of the Driving Range, the super 9-hole Par 3 Executive
                                course, unlimited golf on our wonderful 18-hole championship golf course + range balls
                                for practice on playing days.</li>
                            <li><strong>3.</strong> 10% discount on all merchandise in our Pro Shop.</li>
                            <li><strong>4.</strong> Member/Guest Green Fee. 15% discount from normal rates. Maximum 1
                                per member flight.</li>
                            <li><strong>5.</strong> Family Membership.</li>
                        </ul>
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
                        <form action="{{ route('member-ship.store') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <div class="input-single">
                                    <label for="contactFirstName">Family name</label>
                                    <input type="text" name="familyName" id="contactFirstName"
                                        placeholder="Enter your family name">
                                </div>
                                <div class="input-single">
                                    <label for="contactLastName">Fisrt name</label>
                                    <input type="text" name="firstName" id="contactLastName"
                                        placeholder="Enter your first name">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactLastName">Present home address</label>
                                    <input type="text" name="presentHomeAddress" id="contactLastName"
                                        placeholder="Enter your home address">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactPhone">Passport No.</label>
                                    <input type="text" name="passportNumber" id="contactPhone"
                                        placeholder="Enter your passport number">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactEmail">Email address</label>
                                    <input type="email" name="emailAddress" id="contactEmail"
                                        placeholder="Enter your email">
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-single">
                                    <label for="contactPhone">Cell number</label>
                                    <input type="text" name="cellNumber" id="contactPhone"
                                        placeholder="Enter your phone">
                                </div>
                                <div class="input-single">
                                    <label for="contactPhone">Home number</label>
                                    <input type="text" name="homeNumber" id="contactPhone"
                                        placeholder="Enter your phone">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactPhone">Membership type</label>
                                    <div class="select-dropdown">
                                        <select name="membershipType" id="contactPhone">
                                            <option value="" disabled> Select Type</option>
                                            <option value="Individual">Single (€1590)</option>
                                            <option value="Family">Family (€2620)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group" style="justify-content: space-around;">
                                <div style="display: flex;">
                                    <label for="radio1" style="margin: 15px;">Resident</label>
                                    <input type="radio" id="radio1" name="residentOrTourist" value="Resident"
                                        class="checkbox-design">
                                </div>
                                <div style="display: flex;">
                                    <label for="radio2" style="margin: 15px;">Tourist</label>
                                    <input type="radio" id="radio2" name="residentOrTourist" value="Tourist"
                                        class="checkbox-design">
                                </div>
                            </div>


                            <div class="input-group" id="residenceAddress" style="display: none;">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="homeAddress">Address</label>
                                    <input type="text" name="addressResidence" id="homeAddress"
                                        placeholder="Enter your home address">
                                </div>
                            </div>

                            <div class="input-group" id="hotelNameInput" style="display: none;">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactLastName">Hotel name</label>
                                    <input type="text" name="hotelName" id="contactLastName"
                                        placeholder="Enter your hotel name">
                                </div>
                            </div>

                            <div class="section__cta">
                                <button type="submit" class="cmn-button">Join us</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            {{-- <div class="row justify-content-center mt-4"> --}}
            <div class="contact-form__inner mt-4">
                <div class="col-lg-12">
                    <div class="section__header"
                        style="margin-bottom: 0px !important;text-align: justify !important;">
                        <ul class="custom-bullet">
                            <li>A married couple including two children under 16 years of age. Any additional
                                child
                                under 18 receives a 65% discount.</li>
                            <li>Subject to terms and conditions and local law.</li>
                            <li>The membership is valid for 1 calendar year.</li>
                        </ul>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
    <!-- ==== / contact form end ==== -->

    @push('scripts')
        <script>
            const checkbox1 = document.getElementById("radio1");
            const checkbox2 = document.getElementById("radio2");
            const residenceAddress = document.getElementById('residenceAddress');
            const hotelNameInput = document.getElementById('hotelNameInput');

            checkbox1.addEventListener('change', function() {
                if (this.checked) {
                    residenceAddress.style.display = 'block';
                    hotelNameInput.style.display = 'none';
                } else {
                    residenceAddress.style.display = 'none';
                }
            });

            checkbox2.addEventListener('change', function() {
                if (this.checked) {
                    hotelNameInput.style.display = 'block';
                    residenceAddress.style.display = 'none';
                } else {
                    hotelNameInput.style.display = 'none';
                }
            });
        </script>
    @endpush
</x-layouts.app>
