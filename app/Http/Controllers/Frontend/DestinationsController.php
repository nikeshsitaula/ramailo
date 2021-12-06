<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Backend\WorldDestination;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DestinationsController extends Controller
{

    public function index()
    {
        $data = WorldDestination::get();
        return view('frontend.destination')->with('data', $data);
    }

}
