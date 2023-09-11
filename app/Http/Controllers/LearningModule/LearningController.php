<?php

namespace App\Http\Controllers\LearningModule;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\home_work;
use App\Models\class_work;
use App\Models\leason_plan;
use App\Models\academic_syllabus;
use App\Models\live_class;
use App\Models\hw_submit;
use App\Models\Employeetype;
use App\Models\EmployeeProfessionals;

class LearningController extends Controller
{
    function manage_live_classes(){
        $live = live_class::all();
        return view('admin.LearningModule.Live_classes.manage_live_classes', [
            'live'=>$live,
        ]);
    }
    function live_class_delete($live_class_id){
        live_class::find($live_class_id)->delete();
        return back()->with('delete', 'Live Class Data Deleted Successfully!');
    }
    function manage_home_work(){
        $hwork = home_work::all();
        return view('admin.LearningModule.Home_work_list.manage_home_work', [
            'hwork'=>$hwork,
        ]);
    }
    function home_work_delete($home_work_id){
        home_work::find($home_work_id)->delete();
        return back()->with('delete', 'Home Work Data Deleted Successfully!');
    }
    function hw_submit_delete($hw_submit_id){
        hw_submit::find($hw_submit_id)->delete();
        return back()->with('delete', 'Submitted Home Work Deleted Successfully!');
    }

    function manage_leason_plan(){
        $leason = leason_plan::all();
        return view('admin.LearningModule.Leason_plan_list.manage_leason_plan', [
            'leason'=>$leason,
        ]);
    }
    function leason_plan_delete($leason_plan_id){
        leason_plan::find($leason_plan_id)->delete();
        return back()->with('delete', 'Lesson PLan Deleted Successfully!');
    }
    function manage_academic_syllabus(){
        $academic = academic_syllabus::all();
        return view('admin.LearningModule.Academic_syllabus.manage_academic_syllabus', [
            'academic'=>$academic,
        ]);
    }
    function academic_syllabus_delete($academic_syllabus_id){
        academic_syllabus::find($academic_syllabus_id)->delete();
        return back()->with('delete', 'Academic Syllabus Data Deleted Successfully!');
    }

    function view_live_classes($live_class_id){
        $lclass = live_class::find($live_class_id);
        return view('admin.LearningModule.Live_classes.view_live_classes', [
            'lclass'=>$lclass,
        ]);
    }
    function view_academic_syllabus($academic_syllabus_id){
        $syllabus = academic_syllabus::find($academic_syllabus_id);
        return view('admin.LearningModule.Academic_syllabus.view_academic_syllabus', [
            'syllabus' =>$syllabus,
        ]);
    }
    public function download_academic_syllabus($file){
        $file_path = (public_path('uploads/academic_syllabus/'.$file));
        return response()->download($file_path);
    }
    public function download_hw_submit($file){
        $file_path = (public_path('uploads/hw_submit/'.$file));
        return response()->download($file_path);
    }

    function add_live_classes(){
        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        $getSubjects = DB::select('SELECT subject_name FROM subjects');
        $subjectsArray = json_decode(json_encode($getSubjects), true);

        $teacher=Employeetype::where('name','teacher')->first();
        $type=EmployeeProfessionals::where('type',$teacher->id)->get();

        return view('admin.LearningModule.Live_classes.add_live_classes', [
            'classesList'=>$classesArray,
            'subjectsList'=>$subjectsArray,
            'types'=>$type,
        ]);
    }
    function live_class_post(Request $request){
        $id = live_class::insertGetId([
            'class_name'=>$request->class_name,
            'shift'=>$request->shift,
            'section'=>$request->section,
            'subject_name'=>$request->subject_name,
            'teacher'=>$request->teacher,
            'class_topic'=>$request->class_topic,
            'class_date'=>$request->class_date,
            'class_time'=>$request->class_time,
            'duration'=>$request->duration,
            'class_id'=>$request->class_id,
            'password'=>$request->password,
            'status'=>$request->status,
        ]);
        return back()->with('success', 'Live Class Data Added Successfully!');
    }
    function add_home_work(){
        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        $getSubjects = DB::select('SELECT subject_name FROM subjects');
        $subjectsArray = json_decode(json_encode($getSubjects), true);

        $teacher=Employeetype::where('name','teacher')->first();
        $type=EmployeeProfessionals::where('type',$teacher->id)->get();

        return view('admin.LearningModule.Home_work_list.add_home_work', [
            'classesList'=>$classesArray,
            'subjectsList'=>$subjectsArray,
            'types'=>$type,
        ]);
    }
    function home_work_post(Request $request){
        
        // $class_type = '';
        // if (strpos($class_name, 'Bangla_') === 0) {
        //     $class_type = 'Bangla';
        //     $class_name = substr($class_name, strlen('Bangla_'));
        // } elseif (strpos($class_name, 'English_') === 0) {
        //     $class_type = 'English';
        //     $class_name = substr($class_name, strlen('English_'));
        // }

        $id = home_work::insertGetId([
            'class_name'=>$request->class_name,
            'shift'=>$request->shift,
            'section'=>$request->section,
            'subject_name'=>$request->subject_name,
            'teacher'=>$request->teacher, 
            'home_work_title'=>$request->home_work_title,  
            'assign_date'=>$request->assign_date, 
            'due_date'=>$request->due_date, 
            'status'=>$request->status, 
        ]);
        return back()->with('success', 'Home Work Data Added Successfully');
    }

    function hw_submit(){
        $home = home_work::all();

        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        $getSubjects = DB::select('SELECT subject_name FROM subjects');
        $subjectsArray = json_decode(json_encode($getSubjects), true);

        $teacher=Employeetype::where('name','teacher')->first();
        $type=EmployeeProfessionals::where('type',$teacher->id)->get();

        return view('admin.LearningModule.Home_work_submit.hw_submit', [
            'home'=>$home,
            'classesList'=>$classesArray,
            'subjectsList'=>$subjectsArray,
            'types'=>$type,
        ]);
    }
    function hw_submit_post(Request $request){
            $data=new hw_submit();
            $file=$request->file;
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('uploads/hw_submit/', $filename);
            $data->file=$filename;
            $data->class_name=$request->class_name;
            $data->shift=$request->shift;
            $data->section=$request->section;
            $data->subject_name=$request->subject_name;
            $data->teacher=$request->teacher;
            $data->home_work_id=$request->home_work_id;
            $data->submit_date=$request->submit_date;
            $data->save();
            return redirect()->back()->with('success', 'Home Work Submitted Successfully!');
    }
    function manage_hw_submit(){
        $hw = hw_submit::all();
        return view('admin.LearningModule.Home_work_submit.manage_hw_submit', [
            'hw'=>$hw,
        ]);
    }

    function add_leason_plan(){

        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        $getSubjects = DB::select('SELECT subject_name FROM subjects');
        $subjectsArray = json_decode(json_encode($getSubjects), true);

        $teacher=Employeetype::where('name','teacher')->first();
        $type=EmployeeProfessionals::where('type',$teacher->id)->get();

        return view('admin.LearningModule.Leason_plan_list.add_leason_plan', [
            'classesList'=>$classesArray,
            'subjectsList'=>$subjectsArray,
            'types'=>$type,
        ]);
    }
    function leason_plan_post(Request $request){
        $id = leason_plan::insertGetId([
            'class_name'=>$request->class_name,
            'shift'=>$request->shift,
            'section'=>$request->section,
            'subject_name'=>$request->subject_name,
            'teacher'=>$request->teacher, 
            'leason_title'=>$request->leason_title, 
            'chapter'=>$request->chapter, 
            'page_number'=>$request->page_number, 
            'video_url'=>$request->video_url, 
            'attachment'=>$request->attachment, 
            'leason_Plan_detail'=>$request->leason_Plan_detail, 
            'assign_date'=>$request->assign_date, 
            'due_date'=>$request->due_date, 
            'status'=>$request->status, 
        ]);
        return back()->with('success', 'Lesson Plan Added Successfully!');
    }
    function add_academic_syllabus(){
        return view('admin.LearningModule.Academic_syllabus.add_academic_syllabus');
    }
    function academic_syllabus_post(Request $request){
        $data=new academic_syllabus();
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('uploads/academic_syllabus/', $filename);
        $data->file=$filename;
        $data->class=$request->class;
        $data->title=$request->title;
        $data->status=$request->status;
        $data->save();
        return redirect()->back()->with('success', 'Academic Syllabus Data Added Successfully!');
    }
    function update_academic_syllabus(Request $request){
        $data=new academic_syllabus();
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('uploads/academic_syllabus/', $filename);
        $data->file=$filename;
        $data->class=$request->class;
        $data->title=$request->title;
        $data->status=$request->status;
        $data->save();
        return redirect()->back()->with('success', 'Academic Syllabus Updated Successfully!');
    }
    function update_live_class(Request $request){
        live_class::find($request->live_class_id)->update([
            'class'=>$request->class_name,
            'shift'=>$request->shift,
            'section'=>$request->section,
            'subject'=>$request->subject_name,
            'teacher'=>$request->teacher,
            'class_topic'=>$request->class_topic,
            'class_date'=>$request->class_date,
            'class_time'=>$request->class_time,
            'duration'=>$request->duration,
            'class_id'=>$request->class_id,
            'password'=>$request->password,
            'status'=>$request->status,
        ]);
        return back()->with('success', 'Live Class Data Updated Successfully!');
    }

    function edit_live_classes($live_class_id){
        $getClasses = DB::select('SELECT * FROM classes');
        $classesArray = json_decode(json_encode($getClasses), true);

        $getSubjects = DB::select('SELECT subject_name FROM subjects');
        $subjectsArray = json_decode(json_encode($getSubjects), true);

        $teacher=Employeetype::where('name','teacher')->first();
        $type=EmployeeProfessionals::where('type',$teacher->id)->get();

        $live = live_class::find($live_class_id);
        return view('admin.LearningModule.Live_classes.edit_live_classes', [
            'classesList'=>$classesArray,
            'subjectsList'=>$subjectsArray,
            'types'=>$type,
            'live'=>$live,
        ]);
    }
    function edit_academic_syllabus($academic_syllabus_id){
        $academic = academic_syllabus::find($academic_syllabus_id);
        return view('admin.LearningModule.Academic_syllabus.edit_academic_syllabus', [
            'academic' =>$academic,
        ]);
    }
}
