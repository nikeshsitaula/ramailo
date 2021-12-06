<?php

namespace App\Http\Controllers\Backend\Blog;

use App\Http\Controllers\Controller;
use App\Models\Backend\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;
use Validator;


class BlogsController extends Controller
{

    public function index()
    {
        return view('backend.blog.index');
    }


    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'coverimageone' => 'image|nullable|max:1999',
            'coverimagetwo' => 'image|nullable|max:1999',
            'coverimagethree' => 'image|nullable|max:1999'
        ]);
        //Handle File Upload for coverimageone
        if($request->hasFile('coverimageone')){
            //Get filename with the extension
            $filenameWithExt = $request->file('coverimageone')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('coverimageone')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStoreone = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('coverimageone')->storeAs('public/coverimages',$fileNameToStoreone);
        } else{
            $fileNameToStoreone = 'noimage.png';
        }

        //Handle File Upload for coverimagetwo
        if($request->hasFile('coverimagetwo')){
            //Get filename with the extension
            $filenameWithExt = $request->file('coverimagetwo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('coverimagetwo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStoretwo= $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('coverimagetwo')->storeAs('public/coverimages',$fileNameToStoretwo);
        } else{
            $fileNameToStoretwo = 'noimage.png';
        }

        //Handle File Upload for coverimagethree
        if($request->hasFile('coverimagethree')){
            //Get filename with the extension
            $filenameWithExt = $request->file('coverimagethree')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('coverimagethree')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStorethree = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('coverimagethree')->storeAs('public/coverimages',$fileNameToStorethree);
        } else{
            $fileNameToStorethree = 'noimage.png';
        }

        //create post
        $blog = new Blog();
        $request->merge([
            'created_by' => auth()->user()->id
        ]);
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->coverimageone = $fileNameToStoreone;
        $blog->coverimagetwo = $fileNameToStoretwo;
        $blog->coverimagethree = $fileNameToStorethree;
        $blog->save();
        return back()->withFlashSuccess(__('alerts.backend.records.created'));
    }


    public function show($id)
    {
        $data['blog'] = Blog::findOrFail($id);

        return view('backend.blog.ajaxshow', $data);
    }


    public function edit($id)
    {
        $data['blog'] = Blog::findOrFail($id);

        return view('backend.blog.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $request->merge([
            'updated_by' => auth()->user()->id
        ]);
        $blog->update($request->all());
        return back()->withFlashSuccess(__('alerts.backend.records.updated'));
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return back()->withFlashSuccess(__('alerts.backend.records.deleted'));
    }

    public function listBlog()
    {
        $blog = Blog::get();

        return Datatables::of($blog)
            ->addColumn('action', function ($blog) {
                if (auth()->user()->hasanyRole(['administrator'])) {
                    return '<a data-id="' . $blog->id . '" href="#" data-toggle="modal" id="openShow" class="btn btn-info btn-xs"><i class="fas fa-eye"></i></a> ' .
                        '<a href="blog/edit/' . $blog->id . '" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a> ' .
                        '<a href="blog/destroy/' . $blog->id . '" onclick="return confirm(\'Are you sure?\')" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>';
                } else {
                    return '<a data-id="' . $blog->id . '" href="#" data-toggle="modal" id="openShow" class="btn btn-info btn-xs"><i class="fas fa-eye"></i></a> ' .
                        '<a href="blog/edit/' . $blog->id . '" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a> ';
                }
            })
            ->make(true);
    }
}
