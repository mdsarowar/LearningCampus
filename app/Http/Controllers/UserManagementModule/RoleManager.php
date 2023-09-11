<?php

namespace App\Http\Controllers\UserManagementModule;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RoleManager extends Controller
{
    public function getUser()
    {
        return Auth::guard('web')->user();
    }
}

