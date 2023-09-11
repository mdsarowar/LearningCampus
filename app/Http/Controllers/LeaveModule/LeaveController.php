<?php

namespace App\Http\Controllers\LeaveModule;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\leave_module;
use App\Models\manage_leave;
use App\Models\Employeetype;

class LeaveController extends Controller
{
    function leave_entry(){
        $leave = leave_module::all();
        $emp_type = Employeetype::all();
        return view('admin.LeaveModule.leave_entry', [
            'leave'=> $leave,
            'emp_type'=> $emp_type,
        ]);
    }  
    
    function leave_type(){
        $leave = leave_module::all();
        // $emp_type = Employeetype::all();
        return view('admin.LeaveModule.Leave_type.leave_type', [
            'leave'=> $leave,
            // 'emp_type'=> $emp_type,
        ]);
    } 

    function manage_leave(){
        $leave = leave_module::all();
        $manage = manage_leave::all();
        $emp_type = Employeetype::all();
        return view('admin.LeaveModule.Manage_leave.manage_leave', [
            'leave'=> $leave,
            'manage'=> $manage,
            'emp_type'=> $emp_type,
        ]);
    } 

    function add_leave_type(){
        $emp_type = Employeetype::all();
        return view('admin.LeaveModule.Leave_type.add_leave_type', [
            'emp_type'=> $emp_type,
        ]);
    } 

    function leave_type_store(Request $request){
        $id = leave_module::insertGetId([
            'employeetype_id'=>$request->employeetype_id,
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'leave_days'=>$request->leave_days,
            'status'=>$request->status,
        ]);
        return back();
    }
    function leave_store(Request $request){
        $id = manage_leave::insertGetId([
            'employeetype_id'=>$request->employeetype_id,
            'leave_type_id'=>$request->leave_type_id,
            'from_date'=>$request->from_date,
            'end_date'=>$request->end_date,
            'total_days'=>$request->total_days,
            'status'=>$request->status,
        ]);
        return back();
    }

    function leave_type_delete($leave_type_id){
        leave_module::find($leave_type_id)->delete();
        return back();
    }
    function manage_leave_delete($manage_leave_id){
        manage_leave::find($manage_leave_id)->delete();
        return back();
    }

    function view_leave_type($leave_type_id){
        $emp_type = Employeetype::all();
        $leave = leave_module::find($leave_type_id);
        return view('admin.LeaveModule.Leave_type.view_leave_type',[
            'leave'=>$leave,   
            'emp_type'=> $emp_type,
        ]);
    }
    function view_manage_leave($manage_leave_id){
        $emp_type = Employeetype::all();
        $manage = manage_leave::find($manage_leave_id);
        return view('admin.LeaveModule.Manage_leave.view_manage_leave',[
            'manage'=>$manage,   
            'emp_type'=> $emp_type,
        ]);
    }

    function edit_leave_type($leave_type_id){
        $emp_type = Employeetype::all();
        $leave_info = leave_module::find($leave_type_id);
        return view('admin.LeaveModule.Leave_type.edit_leave_type',[
            'leave_info'=>$leave_info, 
            'emp_type'=> $emp_type,  
        ]);

    }
    function edit_manage_leave($manage_leave_id){
        $emp_type = Employeetype::all();
        $leave = leave_module::all();
        $manage_info = manage_leave::find($manage_leave_id);
        return view('admin.LeaveModule.Manage_leave.edit_manage_leave',[
            'manage_info'=>$manage_info, 
            'leave'=>$leave,
            'emp_type'=> $emp_type,  
        ]);

    }

    function update_leave_type(Request $request){
        leave_module::find($request->leave_type_id)->update([
            'employeetype_id'=>$request->employeetype_id,
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'leave_days'=>$request->leave_days,
            'status'=>$request->status,
        ]);
        return back();
    }
    function update_manage_leave(Request $request){
        manage_leave::find($request->manage_leave_id)->update([
            'employeetype_id'=>$request->employeetype_id,
            'employee'=>$request->employee,
            'leave_type'=>$request->leave_type,
            'from_date'=>$request->from_date,
            'end_date'=>$request->end_date,
            'total_days'=>$request->total_days,
            'status'=>$request->status,
        ]);
        return back();
    }


}
