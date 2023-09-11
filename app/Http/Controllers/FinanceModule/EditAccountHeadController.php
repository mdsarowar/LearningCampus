<?php

namespace App\Http\Controllers\FinanceModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditAccountHeadController extends Controller
{
    public function editAccount(Request $request)
    {
        $account_code = $request->input('account_code');
        $getAccountHead = DB::select('SELECT * FROM finances WHERE account_code = ?', [$account_code]);
        $ac_head_array = json_decode(json_encode($getAccountHead), true);
        return view('admin.FinanceModule.account_head_edit', ['account_head_info' => $ac_head_array]);
    }

    public function editAccountSubmit(Request $request)
    {
        $account_code = $request->input('account_code');
        $account_type = $request->input('account_type') ?? $request->input('current_account_type');
        $account_category = $request->input('account_category') ?? $request->input('current_account_category');
        $account_parents = $request->input('account_parents') ?? $request->input('current_account_parents');
        $account_head = $request->input('account_head') ?? $request->input('current_account_head');
        $account_period = $request->input('account_period') ?? $request->input('current_account_period');
        $has_child = $request->input('has_child') ?? $request->input('current_has_child');
        $status = $request->input('status') ?? $request->input('current_status');

        date_default_timezone_set('Asia/Dhaka');
        $modified_by = 'Learning Campus';
        $modified_at = date('j F Y, h:i A');

        $updateData = [
            'account_type' => $account_type,
            'account_category' => $account_category,
            'account_parents' => $account_parents,
            'account_head' => $account_head,
            'account_period' => $account_period,
            'has_child' => $has_child,
            'status' => $status,
            'modified_by' => $modified_by,
            'modified_at' => $modified_at,
        ];

        $numUpdated = DB::table('finances')
        ->where('account_code', $account_code)
            ->update($updateData);


        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Account head updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update account head');
        }
    }
}
