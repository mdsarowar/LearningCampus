<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AllCareer;
use Illuminate\Http\Request;

class CareerController extends Controller
{

    public function index()
    {
        return view('admin.website.career.manage',[
            'careers'=>AllCareer::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.career.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AllCareer::saveData($request);
        return redirect()->route('manage_career')->with('success','Career add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.website.career.view',[
            'career'=>AllCareer::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.website.career.edit',[
            'career'=>AllCareer::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        AllCareer::updateData($request,$id);
        return redirect()->route('manage_career')->with('success','Career update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $career=AllCareer::find($id);
        if (file_exists($career->file)){
            unlink($career->file);
        }
        $career->delete();
        return redirect()->route('manage_career')->with('success','Career delete successfully');
    }
}
