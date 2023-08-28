<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\gallery;
use App\Models\ContactUs;
use App\Models\Facilities;
use Illuminate\Http\Request;
use App\Models\BannerHomePage;
use App\Models\FacilityImages;
use App\Models\FacilityHomePage;

class FrontEndController extends Controller
{
    public function index()
    {
        $banner = BannerHomePage::first();
        $facilityPage = FacilityHomePage::first();
        $facilities = Facilities::select('icon', 'name', 'description')->get();
        $aboutUs = AboutUs::first();
        return view('FrontEnd.home', get_defined_vars());
    }

    public function indexFacility()
    {
        $facilities = Facilities::paginate(4);
        return view('FrontEnd.facilities', get_defined_vars());
    }

    // indexFacilityDetails
    public function indexFacilityDetailsHome()
    {
        $facility = Facilities::get()->first();
        $facilities = Facilities::select('id', 'name')->get();
        // get all images for this facility just image column and push it to array
        $facilityId=$facility->id;
        $facilityImages = FacilityImages::where('facility_id', $facilityId)->get()->pluck('image')->toArray();
        return view('FrontEnd.facility-details', get_defined_vars());
    }

    public function indexFacilityDetails($id)
    {
        $facility = Facilities::find($id);
        $facilities = Facilities::select('id', 'name')->get();
        // get all images for this facility just image column and push it to array
        $facilityImages = FacilityImages::where('facility_id', $id)->get()->pluck('image')->toArray();
        return view('FrontEnd.facility-details', get_defined_vars());
    }

    // indexAboutUs
    public function indexAboutUs()
    {
        $aboutUs = AboutUs::first();
        return view('FrontEnd.about-us', get_defined_vars());
    }

    // indexContactUs
    public function indexContactUs()
    {
        $contactUs = ContactUs::first();
        return view('FrontEnd.contact-us', get_defined_vars());
    }

    // indexGallery

    public function indexGallery()
    {
        $gallery = gallery::all();

        // Group the gallery data into arrays containing 2 records each
        $groupedGallery = collect($gallery)->chunk(1);

        return view('FrontEnd.gallery', compact('groupedGallery'));
    }
}
