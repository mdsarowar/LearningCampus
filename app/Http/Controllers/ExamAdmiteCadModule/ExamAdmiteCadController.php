<?php

namespace App\Http\Controllers\ExamAdmiteCadModule;

use App\Http\Controllers\Controller;
use App\Models\ExamAdmiteCad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamAdmiteCadController extends Controller
{
    public function index()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $studentsTable = DB::select('select * from student_admission');
        $studentsArray = json_decode(json_encode($studentsTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        return view("admin.ExamAdmiteCadModule.exam_admit_card",
    [
        'classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sectionsList' => $sectionArray,
        'studentsLests' =>$studentsArray,
    ]);
    }

    public function admitCardSearch(Request $request)
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $studentsTable = DB::select('select * from student_admission');
        $studentsArray = json_decode(json_encode($studentsTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $student_class = $request->student_class;
        $shift_name = $request->shift_name;
        $section = $request->section;
        $exam_terem = $request->exam_terem;
        $exam_part = $request->exam_part;
        $student_name = $request->student_name;
        // return $request->all();
        $students = ExamAdmiteCad::where('student_class', $student_class)
        ->where('shift_name', $shift_name)
        ->where('section', $section)
        ->where('exam_part', $exam_part)
        ->where('exam_terem', $exam_terem)
        ->where('student_name', $student_name)
        ->get();
         return view("admin.ExamAdmiteCadModule.admit_card",
    [
        'classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sectionsList' => $sectionArray,
        'studentsLests' =>$studentsArray,
    ], compact("students"));
    }
}
