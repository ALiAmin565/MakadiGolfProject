<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Helpers\LogActivity;
use App\Models\AboutUsIcons;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use App\Http\Requests\UpdateAboutUsIconsRequest;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $aboutUs=AboutUs::first();
        return view('DashBoard.aboutUsEdit',get_defined_vars());
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
    public function store(UpdateAboutUsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutUsRequest $request, $id)
    {
        $abouUs= AboutUs::find($id);
        abort_if(!$abouUs,'404');
        AboutUs::updateModel($request,$id);
        LogActivity::addToLog('About Us Section With Updated Successfully');
        return redirect()->route('about-us-dashboard.index')->with('success', 'About Us Section With Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }

    public function showEditIconPage()
    {
        $aboutUsIcons = AboutUsIcons::first();
        return view('DashBoard.aboutUsIconsEdit', get_defined_vars());
    }

    public function updateEditIconPage(UpdateAboutUsIconsRequest $request)
    {
        $aboutUsIcons = AboutUsIcons::first();
        abort_if(!$aboutUsIcons,'404');
        AboutUsIcons::updateModel($request, $aboutUsIcons->id);
        LogActivity::addToLog('Updated Icons About Us Section With Updated Successfully');
        return redirect()->route('showEditIconPage')->with('success', 'Icons Was Updated Successfully');
    }
}
