<?php

namespace App\Models\PayrollModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalaryReport extends Model
{
    use HasFactory;
    protected $table = "employee_salary_reports";
    protected $fillable = [
        'employee_type',
        'month',
        'year',
    ];
}
