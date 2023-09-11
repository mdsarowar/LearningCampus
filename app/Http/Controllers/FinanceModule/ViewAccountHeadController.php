<?php

namespace App\Http\Controllers\FinanceModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewAccountHeadController extends Controller
{
    public function viewAccount(Request $request)
    {
        $account_code = $request->input('account_code');
        $account = DB::select("SELECT * FROM finances WHERE account_code = ?", [$account_code]);
        $accountInfo = json_decode(json_encode($account), true);

        return view('admin.FinanceModule.account_head_view', ['accountInfo' => $accountInfo]);
    }
}
