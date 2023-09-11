<?php

namespace App\Http\Controllers\StudentAttendenceModule;

use App\Http\Controllers\Controller;
use App\Models\StudentAttendence;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentAttendenceController extends Controller
{
    

    public function todaysAttendence()
    {

        $todaysDate = date('Y-m-d');
        $students = StudentAttendence::where('date',$todaysDate)->where("absent_status", 1)->orderBy("id", "desc")->get();
        $total = StudentAttendence::where('date',$todaysDate)->where("absent_status", 1)->count();
       
        return view("admin.StudentAttendenceModule.student_today_attendence", compact( "students", "total"));
    }

    public function manualAttendence()
    {
        
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);
        $todaysDate = date('Y-m-d');
        $students = StudentAttendence::where('date',$todaysDate)->orderBy("id", "desc")->get();

        return view("admin.StudentAttendenceModule.student_manual_attendence",[
        'classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sectionsList' => $sectionArray,
        'sessionList'   => $sessionArray
        ], compact("students"));
    }

    public function search(Request $request)
    
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $date = $request->date;
        $class = $request->class;
        $shift = $request->shift;
        $section = $request->section;

        $students = StudentAttendence::where('date', $date)
        ->where('class', $class)
        ->where('shift', $shift)
        ->where('section', $section)
        ->get();
        //  $students = StudentAttendence::all();

        return view("admin.StudentAttendenceModule.student_manual_attendence",
        [
            'classesList' => $classArray,
            'shiftsList' => $shiftArray,
            'sectionsList' => $sectionArray,
            'sessionList'   => $sessionArray
        ], compact("students"));

    }

    public function status(Request $request)
    {
        $studentId = $request->student_id;
        $student = StudentAttendence::find($studentId);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $newStatus = $request->attendance_status;

        // Ensure the newStatus is either 0 or 1
        // if ($newStatus !== 0 && $newStatus !== 1) {
        //     return response()->json(['message' => 'Invalid attendance status'], 400);
        // }

        $student->absent_status = $newStatus;
        $student->save();

        $message = $newStatus ? 'Student attendance marked as absent.' : 'Student attendance marked as present.';
        
        return response()->json(['message' => $message]);
    }
    public function statusAll()
    {
        $students = StudentAttendence::all();
        $todaysDate = date('Y-m-d');
        $updete = StudentAttendence::where('date',$todaysDate)
        ->where("absent_status", 0)
		->update(['absent_status'=> 1]);
        
        // $absent_status->update(['absent_status', 0]);
        // if ($absent_status == 1)
        // {
        //     $absent_status = 0;
        //     
        // }
        // $students->save();
        $message = 'Student present successfully. ';
        
        return redirect("/manual-attendence")->with("message", $message);
    }

    public function studentAbsent()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $todaysDate = date('Y-m-d');
        $students = StudentAttendence::where('date',$todaysDate)->where("absent_status", 1)->orderBy("id", "desc")->get();
        $total = StudentAttendence::where('date',$todaysDate)->where("absent_status", 1)->count();
        return view("admin.StudentAttendenceModule.student_absent",
        ['classesList' => $classArray,], compact("students","total"));
    }

    public function detailsAttendence()
    {
        $todaysDate = date('Y-m-d');
        $students = StudentAttendence::all();
        return view("admin.StudentAttendenceModule.student_attendence_detail", compact("students"));
    }

    public function detailsSearch(Request $request)
    { 
        $class = $request->class;
        $shift = $request->shift;
        $section = $request->section;
        $student_id = $request->student_id;
        $session = $request->session;
        $students = StudentAttendence::where('class', $class)
        ->where('student_id', $student_id)
        ->where('shift', $shift)
        ->where('section', $section)
        ->where('session', $session)
        ->get();

        return view("admin.StudentAttendenceModule.student_attendence_detail", compact("students"));
    }

    public function dailyAttendence()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);


        $students = StudentAttendence::all(); 
        return view("admin.StudentAttendenceModule.student_daily_attendence_summary",[
        'classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sectionsList' => $sectionArray,
        'sessionList'   => $sessionArray
        ],
         compact("students"));
    }

    public function dailySearch(Request $request)
    {
        
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $date = $request->date;
        $class = $request->class;
        $shift = $request->shift;
        $section = $request->section;
        $session = $request->session;

        $students = StudentAttendence::where('date', $date)
        ->where('class', $class)
        ->where('shift', $shift)
        ->where('section', $section)
        ->where('session', $session)
        ->get();
        return view("admin.StudentAttendenceModule.student_daily_attendence_summary",[
        'classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sectionsList' => $sectionArray,
        'sessionList'   => $sessionArray
        ], compact("students"));
    }

    public function dailyAttendenceDownload()
    {
        

        $students = StudentAttendence::all();

        $pdf = Pdf::View('admin.StudentAttendenceModule.student_daily_summary_pdf',
        compact("students", "sessionList", "classList","sectionList"));

        return $pdf->download('student_daily_attendence_summary.pdf');
        return $pdf->stream();
    }

    public function montlyAttendence()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $students = StudentAttendence::all();
        return view("admin.StudentAttendenceModule.student_monthly_attendence_summary",
        [
        'classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sectionsList' => $sectionArray,
        'sessionList'   => $sessionArray
        ], compact("students"));
    }

    public function montlySearch(Request $request)
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);
        
        $from = $request->form_date;
        $to = $request->to_date;
        // $to = date('Y-m-d', strtotime(date('Y-m-d') . ' +1 day'));
        $class = $request->class;
        $shift = $request->shift;
        $section = $request->section;
        $session = $request->session;

    $students = StudentAttendence::whereBetween('created_at', [$from, $to])
    ->where('class', $class)
        ->where('shift', $shift)
        ->where('section', $section)
        ->where('session', $session)
        ->get();
        return view("admin.StudentAttendenceModule.student_monthly_attendence_summary",[
            'classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sectionsList' => $sectionArray,
        'sessionList'   => $sessionArray
        ], compact("students"));
    }

    public function monthlyAttendenceDownload()
    {
        $classTable = DB::select('select * from classes');
        $classList = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftList = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionList = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionList = json_decode(json_encode($sectionTable), true);

        $students = StudentAttendence::all();

        $pdf = Pdf::loadView('admin.StudentAttendenceModule.student_monthly_attendence_summary_pdf',
        compact("students", "sessionList", "classList","sectionList"));

        return $pdf->download('student_monthl_attendence_summary.pdf');
        return $pdf->stream();
    }

    public function detailsDaily(Request $request)
    {
        $todaysDate = date('Y-m-d');
        $class_student = $request->input('class');
        $students = StudentAttendence::where('date',$todaysDate)
		->where("absent_status", 0)
		->where("class", $class_student)
		->orderBy("id", "desc")
		->get();
        
        return view("admin.StudentAttendenceModule.student-absent-ajax", compact("students"));
    }

    public function sendSmsProses()
    {
        $todaysDate = date('Y-m-d');
        $students = StudentAttendence::where('date',$todaysDate)
		->where("absent_status", 0)
		->pluck("guardian_mobil");
            $apiKey = '4AQkrR7nNH3x7OJAVAjp8zRX5mAfKq6/t09cH+zec1E=';
            $clientId = '815b6d25-3139-41fb-a6c3-40075d832056';
            $senderId = '8809617611841';
            $client = new Client();
        foreach ($students as $st)
        {
            $message = "This is test massage";
            
            $response = $client->request('GET', "http://smsp2.durjoysoft.com/api/v2/SendSMS?ApiKey=$apiKey&ClientId=$clientId&SenderId=$senderId&$message SMS&MobileNumbers=$st&Is_Unicode=false&Is_Flash=false", [
            ]);

            return $statusCode = $response->getStatusCode();
            return $responseData = $response->getBody();
            return redirect("/student-absent")->with("message" , "SMS send Successfully");
        }
    }
}
