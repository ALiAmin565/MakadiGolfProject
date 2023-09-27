<?php

namespace App\Http\Controllers;

use App\Models\gallery;
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
        return to_route('gallery-dashboard.index');
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
        return to_route('gallery-dashboard.index');
    }
}
