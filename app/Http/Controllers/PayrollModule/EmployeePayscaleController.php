<?php

namespace App\Http\Controllers\PayrollModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PayrollModule\EmployeePayscale\GeneralInfo;
use App\Models\PayrollModule\EmployeePayscale\ChatInfo;

class EmployeePayscaleController extends Controller
{
    public function employeePayscale()
    {
        $general_infos = GeneralInfo::all();
        return view('admin.PayrollModule.EmployeePayscale.employee_payscale',compact('general_infos'));
    }

    public function addemployeePayscale()
    {
        return view('admin.PayrollModule.EmployeePayscale.add_employee_payscale');
    }

    public function insertGeneralInfo(Request $request)
    {
        // $validator =   $request->validate([
        //     'pay_scale_title' => 'required',
        //     'employee_type' => 'required',
        //     'basic_salary' => 'required',
        //     'status' => 'required'

        // ]);
        $general_infos = new GeneralInfo();
        $general_infos->pay_scale_title = $request->pay_scale_title;
        $general_infos->employee_type = $request->input('employee_type');
        $general_infos->basic_salary = $request->input('basic_salary');
        $general_infos->status = $request->input('status');
        $general_infos->save();
        return redirect()->route('employee_payscale')->with('success', 'General Information Insert Successfully');
    }

    public function viewemployeePayscale(Request $request, $id, $pay_scale_title)
    {
        $general_infos = GeneralInfo::find($id);
        return view('admin.PayrollModule.EmployeePayscale.employee_payscale_view',compact('general_infos'));
    }

    public function editGeneralInfo($id)
    {
        $general_infos = GeneralInfo::find($id);
        //return $general_infos;
        return view('admin.PayrollModule.EmployeePayscale.edit_employee_payscale',compact('general_infos'));
    }
    

    public function insertChatInfo(Request $request)
    {
        // $validator =   $request->validate([
        //     'fee_type' => 'required',
        //     'head_type' => 'required',
        //     'amount' => 'required'

        // ]);
        $chat_infos = new ChatInfo();
        $chat_infos->fee_type = $request->fee_type;
        $chat_infos->head_type = $request->input('head_type');
        $chat_infos->amount = $request->input('amount');
        $chat_infos->save();
        return redirect()->route('employee_payscale')->with('success', 'Chat Information Insert Successfully');
    }


    public function deleteEmployeePayscale(Request $request, $id)
    {
        $general_infos = GeneralInfo::find($id);
        $general_infos->delete();
        return redirect()->route('employee_payscale')->with('success', 'Employee Payscale Deleted Successfully');
    }

    
}
