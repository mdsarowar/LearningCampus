<?php

namespace App\Http\Controllers\PayrollModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PayrollModule\PayrollHead;
use Illuminate\Support\Facades\DB;

class PayrollHeadController extends Controller
{

    public function payrollHead()
    {
        $payrollsData = DB::select('select * from payroll_heads');
        $payrollsArray = json_decode(json_encode($payrollsData), true);
        return view('admin.PayrollModule.PayrollHead.payroll_head', ['payrollsData' => $payrollsArray]);
    }


    public function deletePayrolHead(Request $request)
    {
        $id = $request->label_id;

        $query = DB::table('payroll_heads')->where('id', $id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Payroll head deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete Payroll head');
        }
    }

    public function payrollHeadSearch(Request $request)
    {
        $categories = $request->input('categories');
        $parents = $request->input('parents');
        $heads = $request->input('heads');
        $payroll_code = $request->input('payroll_code');
        $payroll_period = $request->input('payroll_period');
        $has_child = $request->input('has_child');
        $absent_deductions = $request->input('absent_deductions');
        $status = $request->input('status');

        $query = "SELECT * FROM payroll_heads WHERE 1=1";

        if ($categories !== 'all') {
            $query .= " AND categories = '$categories'";
        }

        if ($parents !== 'all') {
            $query .= " AND parents = '$parents'";
        }

        if (!empty($payroll_code)) {
            $query .= " AND payroll_code = '$payroll_code'";
        }

        if (!empty($heads)) {
            $query .= " AND heads = '$heads'";
        }

        if ($payroll_period !== 'all') {
            $query .= " AND payroll_period = '$payroll_period'";
        }

        if ($has_child !== 'all') {
            $query .= " AND has_child = '$has_child'";
        }

        if ($absent_deductions !== 'all') {
            $query .= " AND absent_deductions = '$absent_deductions'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }


    public function addPayrollHead()
    {
        return view('admin.PayrollModule.PayrollHead.add_payroll_head');
    }



    public function addPayrollSubmit(Request $request)
    {
        $categories = $request->input('categories');
        $absent_deductions = $request->input('absent_deductions');
        $parents = $request->input('parents');
        $heads = $request->input('heads');
        $payroll_code = $request->input('payroll_code');
        $payroll_period = $request->input('payroll_period');
        $has_child = $request->input('has_child');
        $status = $request->input('status');
        $created_by = '';
        $created_at = date('j F Y, h:i A');
        $modified_by = '';
        $modified_at = date('j F Y, h:i A');

        $insertData = DB::insert(
            'insert into payroll_heads (categories, absent_deductions, parents, heads, payroll_code,payroll_period, has_child, status, created_by, created_at, modified_by, modified_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$categories, $absent_deductions, $parents, $heads, $payroll_code,  $payroll_period, $has_child, $status, $created_by, $created_at, $modified_by, $modified_at]
        );

        if ($insertData) {
            return redirect(route('payroll_head'))->with('success', 'Account head created successfully');
        } else {
            return redirect(route('payroll_head'))->with('error', 'Failed to create account head');
        }
    }


    public function viewPayrollHead(Request $request)
    {
        $id = $request->id;

        $payroll = DB::select('SELECT * FROM payroll_heads WHERE id = ?', [$id]);
        $payrollArray = json_decode(json_encode($payroll), true);

        return view('admin.PayrollModule.PayrollHead.view_payroll_head', ['payroll' => $payrollArray]);
    }
    

    public function editPayrollHead(Request $request)
    {
        $id = $request->id;

        $payroll = DB::select('SELECT * FROM payroll_heads WHERE id = ?', [$id]);
        $payrollArray = json_decode(json_encode($payroll), true);

        return view('admin.PayrollModule.PayrollHead.edit_payroll_head', ['payroll' => $payrollArray]);
    }


    public function updatePayrollHeadSubmit1(Request $request)
    {
        $categories = $request->input('categories');
        $absent_deductions = $request->input('absent_deductions');
        $parents = $request->input('parents');
        $heads = $request->input('heads');
        $payroll_code = $request->input('payroll_code');
        $payroll_period = $request->input('payroll_period');
        $has_child = $request->input('has_child');
        $status = $request->input('status');

        $modified_by = '';
        $modified_at = date('j F Y, h:i A');

        $updateData = DB::update(
            'UPDATE payroll_heads
            SET categories = ?, absent_deductions = ?, parents = ?, heads = ?, payroll_period = ?, has_child = ?, status = ?, modified_by = ?, modified_at = ?
            WHERE payroll_code = ?',
            [$categories, $absent_deductions, $parents, $heads, $payroll_period, $has_child, $status, $modified_by, $modified_at, $payroll_code]
        );


        if ($updateData) {
            return redirect(route('update_payroll_head'))->with('success', 'Payroll head updated successfully');
        } else {
            return redirect(route('update_payroll_head'))->with('error', 'Failed to update payroll head');
        }
    }


    public function updatePayrollHeadSubmit(Request $request)
    {

        $id = $request->id;
        
        $categories = $request->categories ?? $request->current_categories;
        $absent_deductions = $request->absent_deductions ?? $request->current_absent_deductions;
        $parents = $request->parents ?? $request->current_parents;
        $heads = $request->heads ?? $request->current_heads;
        $payroll_code = $request->payroll_code ?? $request->current_payroll_code;
        $payroll_period = $request->payroll_period ?? $request->current_payroll_period;
        $has_child = $request->has_child ?? $request->current_has_child;
        $status = $request->status ?? $request->current_status;
        $created_by = $request->created_by ?? $request->current_created_by;
        $created_at = $request->created_at ?? $request->current_created_at;
        $modified_by = $request->modified_by ?? $request->current_modified_by;
        $modified_at = $request->modified_at ?? $request->current_modified_at;

        $updateData = [
            'categories' => $categories,
            'absent_deductions' => $absent_deductions,
            'parents' => $parents,
            'heads' => $heads,
            'payroll_code' => $payroll_code,
            'payroll_period' => $payroll_period,
            'has_child' => $has_child,
            'created_by' => $created_by,
            'created_at' => $created_at,
            'modified_by' => $modified_by,
            'modified_at' => $modified_at,
            'status' => $status,
        ];

        $numUpdated = DB::table('payroll_heads')
        ->where('id', $id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Payroll Head updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update Payroll Head');
        }
    }
    
}
