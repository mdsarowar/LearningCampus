<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam_attn extends Model
{
    use HasFactory;

    function rel_to_exam_term(){
        return $this->belongsTo(exam_term::class, 'exam_term_id');
    }

    function rel_to_seat_plan(){
        return $this->belongsTo(seat_plan::class, 'seat_plan_id');
    }

    protected $guarded = ['id'];
}
