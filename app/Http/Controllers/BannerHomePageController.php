<?php

namespace App\Http\Controllers;

use App\Models\BannerHomePage;
use App\Http\Requests\UpdateBannerHomePageRequest;

class BannerHomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner= BannerHomePage::first();
        return view('DashBoard.Home.banner',get_defined_vars());
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
    public function store(UpdateBannerHomePageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BannerHomePage $bannerHomePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BannerHomePage $bannerHomePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerHomePageRequest $request, $id)
    {

        $bannerHomePage= BannerHomePage::find($id);
        abort_if(!$bannerHomePage,'404');
        BannerHomePage::updateModel($request,$id);
        return to_route('home-page-banner.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BannerHomePage $bannerHomePage)
    {
        //
    }
}
