<?php

namespace App\Http\Controllers;

use App\Models\Holes;
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
        // dd($request->all());
        Holes::SaveModel($request);
        return to_route('john-sanford-holes.index');
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
        return to_route('john-sanford-holes.index');
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
        return to_route('john-sanford-holes.index');
    }
}
