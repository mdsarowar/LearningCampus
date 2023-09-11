<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInformation extends Model
{
    use HasFactory;
    protected $table = "general_informations";
    protected $fillable = [
        'institute_id',
        'eiin_no',
        'institue_name',
        'slogan',
        'email',
        'favicon',
        'banner',
        'logo',
        'short_description',
        'why_choose_institute',
    ];
}
