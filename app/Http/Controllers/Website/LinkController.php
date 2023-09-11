<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{

    public function index()
    {
        return view('admin.website.link.manage',[
            'links'=>Link::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.link.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Link::saveData($request);
        return redirect()->route('manage_link')->with('success','Link add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.link.view',[
            'link'=>Link::find($id),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.link.edit',[
            'link'=>Link::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Link::updateData($request,$id);
        return redirect()->route('manage_link')->with('success','Link Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $link=Link::find($id);
        $link->delete();
        return redirect()->route('manage_link')->with('success','Link delete successfully');
    }
}
