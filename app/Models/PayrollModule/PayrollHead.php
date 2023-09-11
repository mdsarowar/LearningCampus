<?php

namespace App\Models\PayrollModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollHead extends Model
{
    use HasFactory;
    protected $table = "payroll_heads";
    protected $fillable = [
        'categories',
        'absent_deductions',
        'parents',
        'heads',
        'payroll_code',
        'payroll_period',
        'has_child',
        'status',
    ];
}
