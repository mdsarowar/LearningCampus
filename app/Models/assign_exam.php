<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assign_exam extends Model
{
    use HasFactory;

    function rel_to_exam_term(){
        return $this->belongsTo(exam_term::class, 'exam_term_id');
    }

    function rel_to_exam_part(){
        return $this->belongsTo(exam_part::class, 'exam_part_id');
    }

    protected $guarded = ['id'];
}
