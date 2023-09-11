<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manage_leave extends Model
{
    use HasFactory;

    function rel_to_leave_type(){
        return $this->belongsTo(leave_module::class, 'leave_type_id');
    }

    function rel_to_employeetype(){
        return $this->belongsTo(Employeetype::class, 'employeetype_id');
    }

    protected $guarded = ['id'];
}
