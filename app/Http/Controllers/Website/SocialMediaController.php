<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{

    public function index()
    {
        return view('admin.website.social_media.manage',[
            'medias'=>SocialMedia::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.social_media.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SocialMedia::saveData($request);
        return redirect()->route('manage_social_media')->with('success','Social Media add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
//        return $id;
        return view('admin.website.social_media.view',[
            'media'=>SocialMedia::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
//    public function edit_social_media()
    public function edit_social_media(string $id)
    {
//        return $id;
//        return view('admin.website.social_media.edit');
        return view('admin.website.social_media.edit',[
            'media'=>SocialMedia::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        SocialMedia::updateData($request,$id);
        return redirect()->route('manage_social_media')->with('success','Social Media update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $media=SocialMedia::find($id);
        $media->delete();
        return redirect()->route('manage_social_media')->with('success','Social Media delete successfully');
    }
}
