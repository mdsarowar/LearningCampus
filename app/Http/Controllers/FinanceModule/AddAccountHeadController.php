<?php

namespace App\Http\Controllers\FinanceModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddAccountHeadController extends Controller
{
    public function addAccount()
    {
        return view('admin.FinanceModule.add_account_head');
    }

    public function addAccountSubmit(Request $request)
    {
        $account_type = $request->input('account_type');
        $account_category = $request->input('account_category');
        $account_parents = $request->input('account_parents');
        $account_code = $request->input('account_code');
        $account_head = $request->input('account_head');
        $account_period = $request->input('account_period');
        $has_child = $request->input('has_child');
        $status = $request->input('status');

        date_default_timezone_set('Asia/Dhaka');
        $created_by = 'Learning Campus';
        $created_at = date('j F Y, h:i A');
        $modified_by = '';
        $modified_at = '';

        $insertData = DB::insert(
            'insert into finances (account_type, account_category, account_parents, account_code, account_head, account_period, has_child, status, created_by, created_at, modified_by, modified_at) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$account_type, $account_category, $account_parents, $account_code, $account_head, $account_period, $has_child, $status, $created_by, $created_at, $modified_by, $modified_at]
        );

        if ($insertData) {
            return redirect(route('account.head.add'))->with('success', 'Account head created successfully');
        } else {
            return redirect(route('account.head.add'))->with('error', 'Failed to create account head');
        }
    }
}
