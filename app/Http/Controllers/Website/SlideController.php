<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\SlideShow;
use Illuminate\Http\Request;

class SlideController extends Controller
{

    public function index()
    {
        return view('admin.website.slide_show.manage_slide',[
            'slides'=>SlideShow::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.slide_show.add_slide');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SlideShow::saveData($request);
        return redirect()->route('manage_slide')->with('success','Slide add successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.slide_show.view_slide',[
            'slide'=>SlideShow::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.slide_show.edit_slide',[
            'slide'=>SlideShow::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        return $request;
        SlideShow::updateData($request,$id);
        return redirect()->route('manage_slide')->with('success','Slide update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slide=SlideShow::find($id);
//        if ($slide->image){
            if (file_exists($slide->image)){
                unlink($slide->image);
            }
        $slide->delete();
        return redirect()->route('manage_slide')->with('success','Slide delete successfully');
    }
}
