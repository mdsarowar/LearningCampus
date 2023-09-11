<?php

namespace App\Http\Controllers\AcademicModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllSubjectListController extends Controller
{
    public function allSubjectList()
    {
        $getClassList = DB::select('SELECT * FROM classes');
        $classArray = json_decode(json_encode($getClassList), true);

        $getGroupList = DB::select('SELECT * FROM groups');
        $groupsArray = json_decode(json_encode($getGroupList), true);

        $getSubjectInfo = DB::select('SELECT * FROM subjects');
        $subjectArray = json_decode(json_encode($getSubjectInfo), true);

        return view('admin.AcademicModule.allsubjectlist', [
            'subjectInfo' => $subjectArray,
            'classList' => $classArray,
            'groupList' => $groupsArray
    ]);
    }

    public function allSubjectSearch(Request $request)
    {
        $subject_name = $request->subject_name;
        $class_name = $request->class_name;
        $group_name = $request->group_name;
        $is_optional = $request->is_optional;
        $subject_code = $request->subject_code;
        $subject_type = $request->subject_type;
        $full_marks = $request->full_marks;
        $result_type = $request->result_type;
        $status = $request->status;

        $query = "SELECT * FROM subjects WHERE 1=1";

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

        if (!empty($subject_code)) {
            $query .= " AND subject_code = '$subject_code'";
        }

        if (!empty($subject_name)) {
            $query .= " AND subject_name = '$subject_name'";
        }

        if (!empty($full_marks)) {
            $query .= " AND full_marks = '$full_marks'";
        }

        if ($group_name !== 'all') {
            $query .= " AND group_name = '$group_name'";
        }

        if ($subject_type !== 'all') {
            $query .= " AND subject_type = '$subject_type'";
        }

        if ($result_type !== 'all') {
            $query .= " AND result_type = '$result_type'";
        }

        if ($is_optional !== 'all') {
            $query .= " AND is_optional = '$is_optional'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }

    public function editSubject(Request $request)
    {
        $subject_id = $request->subject_id;

        $getSubjectInfo = DB::select('SELECT * FROM subjects WHERE subject_id = ?', [$subject_id]);
        $subjectArray = json_decode(json_encode($getSubjectInfo), true);

        $getClassesList = DB::select('SELECT * FROM classes');
        $classArray = json_decode(json_encode($getClassesList), true);

        $getGroupList = DB::select('SELECT * FROM groups');
        $groupsArray = json_decode(json_encode($getGroupList), true);

        $getSubjectsList = DB::select('SELECT * FROM subjects');
        $subjectsArray = json_decode(json_encode($getSubjectsList), true);

        return view('admin.AcademicModule.editSubject', [
            'subjectInfo' => $subjectArray,
            'classesList' => $classArray,
            'groupsList' => $groupsArray,
            'subjectsList' => $subjectsArray
        ]);
    }

    public function editSubjectSubmit(Request $request)
    {
        $subject_id = $request->subject_id;

        $subject_name = $request->input('subject_name') ?? $request->input('current_subject_name');
        $class_name = $request->input('class_name') ?? $request->input('current_class_name');
        $group_name = $request->input('group_name') ?? $request->input('current_group_name');
        $combined_subject = $request->input('combined_subject') ?? $request->input('current_combined_subject');
        $subject_code = $request->input('subject_code') ?? $request->input('current_subject_code');
        $full_marks = $request->input('full_marks') ?? $request->input('current_full_marks');
        $result_type = $request->input('result_type') ?? $request->input('current_result_type');
        $status = $request->input('status') ?? $request->input('current_status');

        $class_type = $request->input('current_class_type');
        if (strpos($class_name, 'Bangla_') === 0) {
            $class_type = 'Bangla';
            $class_name = substr($class_name, strlen('Bangla_'));
        } elseif (strpos($class_name, 'English_') === 0) {
            $class_type = 'English';
            $class_name = substr($class_name, strlen('English_'));
        }

        date_default_timezone_set('Asia/Dhaka');
        $modified_by = 'Learning Campus';
        $modified_at = date('j F Y, h:i A');

        $updateData = [
            'subject_name' => $subject_name,
            'class_name' => $class_name,
            'class_type' => $class_type,
            'group_name' => $group_name,
            'combined_subject' => $combined_subject,
            'subject_code' => $subject_code,
            'full_marks' => $full_marks,
            'result_type' => $result_type,
            'status' => $status,
            'modified_by' => $modified_by,
            'modified_at' => $modified_at,
        ];

        $numUpdated = DB::table('subjects')
            ->where('subject_id', $subject_id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Subject updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update subject');
        }
    }

    public function viewSubject(Request $request)
    {
        $subject_id = $request->subject_id;
        $getSubjectInfo = DB::select('SELECT * FROM subjects WHERE subject_id = ?', [$subject_id]);
        $subjectArray = json_decode(json_encode($getSubjectInfo), true);

        return view('admin.AcademicModule.viewSubject', ['subjectInfo' => $subjectArray]);
    }

    public function addSubject()
    {
        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        $getSubjects = DB::select('SELECT subject_name FROM subjects');
        $subjectsArray = json_decode(json_encode($getSubjects), true);

        $getGroups = DB::select('SELECT group_name FROM groups');
        $groupsArray = json_decode(json_encode($getGroups), true);

        return view('admin.AcademicModule.addsubject', [
            'classesList' => $classesArray,
            'subjectsList' => $subjectsArray,
            'groupsList' => $groupsArray
        ]);
    }

    public function addSubjectSubmit(Request $request)
    {
        $subject_name = $request->subject_name;
        $class_name = $request->class_name;
        $group_name = $request->group_name;
        $combined_subject = $request->combined_subject;
        $subject_code = $request->subject_code;
        $subject_type = $request->subject_type;
        $full_marks = $request->full_marks;
        $result_type = $request->result_type;
        $status = $request->status;

        date_default_timezone_set('Asia/Dhaka');
        $created_by = 'Learning Campus';
        $created_at = date('j F Y, h:i A');
        $modified_by = '';
        $modified_at = '';

        if (empty($combined_subject)) {
            $combined_subject = '';
        }

        $is_optional = 'No';
        if ($subject_type === 'Optional') {
            $is_optional = 'Yes';
        }

        $class_type = '';
        if (strpos($class_name, 'Bangla_') === 0) {
            $class_type = 'Bangla';
            $class_name = substr($class_name, strlen('Bangla_'));
        } elseif (strpos($class_name, 'English_') === 0) {
            $class_type = 'English';
            $class_name = substr($class_name, strlen('English_'));
        }

        $insertData = [
            'subject_name' => $subject_name,
            'class_name' => $class_name,
            'group_name' => $group_name,
            'class_type' => $class_type,
            'subject_type' => $subject_type,
            'is_optional' => $is_optional,
            'combined_subject' => $combined_subject,
            'subject_code' => $subject_code,
            'full_marks' => $full_marks,
            'result_type' => $result_type,
            'status' => $status,
            'created_at' => $created_at,
            'created_by' => $created_by,
            'modified_at' => $modified_at,
            'modified_by' => $modified_by,
        ];

        $insertData = DB::table('subjects')->insert($insertData);


        if ($insertData) {
            return redirect(route('add_subject'))->with('success', 'Subject created successfully');
        } else {
            return redirect(route('add_subject'))->with('error', 'Failed to create subject');
        }
    }

    public function deleteSubject(Request $request)
    {
        $subject_id = $request->label_id;

        $query = DB::table('subjects')->where('subject_id', $subject_id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Subject deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete subject');
        }
    }
}
