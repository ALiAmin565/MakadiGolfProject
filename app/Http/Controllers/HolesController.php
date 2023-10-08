<?php

namespace App\Http\Controllers;

use App\Models\Holes;
use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateHolesRequest;

class HolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $holes = Holes::get();
        return view('DashBoard.holesEdit', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DashBoard.holes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpdateHolesRequest $request)
    {
        $request->validate([
            'image' => 'required',
            'logo'  => 'required',
        ]);
        Holes::SaveModel($request);
        LogActivity::addToLog('Hole '.$request->title.' Added Successfully');
        return redirect()->route('john-sanford-holes.index')->with('success', 'Hole Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Holes $holes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hole = Holes::find($id);
        abort_if(!$hole,'404');
        return view('DashBoard.holes.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHolesRequest $request, $id)
    {
        Holes::updateModel($request,$id);
        LogActivity::addToLog('Hole '.$request->title.' Updated Successfully');
        return redirect()->route('john-sanford-holes.index')->with('success', 'Hole Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Holes $holes)
    {
        //
    }

    public function deleteMultiple(Request $request)
    {
        $selectedHoles = $request->input('selectedHoles', []);
        foreach ($selectedHoles as $holeId) {
            $hole = Holes::find($holeId);
            $image = $hole->image;
            $fullImagePath = public_path('assetsFront/images/holes/') . $image;
            if (file_exists($fullImagePath)) {
                unlink($fullImagePath);
            }
            $logo = $hole->logo;
            $fullLogoPath = public_path('assetsFront/images/holes/') . $logo;
            if (file_exists($fullLogoPath)) {
                unlink($fullLogoPath);
            }
            if ($hole) {
                $hole->delete();
            }
        }
        LogActivity::addToLog('Holes Deleted Successfully ('.count($selectedHoles).')');
        return redirect()->route('john-sanford-holes.index')->with('success', 'Holes Deleted Successfully');
    }
}
