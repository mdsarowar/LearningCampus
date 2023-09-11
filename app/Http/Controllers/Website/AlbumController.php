<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index()
    {
        return view('admin.website.album.manage',[
            'albums'=>Album::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.album.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Album::saveData($request);
        return redirect()->route('manage_album')->with('success','Album add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.album.view',[
            'album'=>Album::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.album.edit',[
            'album'=>Album::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Album::updateData($request,$id);
        return redirect()->route('manage_album')->with('success','Album Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album=Album::find($id);
        $album->delete();
        return redirect()->route('manage_album')->with('success','Album delete successfully');
    }
}
