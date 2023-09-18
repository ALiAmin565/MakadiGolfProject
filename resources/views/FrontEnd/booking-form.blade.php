<x-layouts.app title="Booking">

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
                right: 55%;
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


            .select-dropdown-number {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                /* padding: 0.375rem 0.75rem; */
                font-size: 0.8125rem;
                font-weight: 400;
                line-height: 1;
                color: #212529;
                text-align: center;
                white-space: nowrap;
                background-color: #f7fcf9;
                border: 1px solid #ced4da;
                border-radius: 2px;
                width: 60%;
            }


            .setPos {
                margin-top: 5% !important;
            }

            .titleCheckBox {
                background: #f7fcf9;
                display: block;
                text-align: center;
            }

            .totalPriceCheckBox {
                position: relative;
                top: -20%;
                left: 80%;
            }

            input[type="number"].enter-number {
                width: 8% !important;
                color: white;
                text-align: center;
                background: #9fddb3;
                border-radius: 15%;
                margin: 0 5%;
            }

            input[type="number"].enter-number-disabled {
                background: #0e7a31;
            }

            .add-player-button,
            .add-datetime-button {
                display: block;
                margin: 0 auto;
            }

            .remove-player-button,
            .remove-datetime-button {
                display: block;
                margin: 2% auto;
                background: red;
                padding: 2%;
                color: white;
                border-radius: 10px;
            }

            @media (max-width: 1024px),
            (max-width: 1280px),
            (max-width: 991px) {
                .totalPriceCheckBox {
                    position: relative;
                    top: 0%;
                    left: 0%;
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
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Booking</li>
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
                        <h2 class="section__header-title">Tee Time Package Request</h2>
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
                        <form action="{{ route('book.store') }}" method="post">
                            @csrf
                            <label for="contactPhone" class="titleCheckBox">Guest Information </label>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactLastName">Fisrt name</label>
                                    <input type="text" name="firstName" id="contactLastName" required
                                        placeholder="Enter your first name">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="contactFirstName">Surname</label>
                                    <input type="text" name="surname" id="contactFirstName" required
                                        placeholder="Enter your family name">
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
                                    <label for="contactPhone">Choose Hotel</label>
                                    <div class="select-dropdown">
                                        <select name="hotelName" id="contactPhone" required>
                                            <option value="" disabled> Select Type</option>
                                            @foreach ($hotels as $hotel)
                                                <option value="{{ $hotel->title }}">{{ $hotel->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label for="contactPhone" class="titleCheckBox">Championship Course Par 72 designed by John
                                Sanford </label>
                            <div class="input-group">
                                <div class="w-100">
                                    <div>
                                        <label for="checkbox1">9 Hole</label>
                                        <input type="checkbox" id="checkbox1" name="hole_9" value="20"
                                            class="checkbox-design">
                                        <span id="price10"></span>
                                    </div>
                                    <div>
                                        <label for="checkbox2">18 Hole</label>
                                        <input type="checkbox" id="checkbox2" name="hole_18" value="40"
                                            class="checkbox-design">
                                        <span id="price11"></span>
                                    </div>
                                </div>
                            </div>
                            <label for="contactPhone" class="titleCheckBox">Hire Equipments </label>
                            <div class="input-group">
                                <div class="w-100">
                                    <x-check-box-equipment id="drivingRange" value="15" title="Driving Range"
                                        priceId="price1" />
                                    <x-check-box-equipment id="rangeBalls" value="15"
                                        title="Range Balls Basket <small>(34 balls)</small>" priceId="price2" />
                                    <x-check-box-equipment id="golfClubs9" value="15"
                                        title="Quality brand golf clubs <small>(9 holes per
                                      round)</small>"
                                        priceId="price3" />
                                    <x-check-box-equipment id="golfClubs18" value="15"
                                        title="Quality brand golf clubs <small>(18 holes per
                                        round)</small>"
                                        priceId="price4" />
                                    <x-check-box-equipment id="golfCar9" value="15"
                                        title="Golf car 9 holes <small>(championship course)</small> per
                                        round"
                                        priceId="price5" />
                                    <x-check-box-equipment id="golfCar18" value="15"
                                        title="Golf car 18 holes <small>(championship course)</small>
                                        per round"
                                        priceId="price6" />
                                    <x-check-box-equipment id="golfCar3x18" value="15"
                                        title="Golf Car 3 x 18 Holes" priceId="price7" />
                                    <x-check-box-equipment id="golfCar5x18" value="15"
                                        title="Golf Car 5 x 18 Holes" priceId="price8" />
                                    <x-check-box-equipment id="golfCar3x9" value="15"
                                        title="Golf Car 3 x 9 Holes" priceId="price9" />

                                </div>
                            </div>
                            <label for="contactPhone" class="titleCheckBox">Golf Clubs </label>
                            <div class="input-group">
                                <div class="w-100">
                                    <div>
                                        <label for="menRightHand">Men's Right Hand</label>
                                        <input type="checkbox" id="menRightHand" class="checkbox-design"
                                            value="0"
                                            onchange="toggleNumberInput('menRightHand', 'menRightHandNumber' , 'menRightHandMessage')">
                                        <input type="number" id="menRightHandNumber" name="menRightHandNumber"
                                            class="enter-number" disabled>
                                        <span id="menRightHandMessage" style="display: none;">Enter number (Max
                                            4)</span>
                                    </div>
                                    <div>
                                        <label for="menLeftand">Men's Left Hand</label>
                                        <input type="checkbox" id="menLeftand" class="checkbox-design"
                                            value="0"
                                            onchange="toggleNumberInput('menLeftand', 'menLeftHandNumber' , 'menLeftandMessage')">
                                        <input type="number" id="menLeftHandNumber" name="menLeftHandNumber"
                                            class="enter-number" disabled>
                                        <span id="menLeftandMessage" style="display: none;">Enter number (Max
                                            4)</span>
                                    </div>
                                    <div>
                                        <label for="womanRightHand">Ladies's Right Hand</label>
                                        <input type="checkbox" id="womanRightHand" class="checkbox-design"
                                            value="0"
                                            onchange="toggleNumberInput('womanRightHand', 'womanRightHandNumber' ,'womanRightHandMessage')">
                                        <input type="number" id="womanRightHandNumber" name="womanRightHandNumber"
                                            class="enter-number" disabled>
                                        <span id="womanRightHandMessage" style="display: none;">Enter number (Max
                                            4)</span>
                                    </div>
                                    <div>
                                        <label for="womanLeftand">Ladies's Left Hand</label>
                                        <input type="checkbox" id="womanLeftand" class="checkbox-design"
                                            value="0"
                                            onchange="toggleNumberInput('womanLeftand', 'womanLeftHandNumber' , 'womanLeftandMessage')">
                                        <input type="number" id="womanLeftHandNumber" name="womanLeftHandNumber"
                                            class="enter-number" disabled>
                                        <span id="womanLeftandMessage" style="display: none;">Enter number (Max
                                            4)</span>
                                    </div>
                                </div>

                            </div>
                            <label for="contactPhone" class="titleCheckBox">Player Names</label>
                            <div class="input-group" id="playerList">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="palyerName0">Player 1</label>
                                    <input type="text" name="name[0]" id="palyerName0" class="player-name"
                                        required placeholder="Enter your first name">
                                </div>
                            </div>
                            <button type="button" class="add-player-button cmn-button mb-4"
                                onclick="addPlayer()">Add
                                Player</button>
                            <label for="contactPhone" class="titleCheckBox">Wished playing days and times</label>
                            <div class="input-group" id="dateTimeList">
                                <div class="input-single" style="width: 100% !important;">
                                    <label for="date0">Date & Time 1</label>
                                    <input type="datetime-local" id="date0" name="date[0]"
                                        class="form-control text-center" required>

                                </div>
                            </div>
                            <button type="button" class="add-datetime-button cmn-button mb-4"
                                onclick="addDateTime()">Add
                                Date & Time</button>
                            <p class="totalPriceCheckBox">Total Price: <span id="totalPriceCheckBoxs">0.00</span></p>
                            <input type="hidden" name="totalPrice" id="totalPriceBooking">
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
            // Add event listeners to all checkboxes
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateTotalPrice);
            });

            function updateTotalPrice() {
                let totalPrice = 0;
                checkboxes.forEach(checkbox => {
                    const span = checkbox.nextElementSibling; // Get the adjacent <span>
                    if (checkbox.checked) {
                        totalPrice += parseFloat(checkbox.value);
                        span.textContent = `$${checkbox.value}`;
                    } else {
                        span.textContent = '';
                    }
                });
                // Update the total price
                document.getElementById('totalPriceCheckBoxs').textContent = totalPrice.toFixed(2);
                document.getElementById('totalPriceBooking').value = totalPrice.toFixed(2);
            }

            function toggleNumberInput(checkboxId, numberInputId, messageId) {
                var checkbox = document.getElementById(checkboxId);
                var numberInput = document.getElementById(numberInputId);
                var message = document.getElementById(messageId);

                if (checkbox.checked) {
                    numberInput.disabled = false;
                    numberInput.classList.add('enter-number-disabled')
                    numberInput.value = null;
                    message.style.display = 'inline-block';

                } else {
                    numberInput.disabled = true;
                    numberInput.value = 0;
                    numberInput.classList.remove('enter-number-disabled')
                    message.style.display = 'none';
                }
            }
            var i = 1;

            function addPlayer() {
                const playerList = document.getElementById('playerList');
                const newInput = document.createElement('div');
                newInput.className = 'input-single';
                newInput.style = 'width: 100% !important;';
                ++i;
                newInput.innerHTML = `
                    <label for="playerName` + i + `">Player ` + i + `</label>
                    <input type="text" name="name[` + i + `]" id="playerName` + i + `" class="player-name" required placeholder="Enter your  name">
                    <button type="button" class="remove-player-button" onclick="removePlayer(this)">Remove Player</button>
                `;

                playerList.appendChild(newInput);
            }

            function removePlayer(button) {
                const playerList = document.getElementById('playerList');
                const inputContainer = button.parentElement;
                playerList.removeChild(inputContainer);
                --i;
            }


            var x = 1;

            function addDateTime() {
                const dateTimeList = document.getElementById('dateTimeList');
                const newInput = document.createElement('div');
                newInput.className = 'input-single';
                newInput.style = 'width: 100% !important;';
                ++x;
                newInput.innerHTML = `
                    <label for="date` + x + `">Date & Time ` + x + `</label>
                    <input type="datetime-local" id="date` + x + `" name="date[` + x + `]" class="form-control text-center" required>
                    <button type="button" class="remove-datetime-button" onclick="removeDateTime(this)">Remove Date & Time</button>
                `;

                dateTimeList.appendChild(newInput);
            }

            function removeDateTime(button) {
                const dateTimeList = document.getElementById('dateTimeList');
                const inputContainer = button.parentElement;
                dateTimeList.removeChild(inputContainer);
                --x;
            }
        </script>
    @endpush
</x-layouts.app>
