<x-layouts.app title="Membership">

    @push('styleSheet')
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
                                <li class="breadcrumb-item">Membership  </li>
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
                <div class="col-lg-7">
                    <div class="section__header">
                        <h2 class="section__header-title">Membership Registration </h2>
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
                        <form action="{{ route('member-ship.store') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <div class="input-single">
                                    <label for="contactFirstName">Family Name</label>
                                    <input type="text" name="familyName" id="contactFirstName" required
                                        placeholder="Enter your family name">
                                </div>
                                <div class="input-single">
                                    <label for="contactLastName">Fisrt name</label>
                                    <input type="text" name="firstName" id="contactLastName" required
                                        placeholder="Enter your first name">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactLastName">Present home address</label>
                                    <input type="text" name="presentHomeAddress" id="contactLastName" required
                                        placeholder="Enter your home address">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactPhone">Passport No.</label>
                                    <input type="text" name="passportNumber" id="contactPhone" required
                                        placeholder="Enter your passport number">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactEmail">Email Address</label>
                                    <input type="email" name="emailAddress" id="contactEmail" required
                                        placeholder="Enter your email">
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-single">
                                    <label for="contactPhone">cellNumber</label>
                                    <input type="text" name="cellNumber" id="contactPhone" required
                                        placeholder="Enter your phone">
                                </div>
                                <div class="input-single">
                                    <label for="contactPhone">homeNumber</label>
                                    <input type="text" name="homeNumber" id="contactPhone" required
                                        placeholder="Enter your phone">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactPhone">Membership Type</label>
                                    <div class="select-dropdown">
                                        <select name="membershipType" id="contactPhone" required>
                                            <option value="" disabled> Select Type</option>
                                            <option value="Individual">One</option>
                                            <option value="Family">Two</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group" style="    justify-content: space-around;">
                                <div style="display: flex;">
                                    <label for="checkbox1" style="margin: 15px;">Resident</label>
                                    <input type="checkbox" id="checkbox1" name="residentOrTourist[]" value="Resident"
                                        class="checkbox-design">
                                </div>
                                <div style="display: flex;">
                                    <label for="checkbox2" style="margin: 15px;">Tourist</label>
                                    <input type="checkbox" id="checkbox2" name="residentOrTourist[]" value="Tourist"
                                        class="checkbox-design">
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactLastName">hotelName</label>
                                    <input type="text" name="hotelName" id="contactLastName" required
                                        placeholder="Enter your hotel name">
                                </div>
                            </div>
                            <div class="section__cta">
                                <button type="submit" class="cmn-button">Join Us</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / contact form end ==== -->

    @push('scripts')
        <script>
            const checkbox1 = document.getElementById("checkbox1");
            const checkbox2 = document.getElementById("checkbox2");

            checkbox1.addEventListener("click", function() {
                checkbox2.checked = !checkbox1.checked;
            });

            checkbox2.addEventListener("click", function() {
                checkbox1.checked = !checkbox2.checked;
            });
        </script>
    @endpush
</x-layouts.app>
