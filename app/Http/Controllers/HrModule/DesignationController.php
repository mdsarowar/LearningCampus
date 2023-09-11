<?php

namespace App\Http\Controllers\HrModule;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        return view('admin.HR.designation.manage',[
            'designations'=>Designation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.HR.designation.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Designation::saveData($request);
        return redirect()->route('manage_designation')->with('success','Designation created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.HR.designation.view',[
            'designation'=>Designation::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.HR.designation.edit',[
            'designation'=>Designation::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Designation::updateData($request,$id);
        return redirect()->route('manage_designation')->with('success','Designation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $designation=Designation::find($id);
        $designation->delete();
        return redirect()->route('manage_designation')->with('success','Designation delete successfully');
    }
}
