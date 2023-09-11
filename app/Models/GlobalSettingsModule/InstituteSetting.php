<?php

namespace App\Models\GlobalSettingsModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteSetting extends Model
{
    use HasFactory;
    protected $table = "institute_settings";
    protected $fillable = [
        'facebook_page',
        'youtube_video',
        'admin_theme',
        'website_theme',
    ];
}
