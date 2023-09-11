<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam_routine_lower extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_exam_routine_upper(){
        return $this->belongsTo(exam_routine_upper::class, 'exam_routine_upper_id');
    }
}
