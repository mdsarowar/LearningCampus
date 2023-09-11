<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hw_submit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    function rel_to_hw(){
        return $this->belongsTo(home_work::class, 'home_work_id');
    }
}
