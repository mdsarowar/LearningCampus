<?php

namespace App\Http\Controllers\ExamSettings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\grade_point;
use App\Models\exam_term;
use App\Models\exam_part;
use App\Models\assign_exam;
use App\Models\working_day;
use App\Models\seat_plan;
use App\Models\exam_routine_upper;
use App\Models\exam_routine_lower;

class ExamSettingController extends Controller
{
    function exam_grade(){
        $grade = grade_point::all();
        return view('admin.ExamSettings.Grade_point.grade_points', [
            'grade'=>$grade,
        ]);
    }
    function exam_terms(){
        $terms = exam_term::all();
        return view('admin.ExamSettings.Exam_terms.exam_terms', [
            'terms'=>$terms,
        ]);
    }
    function exam_part(){
        $exam = exam_part::all();
        return view('admin.ExamSettings.Exam_part.exam_part', [
            'exam'=>$exam,
        ]);
    }
    function assign_exam(){
        $ass_exam = assign_exam::all();
        return view('admin.ExamSettings.Assign_exam.assign_exam', [
            'ass_exam'=>$ass_exam,
        ]);
    }
    function working_days(){
        $working_day = working_day::all();
        return view('admin.ExamSettings.Working_days.working_days', [
            'working_day'=>$working_day,
        ]);
    }
    function view_seat_plan(request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $info = seat_plan::where('student_id','=',$search)->get();
        }else{
            $info = seat_plan::all();
        }
        return view('admin.ExamSettings.Exam_seat_plan.view_seat_plan', [
            'info'=>$info,
            'search'=>$search,
        ]);
    }
    function exam_routine(){
        $ex_term = exam_term::all();
        $ex_part = exam_part::all();
        $low = exam_routine_upper::all();

        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        $getSubjects = DB::select('SELECT subject_name FROM subjects');
        $subjectsArray = json_decode(json_encode($getSubjects), true);

        return view('admin.ExamSettings.Exam_routine.exam_routine', [
            'ex_term'=>$ex_term,
            'ex_part'=>$ex_part,
            'low'=>$low,
            'classesList'=>$classesArray,
            'subjectsList'=>$subjectsArray,
        ]);
    }
    function exam_attn(){
        $seat = seat_plan::all();
        $ex_term = exam_term::all();

        return view('admin.ExamSettings.Exam_attnElige.exam_attn', [
            'ex_term'=>$ex_term,
            'seat'=>$seat,
        ]);
    }
    function exam_elige(){
        $seat = seat_plan::all();
        $ex_term = exam_term::all();

        return view('admin.ExamSettings.Exam_attnElige.exam_elige', [
            'ex_term'=>$ex_term,
            'seat'=>$seat,
        ]);
    }



    function add_exam_grade(){
        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        return view('admin.ExamSettings.Grade_point.add_grade_point', [
            'classesList'=>$classesArray,
        ]);
    }
    function add_exam_terms(){
        return view('admin.ExamSettings.Exam_terms.add_exam_terms');
    }
    function add_exam_part(){
        return view('admin.ExamSettings.Exam_part.add_exam_part');
    }
    function add_working_days(){
        $ex_term = exam_term::all();

        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        return view('admin.ExamSettings.Working_days.add_working_days', [
            'ex_term'=>$ex_term,
            'classesList'=>$classesArray,
        ]);
    }
    function add_assign_exam(){
        $ex_term = exam_term::all();
        $ex_part = exam_part::all();

        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        return view('admin.ExamSettings.Assign_exam.add_assign_exam', [
            'ex_term'=>$ex_term,
            'ex_part'=>$ex_part,
            'classesList'=>$classesArray,
        ]);
    }
    function add_seat_plan(){
        $ex_term = exam_term::all();

        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        return view('admin.ExamSettings.Exam_seat_plan.add_seat_plan', [
            'ex_term'=>$ex_term,
            'classesList'=>$classesArray,
        ]);
    }



    function delete_exam_grade($exam_grade_id){
        grade_point::find($exam_grade_id)->delete();
        return back();
    }
    function delete_exam_terms($exam_term_id){
        exam_term::find($exam_term_id)->delete();
        return back();
    }
    function delete_assign_exam($assign_id){
        assign_exam::find($assign_id)->delete();
        return back();
    }
    function delete_working_days($work_id){
        working_day::find($work_id)->delete();
        return back();
    }



    function view_exam_grade($exam_grade_id){
        $grade = grade_point::find($exam_grade_id);
        return view('admin.ExamSettings.Grade_point.view_grade_point', [
            'grade'=>$grade,
        ]);
    }
    function view_exam_terms($exam_term_id){
        $term = exam_term::find($exam_term_id);
        return view('admin.ExamSettings.Exam_terms.view_exam_terms', [
            'term'=>$term,
        ]);
    }
    function view_exam_part($exam_part_id){
        $ex_pa = exam_part::find($exam_part_id);
        return view('admin.ExamSettings.Exam_part.view_exam_part', [
            'ex_pa'=>$ex_pa,
        ]);
    }
    function view_assign_exam($assign_id){
        $ass_ex = assign_exam::find($assign_id);
        return view('admin.ExamSettings.Assign_exam.view_assign_exam', [
            'ass_ex'=>$ass_ex,
        ]);
    }
    function view_working_days($work_id){
        $work_day = working_day::find($work_id);
        return view('admin.ExamSettings.Working_days.view_working_days', [
            'work_day'=>$work_day,
        ]);
    }



    function exam_grade_post(request $request){
        $id = grade_point::insertGetId([
            'class_name'=>$request->class_name,
            'start_mark'=>$request->start_mark,
            'end_mark'=>$request->end_mark,
            'grade_letter'=>$request->grade_letter,
            'grade_point'=>$request->grade_point,
            'remark'=>$request->remark,
            'status'=>$request->status,
        ]);
        return back();
    }
    function exam_terms_post(request $request){
        $id = exam_term::insertGetId([
            'session'=>$request->session,
            'term_name'=>$request->term_name,
            'marks_final'=>$request->marks_final,
            'relate_final_term'=>$request->relate_final_term,
            'final_term'=>$request->final_term,
            'exam_ins'=>$request->exam_ins,
            'web_result_publish'=>$request->web_result_publish,
        ]);
        return back();
    }
    function exam_part_post(request $request){
        $id = exam_part::insertGetId([
            'exam_name'=>$request->exam_name,
            'rank'=>$request->rank,
            'status'=>$request->status,
        ]);
        return back();
    }
    
    function assign_exam_post(request $request){
        $id = assign_exam::insertGetId([
            'class_name'=>$request->class_name,
            'exam_term_id'=>$request->exam_term_id,
            'exam_part_id'=>$request->exam_part_id,
            'indi_pass'=>$request->indi_pass,
            'absent_fail'=>$request->absent_fail,
        ]);
        return back();
    }
    function working_days_post(request $request){
        $id = working_day::insertGetId([
            'exam_term_id'=>$request->exam_term_id,
            'class_name'=>$request->class_name,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'duration'=>$request->duration,
        ]);
        return back();
    }
    function seat_plan_post(request $request){
        $id = seat_plan::insertGetId([
            'session'=>$request->session,
            'class_name'=>$request->class_name,
            'student_id'=>$request->student_id,
            'name'=>$request->name,
            'floor'=>$request->floor,
            'room'=>$request->room,
        ]);
        return back();
    }
    function exam_routine_upper_post(request $request){
        $id = exam_routine_upper::insertGetId([
            'class_name'=>$request->class_name,
            'shift'=>$request->shift,
            'section'=>$request->section,
            'exam_term_id'=>$request->exam_term_id,
            'exam_part_id'=>$request->exam_part_id,
        ]);
        return back();
    }
    function exam_routine_lower_post(request $request){
        $id = exam_routine_lower::insertGetId([
            'exam_routine_upper_id'=>$request->exam_routine_upper_id,
            'subject_name'=>$request->subject_name,
            'date'=>$request->date,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
        ]);
        return back();
    }
    
}
