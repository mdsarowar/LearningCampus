<?php

namespace App\Http\Controllers\PayrollModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeSalaryPaymentController extends Controller
{
    public function employeeSalaryPayment()
    {
        return view('admin.PayrollModule.employee_salary_payment');
    }
}
