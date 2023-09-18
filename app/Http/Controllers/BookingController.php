<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use App\Mail\Booking as MailBooking;
use Illuminate\Support\Facades\Mail;
use App\Models\Booking as ModelsBooking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels=Partners::select('title')->get();
        return view('FrontEnd.booking-form',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        $booking=ModelsBooking::SaveModel($request);
        if ($booking) {
            $id = $booking->id;
            $email = $request->all()['emailAddress'];
            Mail::to($email)->send(new MailBooking($id));
            return back()->with('success', 'Thank you for your Booking, please check your inbox');
        }
        return to_route('member-ship.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ModelsBooking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelsBooking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, ModelsBooking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelsBooking $booking)
    {
        //
    }
}
