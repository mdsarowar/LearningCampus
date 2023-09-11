<?php

namespace App\Http\Controllers\GlobalSettingsModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function smsSettings()
    {
        return view('admin.GlobalSettingsModule.smssettings');
    }
}
