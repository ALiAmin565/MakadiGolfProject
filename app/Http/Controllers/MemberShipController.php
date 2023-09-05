<?php

namespace App\Http\Controllers;

use App\Mail\Membership as MailMembership;
use App\Models\MemberShip;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UpdateMemberShipRequest;

class MemberShipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Frontend.membership-form');
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
    public function store(UpdateMemberShipRequest $request)
    {
       $memberShip=MemberShip::SaveModel($request);
       if ($memberShip) {
            $email = $request->all()['emailAddress'];
            $name = $request->all()['firstName'] . ' ' . $request->all()['familyName'];
            Mail::to($email)->send(new MailMembership($email, $name));
            return back()->with('success', 'Thank you for Join to our Team, please check your inbox');
        }
        // return to_route('member-ship.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MemberShip $memberShip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MemberShip $memberShip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberShipRequest $request, MemberShip $memberShip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MemberShip $memberShip)
    {
        //
    }
}
