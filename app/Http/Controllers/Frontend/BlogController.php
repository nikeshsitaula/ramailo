<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Blog;
use App\Models\Backend\CountryItinerary;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data['everydata'] = Blog::latest()->take(5)->get();
        $data['blogview'] = Blog::latest()->paginate(2);
        return view('frontend.blog', $data);
    }

    public function show($id,Request $request)
    {
        $data['blogdata'] = Blog::where('id', $id)->first();

        $data['everydata'] = CountryItinerary::latest()->take(5)->get();

//        dd($data);
        return view('frontend.blogshow', $data);
    }
}
