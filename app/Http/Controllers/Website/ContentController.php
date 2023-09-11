<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AddContent;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function index()
    {
        return view('admin.website.content.manage',[
            'contents'=>AddContent::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.content.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AddContent::saveData($request);
        return redirect()->route('manage_content')->with('success','Content  add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.content.view',[
            'content'=>AddContent::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.content.edit',[
            'content'=>AddContent::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        AddContent::updateData($request,$id);
        return redirect()->route('manage_content')->with('success','Content  Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $content=AddContent::find($id);
        if (file_exists($content->file)){
            unlink($content->file);
        }
        $content->delete();
        return redirect()->route('manage_content')->with('success','Content  Delete successfully');
    }
}
