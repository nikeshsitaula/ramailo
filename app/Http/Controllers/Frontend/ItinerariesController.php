<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Backend\CountryItinerary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ItinerariesController extends Controller
{

    public function index(Request $request)
    {
        if (!empty($request->country)) {
            $data['everydata'] = CountryItinerary::latest()->take(5)->get();
            $data['itinerary'] = CountryItinerary::where('country', $request->country)->latest()->paginate(6);
            return view('frontend.itinerary', $data);
        } else {
            $data['everydata'] = CountryItinerary::latest()->take(5)->get();
            $data['itinerary'] = CountryItinerary::latest()->paginate(6);
            return view('frontend.itinerary', $data);
        }

    }

    public function show($id, Request $request)
    {
        $data['iti'] = CountryItinerary::where('id', $id)->first();

        $data['everydata'] = CountryItinerary::latest()->take(5)->get();

//        dd($data);
        return view('frontend.itinerarydetails', $data);
    }

}
