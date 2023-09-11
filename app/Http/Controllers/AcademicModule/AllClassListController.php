<?php

namespace App\Http\Controllers\AcademicModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllClassListController extends Controller
{
    public function allClassList()
    {
        $getClassInfo = DB::select('SELECT * FROM classes');
        $classArray = json_decode(json_encode($getClassInfo), true);

        return view('admin.AcademicModule.allclasslist', ['classInfo' => $classArray]);
    }

    public function allClassSearch(Request $request)
    {
        $class_type = $request->class_type;
        $class_name = $request->class_name;
        $class_rank = $request->class_rank;
        $class_code = $request->class_code;
        $hasExtraSubject = $request->hasExtraSubject;
        $status = $request->status;

        $query = "SELECT * FROM classes WHERE 1=1";

        if ($class_type !== 'all') {
            $query .= " AND class_type = '$class_type'";
        }

        if ($hasExtraSubject !== 'all') {
            $query .= " AND hasExtraSubject = '$hasExtraSubject'";
        }

        if (!empty($class_name)) {
            $query .= " AND green_limit = '$class_name'";
        }

        if (!empty($class_rank)) {
            $query .= " AND class_rank = '$class_rank'";
        }

        if (!empty($class_code)) {
            $query .= " AND class_code = '$class_code'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }

    public function editClass(Request $request)
    {
        $class_id = $request->class_id;

        $getClassInfo = DB::select('SELECT * FROM classes WHERE class_id = ?', [$class_id]);
        $classArray = json_decode(json_encode($getClassInfo), true);

        $getMediumInfo = DB::select('SELECT * FROM mediums');
        $mediumArray = json_decode(json_encode($getMediumInfo), true);

        return view('admin.AcademicModule.editClass', [
            'mediumList' => $mediumArray,
            'classInfo' => $classArray
        ]);
    }

    public function editClassSubmit(Request $request)
    {
        $class_id = $request->class_id;

        date_default_timezone_set('Asia/Dhaka');
        $modified_by = 'Learning Campus';
        $modified_at = date('j F Y, h:i A');

        $class_type = $request->input('class_type') ?? $request->input('current_class_type');
        $class_name = $request->input('class_name') ?? $request->input('current_class_name');
        $class_rank = $request->input('class_rank') ?? $request->input('current_class_rank');
        $class_code = $request->input('class_code') ?? $request->input('current_class_code');
        $hasExtraSubject = $request->input('hasExtraSubject') ?? $request->input('current_hasExtraSubject');
        $status = $request->input('status') ?? $request->input('current_status');



        $updateData = [
            'class_type' => $class_type,
            'class_name' => $class_name,
            'class_rank' => $class_rank,
            'class_code' => $class_code,
            'hasExtraSubject' => $hasExtraSubject,
            'status' => $status,
            'modified_by' => $modified_by,
            'modified_at' => $modified_at,
        ];

        $numUpdated = DB::table('classes')
            ->where('class_id', $class_id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Class updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update class');
        }
    }

    public function viewClass(Request $request)
    {
        $class_id = $request->class_id;
        $getClassInfo = DB::select('SELECT * FROM classes WHERE class_id = ?', [$class_id]);
        $classArray = json_decode(json_encode($getClassInfo), true);

        return view('admin.AcademicModule.viewClass', ['classInfo' => $classArray]);
    }

    public function addCLass()
    {
        $getMediums = DB::select('select medium_name from mediums');
        $mediumsArray = json_decode(json_encode($getMediums), true);
        return view('admin.AcademicModule.addclass', ['mediumList' => $mediumsArray]);
    }

    public function addCLassSubmit(Request $request)
    {
        $class_type = $request->class_type;
        $class_name = $request->class_name;
        $class_rank = $request->class_rank;
        $class_code = $request->class_code;
        $hasExtraSubject = $request->hasExtraSubject;
        $status = $request->status;

        date_default_timezone_set('Asia/Dhaka');
        $created_by = 'Learning Campus';
        $created_at = date('j F Y, h:i A');
        $modified_by = '';
        $modified_at = '';

        $insertData = DB::insert('INSERT INTO classes 
            (class_name, class_type, class_rank, class_code, hasExtraSubject, status, created_at, created_by, modified_at, modified_by)
            VALUES (?,?,?,?,?,?,?,?,?,?)', [
            $class_name, $class_type, $class_rank, $class_code, $hasExtraSubject,
            $status, $created_at, $created_by, $modified_at, $modified_by
        ]);

        if ($insertData) {
            return redirect(route('add_class'))->with('success', 'Class created successfully');
        } else {
            return redirect(route('add_class'))->with('error', 'Failed to create class');
        }
    }

    public function deleteClass(Request $request)
    {
        $class_id = $request->label_id;

        $query = DB::table('classes')->where('class_id', $class_id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Class deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete class');
        }
    }
}
