<?php

namespace App\Http\Controllers\AcademicModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllSectionListController extends Controller
{
    public function allSectionList()
    {
        $getClassList = DB::select('SELECT * FROM classes');
        $classArray = json_decode(json_encode($getClassList), true);

        $getSectionInfo = DB::select('SELECT * FROM sections');
        $sectionArray = json_decode(json_encode($getSectionInfo), true);

        return view('admin.AcademicModule.allsectionlist', [
            'sectionInfo' => $sectionArray,
            'classList' => $classArray
        ]);
    }

    public function allSectionSearch(Request $request)
    {
        $section_name = $request->section_name;
        $class_name = $request->class_name;
        $shift_name = $request->shift_name;
        $status = $request->status;

        $query = "SELECT * FROM sections WHERE 1=1";

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

        if ($section_name !== 'all') {
            $query .= " AND section_name = '$section_name'";
        }

        if ($shift_name !== 'all') {
            $query .= " AND shift_name = '$shift_name'";
        }

        if ($status !== 'all') {
            $query .= " AND status = '$status'";
        }

        $selectedData = DB::select($query);
        return response()->json($selectedData);
    }

    public function editSection(Request $request)
    {
        $section_id = $request->section_id;

        $getSectionInfo = DB::select('SELECT * FROM sections WHERE section_id = ?', [$section_id]);
        $sectionArray = json_decode(json_encode($getSectionInfo), true);

        $getClassList = DB::select('SELECT * FROM classes');
        $classArray = json_decode(json_encode($getClassList), true);

        $getShiftList = DB::select('SELECT * FROM shifts');
        $shiftsArray = json_decode(json_encode($getShiftList), true);

        return view('admin.AcademicModule.editSection', [
            'sectionInfo' => $sectionArray,
            'classesList' => $classArray,
            'shiftsList' => $shiftsArray
        ]);
    }

    public function editSectionSubmit(Request $request)
    {
        $section_id = $request->section_id;

        date_default_timezone_set('Asia/Dhaka');
        $modified_by = 'Learning Campus';
        $modified_at = date('j F Y, h:i A');

        $section_name = $request->input('section_name') ?? $request->input('current_section_name');
        $class_name = $request->input('class_name') ?? $request->input('current_class_name');
        $shift_name = $request->input('shift_name') ?? $request->input('current_shift_name');
        $status = $request->input('status') ?? $request->input('current_status');

        $class_type = $request->input('current_class_type');
        if (strpos($class_name, 'Bangla_') === 0) {
            $class_type = 'Bangla';
            $class_name = substr($class_name, strlen('Bangla_'));
        } elseif (strpos($class_name, 'English_') === 0) {
            $class_type = 'English';
            $class_name = substr($class_name, strlen('English_'));
        }

        $updateData = [
            'class_type' => $class_type,
            'class_name' => $class_name,
            'shift_name' => $shift_name,
            'section_name' => $section_name,
            'status' => $status,
            'modified_by' => $modified_by,
            'modified_at' => $modified_at,
        ];

        $numUpdated = DB::table('sections')
            ->where('section_id', $section_id)
            ->update($updateData);

        if ($numUpdated > 0) {
            return redirect()->back()->with('success', 'Section updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update section');
        }
    }

    public function viewSection(Request $request)
    {
        $section_id = $request->section_id;
        $getSectionInfo = DB::select('SELECT * FROM sections WHERE section_id = ?', [$section_id]);
        $sectionArray = json_decode(json_encode($getSectionInfo), true);

        return view('admin.AcademicModule.viewSection', ['sectionInfo' => $sectionArray]);
    }

    public function addSection()
    {
        $getClasses = DB::select('select * from classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        $getShifts = DB::select('select * from shifts');
        $shiftsArray = json_decode(json_encode($getShifts), true);


        return view('admin.AcademicModule.addsection', [
            'classesList' => $classesArray,
            'shiftsList' => $shiftsArray
        ]);
    }

    public function addSectionSubmit(Request $request)
    {
        $section_name = $request->section_name;
        $class_name = $request->class_name;
        $shift_name = $request->shift_name;
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

        $insertData = DB::insert('INSERT INTO sections (section_name, class_name, class_type, shift_name, status, created_at, created_by, modified_at, modified_by) 
        VALUES (?,?,?,?,?,?,?,?,?)', [
            $section_name, $class_name, $class_type, $shift_name,
            $status, $created_at, $created_by, $modified_at, $modified_by
        ]);

        if ($insertData) {
            return redirect(route('add_section'))->with('success', 'Section created successfully');
        } else {
            return redirect(route('add_section'))->with('error', 'Failed to create section');
        }
    }

    public function deleteSection(Request $request)
    {
        $section_id = $request->label_id;

        $query = DB::table('sections')->where('section_id', $section_id)->delete();
        if ($query) {
            return redirect()->back()->with('success', 'Section deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete section');
        }
    }
}
