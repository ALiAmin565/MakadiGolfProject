<?php

namespace App\Http\Controllers;

use App\Models\FacilityHomePage;
use App\Http\Requests\StoreFacilityHomePageRequest;
use App\Http\Requests\UpdateFacilityHomePageRequest;

class FacilityHomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilityPage= FacilityHomePage::first();
        return view('DashBoard.Home.facility',get_defined_vars());
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
    public function store(UpdateFacilityHomePageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FacilityHomePage $facilityHomePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FacilityHomePage $facilityHomePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacilityHomePageRequest $request, $id)
    {
        $facilityHomePage= FacilityHomePage::find($id);
        abort_if(!$facilityHomePage,'404');
        FacilityHomePage::updateModel($request,$id);
        return to_route('home-page-facility.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FacilityHomePage $facilityHomePage)
    {
        //
    }
}
