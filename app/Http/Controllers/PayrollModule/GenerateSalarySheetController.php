<?php

namespace App\Http\Controllers\PayrollModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerateSalarySheetController extends Controller
{
    public function generateSalarySheet()
    {
        return view('admin.PayrollModule.generate_salary_sheet');
    }
}
