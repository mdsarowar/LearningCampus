<?php

namespace App\Http\Controllers\HrModule;

use App\Http\Controllers\Controller;
use App\Models\Workingshifts;
use Illuminate\Http\Request;
use function Psy\sh;

class WorkingShiftController extends Controller
{
    public function index()
    {
        return view('admin.HR.working_shift.manage',[
            'workingshifts'=>Workingshifts::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.HR.working_shift.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Workingshifts::saveData($request);
        return redirect()->route('manage_workingshift')->with('success','Working shift created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.HR.working_shift.view',[
            'shift'=>Workingshifts::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.HR.working_shift.edit',[
            'shift'=>Workingshifts::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Workingshifts::updateData($request,$id);
        return redirect()->route('manage_workingshift')->with('success','Working shift update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $shift=Workingshifts::find($id);
            $shift->delete();
            return redirect()->route('manage_workingshift')->with('success','Working shift delete successfully');
        }
    }
}
