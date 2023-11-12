<?php

namespace App\Http\Controllers;

use App\Models\JohnSanford;
use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreJohnSanfordRequest;
use App\Http\Requests\UpdateJohnSanfordRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;

class JohnSanfordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $johnSanford = JohnSanford::first();
        return view('DashBoard.johnSanfordEdit', get_defined_vars());
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
    public function store(UpdateJohnSanfordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JohnSanford $johnSanford)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JohnSanford $johnSanford)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJohnSanfordRequest $request, $id)
    {
        $johnSanford = JohnSanford::find($id);
        abort_if(!$johnSanford, '404');
        JohnSanford::updateModel($request, $id);
        LogActivity::addToLog('Section JohnSanford Updated Successfully');
        return redirect()->route('john-sanford.index')->with('success', 'Section JohnSanford Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JohnSanford $johnSanford)
    {
        //
    }

    // uploadPdfs
    public function uploadPdfs(FacadesRequest $request)
    {
        return view('DashBoard.johnSanfordPdfs', get_defined_vars());
    }
    // storePdfs before delete old file if exist and upload new file and save it in database also delete old file if exist
    public function storePdfs(Request $request)
    {
        $request->validate([
            'pdf_rating' => 'mimes:pdf|max:10000',
            'pdf_fact_sheet' => 'mimes:pdf|max:10000',
        ]);
        $johnSanford = JohnSanford::first();
        if ($request->hasFile('pdf_rating')) {
            if ($johnSanford->pdf_rating) {
                Storage::disk('uploads')->delete($johnSanford->pdf_rating);
            }
            $file = $request->file('pdf_rating');
            $fileName = time() . '_rating.' . $file->getClientOriginalExtension();
             $file->move(storage_path('app/uploads'), $fileName);
            $johnSanford->pdf_rating = $fileName;
        }
        if ($request->hasFile('pdf_fact_sheet')) {
            if ($johnSanford->pdf_fact_sheet) {
                Storage::disk('uploads')->delete($johnSanford->pdf_fact_sheet);
            }
            $file = $request->file('pdf_fact_sheet');
            $fileName = time() . '_fact_sheet.' . $file->getClientOriginalExtension();
             $file->move(storage_path('app/uploads'), $fileName);
            $johnSanford->pdf_fact_sheet = $fileName;
        }
        $johnSanford->save();
        LogActivity::addToLog('Downloading Pdfs Was updated Successfully');
        return redirect()->route('john-sanford.index')->with('success', 'Downloading Pdfs Was updated Successfully');
    }
}
