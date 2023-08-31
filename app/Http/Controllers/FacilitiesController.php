<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFacilitiesRequest;
use App\Http\Requests\UpdateFacilitiesRequest;
use App\Models\FacilityImages;

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
        return view('DashBoard.facilities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpdateFacilitiesRequest $request)
    {
        $facility=Facilities::SaveModel($request);
        $facilityId=$facility->id;
        if($request->hasFile('images'))
        FacilityImages::SaveModel($request,$facilityId);
        return to_route('facilities.index');
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
        // if there is new images
        if($request->hasFile('images'))
        FacilityImages::SaveModel($request,$id);
        return to_route('facilities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $facility= Facilities::find($id);
        abort_if(!$facility,'404');
        Facilities::deleteModel($id);
        return to_route('facilities.index');
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
        return to_route('facilities.index');
    }

    public function deleteSelectedImage($imageName)
    {
        $fullExistingImagePath = public_path('assetsFront/images/facility/images/') . $imageName;
        if (file_exists($fullExistingImagePath)) {
            unlink($fullExistingImagePath);
        }
        $facilityImage = FacilityImages::where('image', $imageName)->first();
        $facilityImage->delete();
        return back();
    }

    public function addImageFacility(Request $request , $facilityId)
    {
        FacilityImages::SaveModel($request,$facilityId);
        return back();
    }
}
