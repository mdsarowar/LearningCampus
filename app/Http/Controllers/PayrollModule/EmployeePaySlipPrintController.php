<?php

namespace App\Http\Controllers\PayrollModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeePaySlipPrintController extends Controller
{
    public function employeePaySlipPrint()
    {
        return view('admin.PayrollModule.employee_pay_slip_print');
    }
}
