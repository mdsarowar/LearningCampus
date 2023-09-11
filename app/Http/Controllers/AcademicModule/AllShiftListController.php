<?php

namespace App\Http\Controllers\AcademicModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllShiftListController extends Controller
{
    public function allShiftList()
    {
        $getShiftInfo = DB::select('SELECT * FROM shifts');
        $shiftArray = json_decode(json_encode($getShiftInfo), true);

        return view('admin.AcademicModule.allshiftlist', ['shiftInfo' => $shiftArray]); 
    }

    public function allShiftSearch(Request $request)
    {
        $class_type = $request->class_type;
        $shift_name = $request->shift_name;
        $class_type = $request->class_type;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $green_limit = $request->green_limit;
        $orange_limit = $request->orange_limit;
        $red_limit = $request->red_limit;
        $status = $request->status;

        $query = "SELECT * FROM shifts WHERE 1=1";

        if ($class_type !== 'all') {
            $query .= " AND class_type = '$class_type'";
        }

        if (!empty($shift_name)) {
            $query .= " AND shift_name = '$shift_name'";
        }
        if (!empty($start_time)) {
            $query .= " AND TIME(start_time) = TIME('$start_time')";
        }

        if (!empty($end_time)) {
            $query .= " AND TIME(end_time) = TIME('$end_time')";
        }

        if (!empty($green_limit)) {
            $query .= " AND green_limit = '$green_limit'";
        }

        if (!empty($orange_limit)) {
            $query .= " AND orange_limit = '$orange_limit'";
        }

        if (!empty($red_limit)) {
            $query .= " AND red_limit = '$red_limit'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }

    public function editShift(Request $request)
    {
        $shift_id = $request->shift_id;

        $getShiftInfo = DB::select('SELECT * FROM shifts WHERE shift_id = ?', [$shift_id]);
        $shiftArray = json_decode(json_encode($getShiftInfo), true);

        return view('admin.AcademicModule.editShift', ['shiftInfo' => $shiftArray]);
    }

    public function editShiftSubmit(Request $request)
    {
        $shift_id = $request->shift_id;

        date_default_timezone_set('Asia/Dhaka');
        $modified_by = 'Learning Campus';
        $modified_at = date('j F Y, h:i A');

        $class_type = $request->class_type ?? $request->current_class_type;
        $shift_name = $request->shift_name ?? $request->current_shift_name;
        $start_time = $request->start_time ?? $request->current_start_time;
        $end_time = $request->end_time ?? $request->current_end_time;
        $green_limit = $request->green_limit ?? $request->current_green_limit;
        $orange_limit = $request->orange_limit ?? $request->current_orange_limit;
        $red_limit = $request->red_limit ?? $request->current_red_limit;
        $status = $request->status ?? $request->current_status;


        $updateData = [
            'class_type' => $class_type,
            'shift_name' => $shift_name,
            'start_time' => $start_time,
            'end_time' => $end_time,
            'green_limit' => $green_limit,
            'orange_limit' => $orange_limit,
            'red_limit' => $red_limit,
            'status' => $status,
            'modified_by' => $modified_by,
            'modified_at' => $modified_at,
        ];

        $numUpdated = DB::table('shifts')
        ->where('shift_id', $shift_id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Shift updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update shift');
        }
    }

    public function viewShift(Request $request)
    {
        $shift_id = $request->shift_id;
        $getShiftInfo = DB::select('SELECT * FROM shifts WHERE shift_id = ?', [$shift_id]);
        $shiftArray = json_decode(json_encode($getShiftInfo), true);

        return view('admin.AcademicModule.viewShift', ['shiftInfo' => $shiftArray]);
    }

    public function addShift()
    {
        $getMediumInfo = DB::select('SELECT * FROM mediums');
        $mediumArray = json_decode(json_encode($getMediumInfo), true);

        return view('admin.AcademicModule.addshift', ['mediumList' => $mediumArray]); 
    }

    public function addShiftSubmit(Request $request)
    {
        $class_type = $request->class_type;
        $shift_name = $request->shift_name;
        $class_type = $request->class_type;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $green_limit = $request->green_limit;
        $orange_limit = $request->orange_limit;
        $red_limit = $request->red_limit;
        $status = $request->status;

        date_default_timezone_set('Asia/Dhaka');
        $created_by = 'Learning Campus';
        $created_at = date('j F Y, h:i A');
        $modified_by = '';
        $modified_at = '';

        $insertData = DB::insert('INSERT INTO shifts 
            (shift_name, class_type, start_time, end_time, green_limit, orange_limit, red_limit, status, created_at, created_by, modified_at, modified_by)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?)', [
            $shift_name, $class_type, $start_time, $end_time, $green_limit, $orange_limit, $red_limit,
            $status, $created_at, $created_by, $modified_at, $modified_by
        ]);

        if ($insertData) {
            return redirect(route('add_shift'))->with('success', 'Shift created successfully');
        } else {
            return redirect(route('add_shift'))->with('error', 'Failed to create shift');
        }
    }

    public function deleteShift(Request $request)
    {
        $shift_id = $request->label_id;

        $query = DB::table('shifts')->where('shift_id', $shift_id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Shift deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete shift');
        }
    }
}
