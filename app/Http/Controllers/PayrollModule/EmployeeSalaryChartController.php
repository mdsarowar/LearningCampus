<?php

namespace App\Http\Controllers\PayrollModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PayrollModule\EmployeeSalaryChart;

class EmployeeSalaryChartController extends Controller
{
    public function employeeSalaryChart()
    {
        $emp_salary_charts = EmployeeSalaryChart::all();
        //return $emp_salary_charts;
        return view('admin.PayrollModule.EmployeeSalaryChart.employee_salary_chart',compact('emp_salary_charts'));
    }

    public function addEmployeeSalaryChart()
    {
        return view('admin.PayrollModule.EmployeeSalaryChart.add_employee_salary_chart');
    }

    public function insertEmployeeSalaryChart(Request $request)
    {
        // $validator =   $request->validate([
        //     'employee_type' => 'required',
        //     'payroll_head' => 'required',
        //     'status' => 'required'

        // ]);
        $emp_salary_charts = new EmployeeSalaryChart();
        $emp_salary_charts->employee_type = $request->input('employee_type');
        $emp_salary_charts->payroll_head = $request->input('payroll_head');
        $emp_salary_charts->status = $request->input('status');
        //return $emp_salary_charts;
        $emp_salary_charts->save();
        return redirect()->route('employee_salary_chart')->with('success', 'Employee Salary Insert Successfully');
    }


    public function deleteEmployeeSalaryChart(Request $request, $id)
    {
        $emp_salary_charts = EmployeeSalaryChart::find($id);
        $emp_salary_charts->delete();
        return redirect()->route('employee_salary_chart')->with('success', 'Employee Salary Deleted Successfully');
    }
    
}
