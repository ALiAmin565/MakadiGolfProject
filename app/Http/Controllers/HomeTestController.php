<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LogActivity;

class HomeTestController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = LogActivity::logActivityLists();
        return view('log', get_defined_vars());
    }
}
