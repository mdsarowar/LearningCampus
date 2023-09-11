<?php

namespace App\Http\Controllers\AcademicModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllGroupListController extends Controller
{
    public function allGroupList()
    {
        $getClassList = DB::select('SELECT * FROM classes');
        $classArray = json_decode(json_encode($getClassList), true);

        $getGroupInfo = DB::select('SELECT * FROM groups');
        $groupArray = json_decode(json_encode($getGroupInfo), true);

        return view('admin.AcademicModule.allgrouplist', [
            'groupInfo' => $groupArray,
            'classList' => $classArray
        ]);
    }

    public function allGroupSearch(Request $request)
    {
        $group_name = $request->group_name;
        $class_name = $request->class_name;
        $status = $request->status;

        $query = "SELECT * FROM groups WHERE 1=1";

        $class_type = 'all';
        if (strpos($class_name, 'Bangla_') === 0) {
            $class_type = 'Bangla';
            $class_name = substr($class_name, strlen('Bangla_'));
        } elseif (strpos($class_name, 'English_') === 0) {
            $class_type = 'English';
            $class_name = substr($class_name, strlen('English_'));
        }

        if ($class_name !== 'all') {
            $query .= " AND class_name = '$class_name'";
        }

        if ($class_type !== 'all') {
            $query .= " AND class_type = '$class_type'";
        }

        if (!empty($group_name)) {
            $query .= " AND group_name = '$group_name'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }

    public function editGroup(Request $request)
    {
        $group_id = $request->group_id;
        $getGroupInfo = DB::select('SELECT * FROM groups WHERE group_id = ?', [$group_id]);
        $groupArray = json_decode(json_encode($getGroupInfo), true);

        $getClassesList = DB::select('SELECT * FROM classes');
        $classArray = json_decode(json_encode($getClassesList), true);

        return view('admin.AcademicModule.editGroup', [
            'groupInfo' => $groupArray,
            'classesList' => $classArray
        ]);
    }

    public function editGroupSubmit(Request $request)
    {
        $group_id = $request->group_id;

        date_default_timezone_set('Asia/Dhaka');
        $modified_by = 'Learning Campus';
        $modified_at = date('j F Y, h:i A');

        $group_name = $request->input('group_name') ?? $request->input('current_group_name');
        $class_name = $request->input('class_name') ?? $request->input('current_class_name');
        $class_type = $request->input('class_type') ?? $request->input('current_class_type');
        $status = $request->input('status') ?? $request->input('current_status');


        $updateData = [
            'class_type' => $class_type,
            'class_name' => $class_name,
            'group_name' => $group_name,
            'status' => $status,
            'modified_by' => $modified_by,
            'modified_at' => $modified_at,
        ];

        $numUpdated = DB::table('groups')
            ->where('group_id', $group_id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Group updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update group');
        }
    }

    public function viewGroup(Request $request)
    {
        $group_id = $request->group_id;
        $getGroupInfo = DB::select('SELECT * FROM groups WHERE group_id = ?', [$group_id]);
        $groupArray = json_decode(json_encode($getGroupInfo), true);

        return view('admin.AcademicModule.viewGroup', ['groupInfo' => $groupArray]);
    }

    public function addGroup()
    {
        $getClasses = DB::select('select * from classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        return view('admin.AcademicModule.addgroup', ['classesList' => $classesArray]);
    }

    public function addGroupSubmit(Request $request)
    {
        $group_name = $request->group_name;
        $class_name = $request->class_name;
        $status = $request->status;

        date_default_timezone_set('Asia/Dhaka');
        $created_by = 'Learning Campus';
        $created_at = date('j F Y, h:i A');
        $modified_by = '';
        $modified_at = '';

        $class_type = '';
        if (strpos($class_name, 'Bangla_') === 0) {
            $class_type = 'Bangla';
            $class_name = substr($class_name, strlen('Bangla_'));
        } elseif (strpos($class_name, 'English_') === 0) {
            $class_type = 'English';
            $class_name = substr($class_name, strlen('English_'));
        }

        $insertData = DB::insert('INSERT INTO groups (group_name, class_name, class_type, status, created_at, created_by, modified_at, modified_by) 
        VALUES (?,?,?,?,?,?,?,?)', [
            $group_name, $class_name, $class_type,
            $status, $created_at, $created_by, $modified_at, $modified_by
        ]);

        if ($insertData) {
            return redirect(route('add_group'))->with('success', 'Group created successfully');
        } else {
            return redirect(route('add_group'))->with('error', 'Failed to create group');
        }
    }

    public function deleteGroup(Request $request)
    {
        $group_id = $request->label_id;

        $query = DB::table('groups')->where('group_id', $group_id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Group deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete group');
        }
    }
}
