<?php

namespace App\Models\PayrollModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalaryPayment extends Model
{
    use HasFactory;
    protected $table = "employee_salary_payments";
    protected $fillable = [
        'employee_type',
        'month',
        'year',
    ];
}
