<?php

namespace App\Models\PayrollModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalaryChart extends Model
{
    use HasFactory;
    protected $table = "employee_salary_charts";
    protected $fillable = [
        'employee_type',
        'payroll_head',
        'status',
    ];
}
