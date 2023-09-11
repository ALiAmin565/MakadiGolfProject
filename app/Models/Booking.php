<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function SaveModel($request)
    {
        $booking = new Booking();
        $booking->firstName = $request->firstName;
        $booking->surname = $request->surname;
        $booking->emailAddress = $request->emailAddress;
        $booking->hotelName = $request->hotelName;
        $booking->hole_9 = $request->hole_9;
        $booking->hole_18 = $request->hole_18;
        $booking->drivingRange = $request->drivingRange;
        $booking->rangeBalls = $request->rangeBalls;
        $booking->golfClubs9 = $request->golfClubs9;
        $booking->golfClubs18 = $request->golfClubs18;
        $booking->golfCar9 = $request->golfCar9;
        $booking->golfCar18 = $request->golfCar18;
        $booking->golfCar3x18 = $request->golfCar3x18;
        $booking->golfCar5x18 = $request->golfCar5x18;
        $booking->golfCar3x9 = $request->golfCar3x9;
        $booking->menRightHandNumber = $request->menRightHandNumber ?? 0;
        $booking->menLeftHandNumber = $request->menLeftHandNumber ?? 0;
        $booking->womanRightHandNumber = $request->womanRightHandNumber ?? 0;
        $booking->womanLeftHandNumber = $request->womanLeftHandNumber ?? 0;
        $booking->name = implode(',', $request->name);
        $booking->date = implode(',', $request->date);
        $booking->totalPrice = $request->totalPrice;
        $booking->save();
        return $booking;
    }
}
