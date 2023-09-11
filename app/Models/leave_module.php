<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leave_module extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_employeetype(){
        return $this->belongsTo(Employeetype::class, 'employeetype_id');
    }
}
