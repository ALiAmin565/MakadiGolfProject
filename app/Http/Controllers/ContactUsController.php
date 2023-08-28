<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactUs = ContactUs::first();
        return view('DashBoard.contactUsEdit', get_defined_vars());
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
    public function store(UpdateContactUsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactUsRequest $request,$id)
    {
        $contactUs= ContactUs::find($id);
        abort_if(!$contactUs,'404');
        ContactUs::updateModel($request,$id);
        return to_route('contact-us-dashboard.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
