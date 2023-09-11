<?php

namespace App\Models\PayrollModule\EmployeePayscale;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatInfo extends Model
{
    use HasFactory;
    protected $table = "employee_payscale_chat_infos";
    protected $fillable = [
        'fee_type',
        'head_type',
        'amount',
        
    ];
}
