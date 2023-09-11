<?php

namespace App\Models\GlobalSettingsModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchDetails extends Model
{
    use HasFactory;
    protected $table = "branch_details";
    protected $fillable = [
        'short_name',
        'branch_name',
        'address',
        'city',
        'zip_code',
        'phone',
        'fax',
        'email',
        'signature',
        'holiday',
        'map_iframe',
        'status',
    ];
}
