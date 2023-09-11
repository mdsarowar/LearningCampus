<?php

namespace App\Models\PayrollModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePaySlipPrint extends Model
{
    use HasFactory;
    protected $table = "employee_pay_slip_prints";
    protected $fillable = [
        'employee_type',
        'month',
        'year',
    ];
}
