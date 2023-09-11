<?php

namespace App\Http\Controllers\HrModule;

use App\Http\Controllers\Controller;
use App\Models\EmployeeCategoris;
use App\Models\Employeetype;
use Illuminate\Http\Request;

class EmployeeTypeController extends Controller
{
    public function index()
    {
        return view('admin.HR.employee_type.manage',[
            'emp_types'=>Employeetype::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.HR.employee_type.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Employeetype::saveData($request);
        return redirect()->route('manage_employee_type')->with('success','Employee Type created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
//        return view('admin.HR.employee_type.add');
        return view('admin.HR.employee_type.view',[
            'type'=>Employeetype::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.HR.employee_type.edit',[
            'type'=>Employeetype::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Employeetype::updateData($request,$id);
        return redirect()->route('manage_employee_type')->with('success','Employee Type Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type=Employeetype::find($id);
        $type->delete();
        return redirect()->route('manage_employee_type')->with('success','Employee Type delete successfully');
    }
}
