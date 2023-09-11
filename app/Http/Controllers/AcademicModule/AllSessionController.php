<?php

namespace App\Http\Controllers\AcademicModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllSessionController extends Controller
{
    public function allSession()
    {
        $getSessionInfo = DB::select('SELECT * FROM sessions');
        $sessionArray = json_decode(json_encode($getSessionInfo), true);

        return view('admin.AcademicModule.allsession', ['sessionInfo' => $sessionArray]);
    }

    public function allSessionSearch(Request $request)
    {
        $session_name = $request->input('session_name');
        $session_code = $request->input('session_code');
        $is_current_session = $request->input('is_current_session');
        $is_fiscal_year = $request->input('is_fiscal_year');
        $result_type = $request->input('result_type');
        $status = $request->input('status');

        $query = "SELECT * FROM sessions WHERE 1=1";

        if ($is_current_session !== 'all') {
            $query .= " AND is_current_session = '$is_current_session'";
        }

        if ($is_fiscal_year !== 'all') {
            $query .= " AND is_fiscal_year = '$is_fiscal_year'";
        }

        if ($result_type !== 'all') {
            $query .= " AND result_type = '$result_type'";
        }

        if (!empty($session_name)) {
            $query .= " AND session_name = '$session_name'";
        }

        if (!empty($session_code)) {
            $query .= " AND session_code = '$session_code'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }

    public function editSession(Request $request)
    {
        $getSessionInfo = DB::select('SELECT * FROM sessions');
        $sessionArray = json_decode(json_encode($getSessionInfo), true);

        return view('admin.AcademicModule.editSession', ['sessionInfo' => $sessionArray]);
    }

    public function editSessionSubmit(Request $request)
    {
        $session_id = $request->session_id;

        date_default_timezone_set('Asia/Dhaka');
        $modified_by = 'Learning Campus';
        $modified_at = date('j F Y, h:i A');

        $session_name = $request->session_name ?? $request->current_session_name;
        $session_code = $request->session_code ?? $request->current_session_code;
        $is_fiscal_year = $request->is_fiscal_year ?? $request->current_is_fiscal_year;
        $is_current_session = $request->is_current_session ?? $request->current_is_current_session;
        $result_type = $request->result_type ?? $request->current_result_type;
        $status = $request->status ?? $request->current_status;

        $updateData = [
            'session_name' => $session_name,
            'session_code' => $session_code,
            'is_fiscal_year' => $is_fiscal_year,
            'is_current_session' => $is_current_session,
            'result_type' => $result_type,
            'status' => $status,
            'modified_by' => $modified_by,
            'modified_at' => $modified_at,
        ];

        $numUpdated = DB::table('sessions')
            ->where('session_id', $session_id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Session updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update session');
        }
    }

    public function viewSession(Request $request)
    {
        $session_id = $request->session_id;

        $getSessionInfo = DB::select('SELECT * FROM sessions WHERE session_id = ?', [$session_id]);
        $sessionArray = json_decode(json_encode($getSessionInfo), true);

        return view('admin.AcademicModule.viewSession', ['sessionInfo' => $sessionArray]);
    }

    public function addSession()
    {
        return view('admin.AcademicModule.addsession');
    }

    public function addSessionSubmit(Request $request)
    {
        $session_name = $request->session_name;
        $session_code = $request->session_code;
        $is_fiscal_year = $request->is_fiscal_year;
        $is_current_session = $request->is_current_session;
        $result_type = $request->result_type;
        $status = $request->status;

        date_default_timezone_set('Asia/Dhaka');
        $created_by = 'Learning Campus';
        $created_at = date('j F Y, h:i A');
        $modified_by = '';
        $modified_at = '';

        $insertData = DB::insert('INSERT INTO sessions 
        (session_name, session_code, is_fiscal_year, is_current_session, result_type, status, created_at, created_by, modified_at, modified_by) 
        VALUES (?,?,?,?,?,?,?,?,?,?)', [
            $session_name, $session_code, $is_fiscal_year, $is_current_session, $result_type,
            $status, $created_at, $created_by, $modified_at, $modified_by
        ]);

        if ($insertData) {
            return redirect(route('add_session'))->with('success', 'Session created successfully');
        } else {
            return redirect(route('add_session'))->with('error', 'Failed to create session');
        }
    }

    public function deleteSession(Request $request)
    {
        $session_id = $request->label_id;

        $query = DB::table('sessions')->where('session_id', $session_id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Session deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete session');
        }
    }
}
