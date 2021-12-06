<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Blog;
use App\Models\Backend\CountryItinerary;

class HomeController extends Controller
{
    public function index()
    {
        $data['blogdata'] = Blog::latest()->take(5)->get();
        $data['everydata'] = CountryItinerary::latest()->take(5)->get();
        return view('frontend.index', $data);
    }
}
