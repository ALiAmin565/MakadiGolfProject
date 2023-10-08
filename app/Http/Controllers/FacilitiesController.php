<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use App\Models\Facilities;
use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use App\Models\FacilityImages;
use App\Models\FacilityPartner;
use App\Http\Requests\StoreFacilitiesRequest;
use App\Http\Requests\UpdateFacilitiesRequest;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facilities::get();
        return view('DashBoard.facilitiesEdit', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partners = Partners::get();
        return view('DashBoard.facilities.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpdateFacilitiesRequest $request)
    { 
        $facility=Facilities::SaveModel($request);
        if($request->partners != [])    
        {
            foreach($request->partners as $partnerId)
            {
                $facilityPartner = new FacilityPartner();
                $facilityPartner->facility_id = $facility->id;
                $facilityPartner->partner_id = $partnerId;
                $facilityPartner->save();
            }
        }
        $facilityId=$facility->id;
        if($request->hasFile('images'))
        FacilityImages::SaveModel($request,$facilityId);
        LogActivity::addToLog('Facility '. $facility->name .' Was Added Successfully');
        return redirect()->route('facilities.index')->with('success', 'Facility '. $facility->name .' Was Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Facilities $facilities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UpdateFacilitiesRequest $request, $id)
    {
        $facility = Facilities::find($id);
        //  get all images for this facility just image column and push it to array
        $facilityImages = FacilityImages::where('facility_id', $id)->get()->pluck('image')->toArray();
        abort_if(!$facility,'404');
        $partners = Partners::get();
        $facilityPartnersIds = FacilityPartner::where('facility_id' , $id)->pluck('partner_id')->toArray();    
        return view('DashBoard.facilities.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacilitiesRequest $request, $id)
    {
        $facility = Facilities::find($id);
        abort_if(!$facility,'404');
        Facilities::updateModel($request,$id);
        if($request->partners != [])    
        {
            // check if there is any partner for this facility
            $facilityPartnersIds = FacilityPartner::where('facility_id' , $id)->pluck('partner_id')->toArray();
            // if there is any partner for this facility
            if(count($facilityPartnersIds) > 0)
            {
                // delete all partners for this facility
                FacilityPartner::where('facility_id' , $id)->delete();
            }
            // add new partners for this facility
            foreach($request->partners as $partnerId)
            {
                $facilityPartner = new FacilityPartner();
                $facilityPartner->facility_id = $id;
                $facilityPartner->partner_id = $partnerId;
                $facilityPartner->save();
            }
        }else{
            // if there is no partners for this facility
            // delete all partners for this facility
            FacilityPartner::where('facility_id' , $id)->delete();
        }
        // if there is new images
        if($request->hasFile('images'))
        FacilityImages::SaveModel($request,$id);
        LogActivity::addToLog('Facility '. $facility->name .' Was Updated Successfully');
        return redirect()->route('facilities.index')->with('success', 'Facility '. $facility->name .' Was Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $facility= Facilities::find($id);
        abort_if(!$facility,'404');
        Facilities::deleteModel($id);
        LogActivity::addToLog('Facility '. $facility->name .' Was Deleted Successfully');
        return redirect()->route('facilities.index')->with('success', 'Facility '. $facility->name .' Was Deleted Successfully');
    }

    public function deleteMultiple(Request $request)
    {
        $selectedFacilities = $request->input('selectedFacilities', []);

        foreach ($selectedFacilities as $facilityId) {
            $facility = Facilities::find($facilityId);
            $image = $facility->image;
            $fullImagePath = public_path('assetsFront/images/facility/') . $image;
            if (file_exists($fullImagePath)) {
                unlink($fullImagePath);
            }
            $facilityImages = FacilityImages::where('facility_id', $facilityId)->get()->pluck('image')->toArray();
            foreach ($facilityImages as $image) {
                $fullExistingImagePath = public_path('assetsFront/images/facility/images/') . $image;
                if (file_exists($fullExistingImagePath)) {
                    unlink($fullExistingImagePath);
                }
            }
            if ($facility) {
                $facility->delete();
            }
        }
        LogActivity::addToLog('All Selected Facility Was Deleted Successfully('.count($selectedFacilities).')');
        return redirect()->route('facilities.index')->with('success', 'All Selected Facility Was Deleted Successfully');
    }

    public function deleteSelectedImage($imageName)
    {
        $fullExistingImagePath = public_path('assetsFront/images/facility/images/') . $imageName;
        if (file_exists($fullExistingImagePath)) {
            unlink($fullExistingImagePath);
        }
        $facilityImage = FacilityImages::where('image', $imageName)->first();
        $facilityImage->delete();
        return back()->with('success', 'Image Was Deleted Successfully');;
    }

    public function addImageFacility(Request $request , $facilityId)
    {
        FacilityImages::SaveModel($request,$facilityId);
        return back()->with('success', 'Image Was Added Successfully');;
    }
}
