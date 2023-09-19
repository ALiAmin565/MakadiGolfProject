<img src="https://madinatmakadigolf.com/img/logo-white.png" alt="Your Logo"
    style="max-width: 150px; display:block;margin:auto;">
<br>
@component('mail::message')
    # Welcome to the first Newletter
    Dear {{ $booking->firstName }},

    We look forward to communicating more with you. For more information Be sure to check out our website.

    Booking Details:
    @php
        if ($booking->hole_18) {
            $resCourse = '18 Holes';
        } else {
            $resCourse = '9 Holes';
        }
    @endphp
    Name: {{ $booking->firstName }} {{ $booking->surname }}

    Email: {{ $booking->emailAddress }}

    Hotel: {{ $booking->hotelName }}

    Championship Course: {{ $resCourse }}

    Hire Equipments :
    @foreach ($booking->toArray() as $key => $value)
        @if (
            $value &&
                $key != 'firstName' &&
                $key != 'emailAddress' &&
                $key != 'surname' &&
                $key != 'hotelName' &&
                $key != 'id' &&
                $key != 'created_at' &&
                $key != 'updated_at' &&
                $key != 'date' &&
                $key != 'name' &&
                $key != 'hole_9' &&
                $key != 'hole_18' &&
                $key != 'totalPrice' &&
                $key != 'menRightHandNumber' &&
                $key != 'menLeftHandNumber' &&
                $key != 'womanRightHandNumber' &&
                $key != 'womanLeftHandNumber')
            {{ ucfirst($key) }}: {{ strip_tags($value) }}
        @endif
    @endforeach
    Golf Clubs :
    Men Right Hand Number : {{ $booking->menRightHandNumber }}
    Men Left Hand Number : {{ $booking->menLeftHandNumber }}
    Women Right Hand Number : {{ $booking->womanRightHandNumber }}
    Women Left Hand Number : {{ $booking->womanLeftHandNumber }}
    @php
        $names = explode(',', $booking->name);
        $dates = explode(',', $booking->date);
    @endphp

    Names:
    @foreach ($names as $name)
        - {{ strip_tags($name) }}
    @endforeach

    Dates:
    @foreach ($dates as $date)
        - {{ strip_tags($date) }}
    @endforeach

    Total Price: {{ $booking->totalPrice }} $

    Thanks,
    {{ config('app.name') }}
@endcomponent
