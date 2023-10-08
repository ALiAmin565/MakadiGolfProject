<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Helpers\LogActivity;
use App\Http\Requests\UpdateGalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = gallery::all();
        if(empty($galleries))
            $galleries = [];
        return view('DashBoard.galleryEdit', get_defined_vars());
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
    public function store(UpdateGalleryRequest $request)
    {
        gallery::SaveModel($request);
        LogActivity::addToLog('Gallery Image Added Successfully');
        return redirect()->route('gallery-dashboard.index')->with('success', 'Images Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery= Gallery::find($id);
        abort_if(!$gallery,'404');
        Gallery::deleteModel($id);
        LogActivity::addToLog('Gallery Image Deleted Successfully');
        return redirect()->route('gallery-dashboard.index')->with('success', 'Image Deleted Successfully');
    }
}
