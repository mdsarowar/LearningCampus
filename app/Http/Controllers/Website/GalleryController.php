<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        return view('admin.website.gallery.manage',[
            'gallerys'=>Gallery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return $request;
        Gallery::saveData($request);
        return redirect()->route('manage_gallery')->with('success','Gallery add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.gallery.view',[
            'gallery'=>Gallery::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.gallery.edit',[
            'gallery'=>Gallery::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gallery::updateData($request,$id);
        return redirect()->route('manage_gallery')->with('success','Gallery Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery=Gallery::find($id);
        if (file_exists($gallery->photo)){
            unlink($gallery->photo);
        }
        $gallery->delete();
        return redirect()->route('manage_gallery')->with('success','Gallery Delete successfully');
    }
}
