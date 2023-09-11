<?php

namespace App\Http\Controllers\PayrollModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeSalaryReportController extends Controller
{
    public function employeeSalaryReport()
    {
        return view('admin.PayrollModule.employee_salary_report');
    }
}
