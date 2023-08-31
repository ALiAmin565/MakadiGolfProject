<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use App\Http\Requests\UpdatePartnersRequest;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partners::get();
        return view('DashBoard.partnersEdit', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DashBoard.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpdatePartnersRequest $request)
    {
        $partners=Partners::SaveModel($request);
        return to_route('partners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $partner = Partners::find($id);
        abort_if(!$partner,'404');
        return view('DashBoard.partners.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnersRequest $request, $id)
    {
        $facility = Partners::find($id);
        abort_if(!$facility,'404');
        Partners::updateModel($request,$id);
        return to_route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partners $partners)
    {
        //
    }

    /**
     * Delete multiple resources from storage.
     */
    public function deleteMultiple(UpdatePartnersRequest $request)
    {
        $selectedPartners = $request->input('selectedPartners', []);
        foreach ($selectedPartners as $partnersId) {
            $partner = Partners::find($partnersId);
            // find images name first then delete it from path
            $image = $partner->image;
            $fullImagePath = public_path('assetsFront/images/partners/') . $image;
            if (file_exists($fullImagePath)) {
                unlink($fullImagePath);
            }
            if ($partner) {
                $partner->delete();
            }
        }
        return to_route('partners.index');
    }


    
}
