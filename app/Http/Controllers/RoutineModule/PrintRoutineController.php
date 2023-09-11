<?php

namespace App\Http\Controllers\RoutineModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintRoutineController extends Controller
{
    /*===================== Print Routine (start) ====================*/
    public function printRoutine()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $subjectTable = DB::select('select * from subjects');
        $subjectArray = json_decode(json_encode($subjectTable), true);

        $teacherTable = DB::select('select * from teachers');
        $teacherArray = json_decode(json_encode($teacherTable), true);

        return  view('admin.RoutineModule.print_routine', [
            'classesList' => $classArray,
            'shiftsList' => $shiftArray,
            'sectionsList' => $sectionArray,
            'subjectsList' => $subjectArray,
            'teachersList' => $teacherArray,
            'message' => 'No Records Founds'
        ]);
    }

    public function printRoutineSubmit(Request $request)
    {
        $class_name = $request->input('class');
        $shift_name = $request->input('shift_name');
        $section_name = $request->input('section');

        $class_type = '';
        if (strpos($class_name, 'Bangla_') === 0) {
            $class_type = 'Bangla';
            $class_name = substr($class_name, strlen('Bangla_'));
        } elseif (strpos($class_name, 'English_') === 0) {
            $class_type = 'English';
            $class_name = substr($class_name, strlen('English_'));
        }

        $fetchedData = DB::select("select * from routines where class_name = ? and class_type = ? and shift_name = ? and section_name = ?", [$class_name, $class_type, $shift_name, $section_name]);
        $routineArray = json_decode(json_encode($fetchedData), true);

        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $subjectTable = DB::select('select * from subjects');
        $subjectArray = json_decode(json_encode($subjectTable), true);

        $teacherTable = DB::select('select * from teachers');
        $teacherArray = json_decode(json_encode($teacherTable), true);

        if (count($fetchedData) > 0) {

            $days = [
                "Sunday" => 0,
                "Monday" => 1,
                "Tuesday" => 2,
                "Wednesday" => 3,
                "Thursday" => 4,
                "Friday" => 5,
                "Saturday" => 6,
            ];

            usort($routineArray, function ($a, $b) use ($days) {
                if ($days[$a['routine_day']] === $days[$b['routine_day']]) {
                    return strtotime($a['start_time']) - strtotime($b['start_time']);
                }
                return $days[$a['routine_day']] - $days[$b['routine_day']];
            });

            foreach ($routineArray as &$row) {
                $row['start_time'] = date('h:i A', strtotime($row['start_time']));
                $row['end_time'] = date('h:i A', strtotime($row['end_time']));
            }

            return view('admin.RoutineModule.print_routine', [
                'classesList' => $classArray,
                'shiftsList' => $shiftArray,
                'sectionsList' => $sectionArray,
                'subjectsList' => $subjectArray,
                'teachersList' => $teacherArray,
                'routineData' => $routineArray,
            ]);
        } else {
            return redirect(route('print.routine'));
        }
    }

    /*===================== Print Routine (end) ====================*/
}
