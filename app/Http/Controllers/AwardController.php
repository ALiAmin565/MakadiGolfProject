<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Helpers\LogActivity;
use App\Http\Requests\StoreAwardRequest;
use App\Http\Requests\UpdateAwardRequest;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = Award::get();
        return view('DashBoard.awardsEdit', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DashBoard.awards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAwardRequest $request)
    {
        $award=Award::SaveModel($request);
        LogActivity::addToLog('Award '. $award->name .' With Added Successfully');
        return redirect()->route('awards.index')->with('success', 'Award Was Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $award = Award::find($id);
        abort_if(!$award,'404');
        return view('DashBoard.awards.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAwardRequest $request, $id)
    {
        $award = Award::find($id);
        abort_if(!$award,'404');
        Award::updateModel($request,$id);
        LogActivity::addToLog('Award '. $award->name .' With Updated Successfully');
        return redirect()->route('awards.index')->with('success', 'Award Was Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Award $award)
    {
        //
    }

    /**
     * Delete multiple resources from storage.
     */
    public function deleteMultiple(UpdateAwardRequest $request)
    {
        $selectedAwards = $request->input('selectedAwards', []);
        foreach ($selectedAwards as $awardsId) {
            $award = Award::find($awardsId);
            // find images name first then delete it from path
            $image = $award->image;
            $fullImagePath = public_path('assetsFront/images/awards/') . $image;
            if (file_exists($fullImagePath)) {
                unlink($fullImagePath);
            }
            if ($award) {
                $award->delete();
            }
        }
        LogActivity::addToLog('All Selected Awards With Deleted Successfully ('.count($selectedAwards).')');
        return redirect()->route('awards.index')->with('success', 'Selected Awards Was Deleted Successfully');
    }
}
