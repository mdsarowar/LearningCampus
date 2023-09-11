<?php

namespace App\Http\Controllers\HrModule;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\EmployeeEducations;
use App\Models\EmployeePersonals;
use App\Models\EmployeeProfessionals;
use App\Models\Employeetype;
use App\Models\Workingshifts;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class EmployeeController extends Controller
{
    public function index()
    {
        $male=EmployeePersonals::where('gender','male')->get();
        $female=EmployeePersonals::where('gender','female')->get();
        return view('admin.HR.employee.manage',[
            'employees'=>EmployeeProfessionals::all(),
            'male'=>count($male),
            'female'=>count($female),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.HR.employee.add',[
            'types'=>Employeetype::all(),
            'workingshifts'=>Workingshifts::all(),
            'designations'=>Designation::all()
        ]);
    }

    public function search()
    {
        return view('admin.HR.employee.employee_search');
    }
    public function idCard()
    {
        return view('admin.HR.employee.employee_id_card',[
            'employees'=>EmployeePersonals::all()
        ]);
    }
    public function viewIdCard(Request $request)
    {
//        return $request;
        $emp=$request->employee_id;
        $employee=EmployeeProfessionals::find($emp);
//        return $employee;
//        $emp_profe=EmployeeProfessionals::where('employee_id',$emp)->first();
//        return $emp_profe;
        return view('admin.HR.employee.view_id_card',[
            'employee'=>$employee
        ]);
    }
    public function employeeExport()
    {
        return view('admin.HR.employee.export');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return $request;
//        $em=new EmployeePersonals();
//        $em->save();
//        return $em->id;
//        $val1=[];
//        foreach ($request->inputs as $key=>$value){
//            $val1[]=$value;
//        }
//        return $val1;
        EmployeePersonals::saveData($request);
        return redirect()->route('manage_employee')->with('success','Working shift created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $employee=EmployeeProfessionals::find($id);
        $personal=$employee->employee_personals->id;
        $edu=EmployeeEducations::where('emp_id',$personal)->first();
//        return $edu;

        return view('admin.HR.employee.view',[
            'employee'=>$employee,
            'education'=>$edu,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        $teacher=Employeetype::where('name','teacher')->first();
//        $type=EmployeeProfessionals::where('type',$teacher->id)->get();
        return view('admin.HR.employee.edit',[
            'employee'=>EmployeeProfessionals::find($id),
            'types'=>Employeetype::all(),
            'workingshifts'=>Workingshifts::all(),
            'designations'=>Designation::all(),
//            'teachers'=>$type
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        return $request;
        EmployeePersonals::updateData($request,$id);
        return redirect()->route('manage_employee')->with('success','Working shift created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee=EmployeeProfessionals::find($id);
        $personal=$employee->employee_personals->id;
        $edu=EmployeeEducations::where('emp_id',$personal)->first();
//        return $edu->id;
        if (file_exists($employee->employee_personals->photo)){
            unlink($employee->employee_personals->photo);
        }
        $edu->delete();
        $employee->employee_personals->delete();
        $employee->delete();
        return redirect()->route('manage_employee')->with('success','Employee delete successfully');
    }

    public function print_employee(string $id){

        $employee=EmployeeProfessionals::find($id);
        $personal=$employee->employee_personals->id;
        $edu=EmployeeEducations::where('emp_id',$personal)->first();
//        return $edu;

//        return view('admin.HR.employee.view',[
//            'employee'=>$employee,
//            'education'=>$edu,
//        ]);

        $pdf = Pdf::loadView('admin.HR.employee.print_employee',[
            'employee'=>$employee,
            'education'=>$edu,
        ]);
        return $pdf->stream('employee.pdf');
    }
}
