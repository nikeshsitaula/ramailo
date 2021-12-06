<?php

namespace App\Http\Controllers\Backend\WorldDestinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;
use App\Models\Backend\WorldDestination;
use Validator;

class WorldDestinationsController extends Controller
{

    public function index(Request $request)
    {
        return view('backend.worlddestinations.index');
    }

    public function create()
    {
//        $data['worlddestinations'] = WorldDestination::select(DB::raw("CONCAT(country,'&nbsp;',speciality,' ', '&nbsp;&nbsp; Continent: ',continent,') AS country"), 'continent')->pluck('country', 'continent');

        return view('backend.worlddestinations.create');
    }

    public function store(Request $request)
    {

        Validator::make($request->all(),[
            'country' => 'required',
            'speciality' => 'required',
            'continent' => 'required',
            'countryimage' => 'image|nullable|max:1999'
        ]);
        //Handle File Upload
        if($request->hasFile('countryimage')){
            //Get filename with the extension
            $filenameWithExt = $request->file('countryimage')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('countryimage')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('countryimage')->storeAs('public/countryimages',$fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.png';
        }
        //create post
        $worlddestinations = new WorldDestination();
        $request->merge([
            'created_by' => auth()->user()->id
        ]);
        $worlddestinations->country = $request->input('country');
        $worlddestinations->speciality = $request->input('speciality');
        $worlddestinations->continent = $request->input('continent');
        $worlddestinations->countryimage = $fileNameToStore;
        $worlddestinations->save();
        return back()->withFlashSuccess(__('alerts.backend.records.created'));
    }

    public function show($id)
    {
        $data['images'] = WorldDestination::where('countryimage', $id)->get();
        $data['worlddestinations'] = WorldDestination::findOrFail($id);
        return view('backend.worlddestinations.ajaxshow', $data);
    }

    public function edit($id)
    {
        $data['worlddestinations'] = WorldDestination::findOrFail($id);

        return view('backend.worlddestinations.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $worlddestinations = WorldDestination::findOrFail($id);
        $request->merge([
            'updated_by' => auth()->user()->id
        ]);
        $worlddestinations->update($request->all());
        return back()->withFlashSuccess(__('alerts.backend.records.updated'));
    }

    public function destroy($id)
    {
        $worlddestinations = WorldDestination::findOrFail($id);
        $worlddestinations->delete();

        return back()->withFlashSuccess(__('alerts.backend.records.deleted'));
    }

    public function listWorldDestinations()
    {
        $worlddestinations = WorldDestination::get();

        return Datatables::of($worlddestinations)
            ->addColumn('action', function ($worlddestinations) {
                if (auth()->user()->hasanyRole(['administrator'])) {
                    return '<a data-id="' . $worlddestinations->id . '" href="#" data-toggle="modal" id="openShow" class="btn btn-info btn-xs"><i class="fas fa-eye"></i></a> ' .
                        '<a href="worlddestinations/edit/' . $worlddestinations->id . '" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a> ' .
                        '<a href="worlddestinations/destroy/' . $worlddestinations->id . '" onclick="return confirm(\'Are you sure?\')" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>';
                } else {
                    return '<a data-id="' . $worlddestinations->id . '" href="#" data-toggle="modal" id="openShow" class="btn btn-info btn-xs"><i class="fas fa-eye"></i></a> ' .
                        '<a href="worlddestinations/edit/' . $worlddestinations->id . '" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a> ';
                }
            })
            ->make(true);
    }
}
