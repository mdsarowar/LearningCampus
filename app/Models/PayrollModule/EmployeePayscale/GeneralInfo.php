<?php

namespace App\Models\PayrollModule\EmployeePayscale;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInfo extends Model
{
    use HasFactory;
    protected $table = "employee_payscale_general_infos";
    protected $fillable = [
        'pay_scale_title',
        'employee_type',
        'basic_salary',
        'status',
        
    ];
    
}
