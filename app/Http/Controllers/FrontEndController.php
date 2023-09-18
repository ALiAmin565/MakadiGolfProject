<?php

namespace App\Http\Controllers;

use App\Models\Holes;
use App\Models\AboutUs;
use App\Models\gallery;
use App\Models\Partners;
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
        $facilities = Facilities::select('id', 'icon', 'name', 'description')->get();
        $aboutUs = AboutUs::first();
        $partners = Partners::get();
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
        $facilityId = $facility->id;
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

        return view('FrontEnd.gallery', get_defined_vars());
    }
    // indexMembership

    public function indexMembership()
    {
        return view('FrontEnd.membership-form');
    }

    // indexJohnSanford
    public function indexJohnSanford()
    {
        return view('FrontEnd.johnSanford');
    }

    // indexJohnSanfordDetails
    public function indexJohnSanfordDetails()
    {
        $holes=Holes::all();
        $holeSingle=Holes::find($holes[0]->id);
        return view('FrontEnd.johnSanfordDetails',get_defined_vars());
    }
    // singleDetailsJhonSanford
    public function singleDetailsJhonSanford($id)
    {
        $holes=Holes::all();
        // Check if the id is valid
        if(!Holes::find($id)){
            return $this->indexJohnSanfordDetails();
        }
        $holeSingle=Holes::find($id);
        return view('FrontEnd.johnSanfordDetails',get_defined_vars());
    }
}
