<?php

namespace App\Http\Controllers\HrModule;

use App\Http\Controllers\Controller;
use App\Models\EmployeeCategoris;
use Illuminate\Http\Request;

class EmployeeCategories extends Controller
{

    public function index()
    {
        return view('admin.HR.employee_category.manage',[
            'emp_types'=>EmployeeCategoris::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.HR.employee_category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        EmployeeCategoris::saveData($request);
        return redirect()->route('manage_employee_category')->with('success','Employee Type created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.HR.employee_category.view',[
            'category'=>EmployeeCategoris::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.HR.employee_category.edit',[
            'category'=>EmployeeCategoris::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        EmployeeCategoris::updateData($request,$id);
        return redirect()->route('manage_employee_category')->with('success','Employee Type updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=EmployeeCategoris::find($id);
        $category->delete();
        return redirect()->route('manage_employee_category')->with('success','Employee Type delete successfully');
    }
}
