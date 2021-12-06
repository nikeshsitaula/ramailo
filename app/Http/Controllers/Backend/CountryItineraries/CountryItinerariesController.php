<?php

namespace App\Http\Controllers\Backend\CountryItineraries;

use App\Http\Controllers\Controller;
use App\Models\Backend\CountryItinerary;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;
use App\Models\Backend\WorldDestination;
use Validator;

class CountryItinerariesController extends Controller
{

    public function index()
    {
        return view('backend.countryitineraries.index');
    }

    public function create()
    {
        return view('backend.countryitineraries.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'country' => 'required',
            'itineraryname' => 'required',
            'itineraryimage' => 'image|nullable|max:1999',
            'description' => 'required',

            'subheadingname' => 'required',
            'subimageone' => 'image|nullable|max:1999',
            'subimagetwo' => 'image|nullable|max:1999',
            'subdescription' => 'required',

            'sliderheadingname' => 'required',
            'sliderimageone' => 'image|nullable|max:1999',
            'sliderimagetwo' => 'image|nullable|max:1999',
            'sliderimagethree' => 'image|nullable|max:1999',
            'sliderdescription' => 'required',
        ]);
        //Handle File Upload for itineraryimage
        if ($request->hasFile('itineraryimage')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('itineraryimage')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('itineraryimage')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('itineraryimage')->storeAs('public/itineraryimages', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        //Handle File Upload for subimageone
        if ($request->hasFile('subimageone')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('subimageone')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('subimageone')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStoresone = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('subimageone')->storeAs('public/itineraryimages', $fileNameToStoresone);
        } else {
            $fileNameToStoresone = 'noimage.png';
        }

        //Handle File Upload for subimagetwo
        if ($request->hasFile('subimagetwo')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('subimagetwo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('subimagetwo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStorestwo = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('subimagetwo')->storeAs('public/itineraryimages', $fileNameToStorestwo);
        } else {
            $fileNameToStorestwo = 'noimage.png';
        }

        //Handle File Upload for sliderimageone
        if ($request->hasFile('sliderimageone')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('sliderimageone')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('sliderimageone')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStoreslone = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('sliderimageone')->storeAs('public/itineraryimages', $fileNameToStoreslone);
        } else {
            $fileNameToStoreslone = 'noimage.png';
        }

        //Handle File Upload for sliderimagetwo
        if ($request->hasFile('sliderimagetwo')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('sliderimagetwo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('sliderimagetwo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStoresltwo = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('sliderimagetwo')->storeAs('public/itineraryimages', $fileNameToStoresltwo);
        } else {
            $fileNameToStoresltwo = 'noimage.png';
        }

        //Handle File Upload for sliderimagethree
        if ($request->hasFile('sliderimagethree')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('sliderimagethree')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('sliderimagethree')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStoreslthree = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('sliderimagethree')->storeAs('public/itineraryimages', $fileNameToStoreslthree);
        } else {
            $fileNameToStoreslthree = 'noimage.png';
        }

        //create post
        $countryitineraries = new CountryItinerary();
        $request->merge([
            'created_by' => auth()->user()->id
        ]);
        $countryitineraries->country = $request->input('country');
        $countryitineraries->itineraryname = $request->input('itineraryname');
        $countryitineraries->itineraryimage = $fileNameToStore;
        $countryitineraries->description = $request->input('description');

        $countryitineraries->subheadingname = $request->input('subheadingname');
        $countryitineraries->subimageone = $fileNameToStoresone;
        $countryitineraries->subimagetwo = $fileNameToStorestwo;
        $countryitineraries->subdescription = $request->input('subdescription');

        $countryitineraries->sliderheadingname = $request->input('sliderheadingname');
        $countryitineraries->sliderimageone = $fileNameToStoreslone;
        $countryitineraries->sliderimagetwo = $fileNameToStorestwo;
        $countryitineraries->sliderimagethree = $fileNameToStoreslthree;
        $countryitineraries->sliderdescription = $request->input('sliderdescription');


        $countryitineraries->save();
        return back()->withFlashSuccess(__('alerts.backend.records.created'));
    }


    public function show($id)
    {
        $data['countryitineraries'] = CountryItinerary::findOrFail($id);

        return view('backend.countryitineraries.ajaxshow', $data);
    }


    public function edit($id)
    {
        $data['countryitineraries'] = CountryItinerary::findOrFail($id);

        return view('backend.countryitineraries.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $countryitineraries = CountryItinerary::findOrFail($id);
        $request->merge([
            'updated_by' => auth()->user()->id
        ]);
        $countryitineraries->update($request->all());
        return back()->withFlashSuccess(__('alerts.backend.records.updated'));
    }

    public function destroy($id)
    {
        $countryitineraries = CountryItinerary::findOrFail($id);
        $countryitineraries->delete();

        return back()->withFlashSuccess(__('alerts.backend.records.deleted'));
    }

    public function listCountryItineraries()
    {
        $countryitineraries = CountryItinerary::get();

        return Datatables::of($countryitineraries)
            ->addColumn('action', function ($countryitineraries) {
                if (auth()->user()->hasanyRole(['administrator'])) {
                    return '<a data-id="' . $countryitineraries->id . '" href="#" data-toggle="modal" id="openShow" class="btn btn-info btn-xs"><i class="fas fa-eye"></i></a> ' .
                        '<a href="countryitineraries/edit/' . $countryitineraries->id . '" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a> ' .
                        '<a href="countryitineraries/destroy/' . $countryitineraries->id . '" onclick="return confirm(\'Are you sure?\')" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>';
                } else {
                    return '<a data-id="' . $countryitineraries->id . '" href="#" data-toggle="modal" id="openShow" class="btn btn-info btn-xs"><i class="fas fa-eye"></i></a> ' .
                        '<a href="countryitineraries/edit/' . $countryitineraries->id . '" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a> ';
                }
            })
            ->make(true);
    }
}

