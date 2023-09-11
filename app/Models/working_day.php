<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class working_day extends Model
{
    use HasFactory;

    function rel_to_exam_term(){
        return $this->belongsTo(exam_term::class, 'exam_term_id');
    }

    protected $guarded = ['id'];
}
