<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Partners;
use App\Models\Facilities;
use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use App\Models\FacilityImages;
use App\Models\FacilityPartner;
use App\Http\Requests\StoreFacilitiesRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::get();
        return view('DashBoard.faqEdit', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partners = Partners::get();
        return view('DashBoard.faq.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $faq=Faq::SaveModel($request);
        LogActivity::addToLog('Faq Was Added Successfully');
        return redirect()->route('faq.index')->with('success', 'Faq Was Added Successfully');
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
    public function edit(Request $request, $id)
    {
        $faq = Faq::find($id);
        //  get all images for this facility just image column and push it to array
        return view('DashBoard.faq.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);
        abort_if(!$faq,'404');
        Faq::updateModel($request,$id);
        LogActivity::addToLog('Faq Was Updated Successfully');
        return redirect()->route('faq.index')->with('success', 'Faq Was Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faq= Faq::find($id);
        abort_if(!$faq,'404');
        Faq::deleteModel($id);
        LogActivity::addToLog('Faq Was Deleted Successfully');
        return redirect()->route('faq.index')->with('success', 'Faq Was Deleted Successfully');
    }

    public function deleteMultiple(Request $request)
    {
        $selectedFaq = $request->input('selectedFaq', []);

        foreach ($selectedFaq as $facilityId) {
            $faq = Faq::find($facilityId);
            if ($faq) {
                $faq->delete();
            }
        }
        LogActivity::addToLog('All Selected Faq Was Deleted Successfully('.count($selectedFaq).')');
        return redirect()->route('faq.index')->with('success', 'All Selected Faq Was Deleted Successfully');
    }
}
