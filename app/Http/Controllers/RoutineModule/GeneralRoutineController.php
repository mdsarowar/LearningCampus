<?php

namespace App\Http\Controllers\RoutineModule;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralRoutineController extends Controller
{
    /*===================== General Routine (start) ====================*/

    public function generalRoutine()
    {
        $tables = ['teachers', 'classes', 'shifts', 'sections', 'subjects'];
        $dataArrays = [];

        foreach ($tables as $table) {
            $dataList = DB::select("select * from $table");
            $dataArrays[$table . 'List'] = json_decode(json_encode($dataList), true);
        }

        return view('admin.RoutineModule.general_routine', $dataArrays);
    }


    public function generalRoutineSubmit(Request $request)
    {
        $class_name = $request->input('class');
        $shift_name = $request->input('shift_name');
        $section_name = $request->input('section');
        $routineDay = $request->input('routine_day');
        $startTime = $request->input('start_time');
        $endTime = $request->input('end_time');
        $break_time = $request->input('break_time');
        $subject_name = $request->input('subject_name');
        $teacher_name = $request->input('teacher_name');
        $status = $request->input('status');

        $class_type = '';
        if (strpos($class_name, 'Bangla_') === 0) {
            $class_type = 'Bangla';
            $class_name = substr($class_name, strlen('Bangla_'));
        } elseif (strpos($class_name, 'English_') === 0) {
            $class_type = 'English';
            $class_name = substr($class_name, strlen('English_'));
        }


        //conveting break time difference into minutes
        $break_time = strtolower($request->input('break_time'));
        if ($break_time === 'yes') {
            /* $start_break_time = $request->input('start_break_time');
            $end_break_time = $request->input('end_break_time');

            $format = 'H:i';

            $start = DateTime::createFromFormat($format, $start_break_time);
            $end = DateTime::createFromFormat($format, $end_break_time);

            if ($start && $end) {
                $interval = $start->diff($end);
                $breakTime = $interval->i;
            } else {
                $breakTime = 'Invalid';
            } */
            $breakTime = 'Yes';
        } else {
            $breakTime = 'No';
            $start_break_time = '';
            $end_break_time = '';
        }


        $insertData = DB::insert('insert into routines 
        (routine_day, class_name, class_type, shift_name, section_name, start_time, end_time, subject_name, teacher_name, break_time, start_break_time, end_break_time, status) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $routineDay, $class_name, $class_type, $shift_name, $section_name, $startTime, $endTime, $subject_name, $teacher_name, $breakTime, $start_break_time, $end_break_time, $status
        ]);
        if ($insertData) {
            return redirect(route('general.routine'))->with('success', 'Routine Created Successfully');
        } else {
            return redirect(route('general.routine'))->with('error', 'Failed to create routine');
        }
    }

    /*===================== General Routine (end) ====================*/
}
