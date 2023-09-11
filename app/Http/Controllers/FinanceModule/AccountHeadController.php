<?php

namespace App\Http\Controllers\FinanceModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountHeadController extends Controller
{
    public function accountHead()
    {
        $accountsData = DB::select('select * from finances');
        $accountsArray = json_decode(json_encode($accountsData), true);

        return view('admin.FinanceModule.account_head', ['accountsData' => $accountsArray]);
    }

    public function accountHeadDelete(Request $request)
    {
        $account_code = $request->label_id;
        $deleteAccount = DB::delete("DELETE FROM finances WHERE account_code = ?", [$account_code]);

        if ($deleteAccount) {
            return redirect()->back()->with('success', 'Account head deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete account head');
        }
    }

    public function accountHeadSearch(Request $request)
    {
        $account_code = $request->input('account_code');
        $account_type = $request->input('account_type');
        $account_category = $request->input('account_category');
        $account_parents = $request->input('account_parents');
        $account_head = $request->input('account_head');
        $account_period = $request->input('account_period');
        $has_child = $request->input('has_child');
        $status = $request->input('status');

        $query = "SELECT * FROM finances WHERE 1=1";

        if ($account_type !== 'all') {
            $query .= " AND account_type = '$account_type'";
        }

        if ($account_category !== 'all') {
            $query .= " AND account_category = '$account_category'";
        }

        if ($account_parents !== 'all') {
            $query .= " AND account_parents = '$account_parents'";
        }

        if (!empty($account_code)) {
            $query .= " AND account_code = '$account_code'";
        }

        if (!empty($account_head)) {
            $query .= " AND account_head = '$account_head'";
        }

        if ($account_period !== 'all') {
            $query .= " AND account_period = '$account_period'";
        }

        if ($has_child !== 'all') {
            $query .= " AND has_child = '$has_child'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }
}
