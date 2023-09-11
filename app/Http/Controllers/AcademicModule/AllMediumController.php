<?php

namespace App\Http\Controllers\AcademicModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllMediumController extends Controller
{
    public function allMedium()
    {
        $getMediumInfo = DB::select('SELECT * FROM mediums');
        $mediumArray = json_decode(json_encode($getMediumInfo), true);

        return view('admin.AcademicModule.allmedium', ['mediumInfo' => $mediumArray]);
    }


    public function allMediumSearch(Request $request)
    {
        $medium_name = $request->input('medium_name');
        $medium_code = $request->input('medium_code');
        $status = $request->input('status');

        $query = "SELECT * FROM mediums WHERE 1=1";

        if (!empty($medium_name)) {
            $query .= " AND medium_name = '$medium_name'";
        }

        if (!empty($medium_code)) {
            $query .= " AND medium_code = '$medium_code'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }

    public function editMedium(Request $request)
    {
        $medium_id = $request->medium_id;

        $getMediumInfo = DB::select('SELECT * FROM mediums WHERE medium_id = ?', [$medium_id]);
        $mediumArray = json_decode(json_encode($getMediumInfo), true);

        return view('admin.AcademicModule.editMedium', ['mediumInfo' => $mediumArray]);
    }

    public function editMediumSubmit(Request $request)
    {
        $medium_id = $request->medium_id;

        date_default_timezone_set('Asia/Dhaka');
        $modified_by = 'Learning Campus';
        $modified_at = date('j F Y, h:i A');

        $medium_name = $request->medium_name ?? $request->current_medium_name;
        $medium_code = $request->medium_code ?? $request->current_medium_code;
        $status = $request->status ?? $request->current_status;

        $updateData = [
            'medium_name' => $medium_name,
            'medium_code' => $medium_code,
            'status' => $status,
            'modified_by' => $modified_by,
            'modified_at' => $modified_at,
        ];

        $numUpdated = DB::table('mediums')
            ->where('medium_id', $medium_id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Medium updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update medium');
        }
    }

    public function viewMedium(Request $request)
    {
        $medium_id = $request->medium_id;

        $getMediumInfo = DB::select('SELECT * FROM mediums WHERE medium_id = ?', [$medium_id]);
        $mediumArray = json_decode(json_encode($getMediumInfo), true);

        return view('admin.AcademicModule.viewMedium', ['mediumInfo' => $mediumArray]);
    }

    public function addMedium()
    {
        return view('admin.AcademicModule.addmedium');
    }

    public function addMediumSubmit(Request $request)
    {
        $medium_name = $request->medium_name;
        $medium_code = $request->medium_code;
        $status = $request->status;

        date_default_timezone_set('Asia/Dhaka');
        $created_by = 'Learning Campus';
        $created_at = date('j F Y, h:i A');
        $modified_by = '';
        $modified_at = '';

        $insertData = DB::insert('INSERT INTO mediums (medium_name, medium_code, status, created_at, created_by, modified_at, modified_by) 
        VALUES (?,?,?,?,?,?,?)', [
            $medium_name, $medium_code,
            $status, $created_at, $created_by, $modified_at, $modified_by
        ]);

        if ($insertData) {
            return redirect(route('add_medium'))->with('success', 'Medium created successfully');
        } else {
            return redirect(route('add_medium'))->with('error', 'Failed to create medium');
        }
    }

    public function deleteMedium(Request $request)
    {
        $medium_id = $request->label_id;

        $query = DB::table('mediums')->where('medium_id', $medium_id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Medium deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete medium');
        }
    }
}
