<?php

namespace App\Models\GlobalSettingsModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicHoliday extends Model
{
    use HasFactory;
    protected $table = "academic_holidays";
    protected $fillable = [
        'type',
        'title',
        'status',
        
    ];
}
