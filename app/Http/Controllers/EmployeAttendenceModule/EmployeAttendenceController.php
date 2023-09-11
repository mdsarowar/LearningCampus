<?php

namespace App\Http\Controllers\EmployeAttendenceModule;

use App\Http\Controllers\Controller;
use App\Models\EmployeeAttendence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;

class EmployeAttendenceController extends Controller
{
    public function todayAttendence()
    {
        $todayDate = date("Y-m-d");
         $empolyees = EmployeeAttendence::where("attendence_date",$todayDate)->where("attendences_status", 1)->orderBy("id", "desc")->get();
        $total = EmployeeAttendence::where("attendence_date",$todayDate)->where("attendences_status", 1)->count();
        return view("admin.EmployeeAttendence.employe_today_attendence", compact("empolyees", "total"));
    }

    public function manulAttendence()
    {
        $employeeTable = DB::select('select * from employeetypes');
        $employeeArray = json_decode(json_encode($employeeTable), true);

        $workingshiftsTable = DB::select('select * from workingshifts');
        $workingshiftsArray = json_decode(json_encode($workingshiftsTable), true);
        $todaysDate = date('Y-m-d');
        $employees = EmployeeAttendence::where('attendence_date',$todaysDate)->where("attendences_status", 1)->orderBy("id", "desc")->get();
        return view("admin.EmployeeAttendence.employe_manual_attendence",
    [
        "employeetypesList" => $employeeArray,
        "workingshiftsList" => $workingshiftsArray
    ], compact("employees")
    );
    }

    public function manulAttendenceSearch(Request $request)
    {
        $employeeTable = DB::select('select * from employeetypes');
        $employeeArray = json_decode(json_encode($employeeTable), true);

        $workingshiftsTable = DB::select('select * from workingshifts');
        $workingshiftsArray = json_decode(json_encode($workingshiftsTable), true);

        $workingshift = $request->workingshift;
        $employeetype = $request->employeetype;
        $attendence_date = $request->attendence_date;
        // return $request->all();
        $employees = EmployeeAttendence::where("attendence_date", $attendence_date)
        ->where("working_shift", $workingshift)
        ->where("employee_type", $employeetype)
        ->where("attendences_status", 1)
        ->get();

        return view("admin.EmployeeAttendence.employe_manual_attendence",
        [
            "employeetypesList" => $employeeArray,
            "workingshiftsList" => $workingshiftsArray
        ], compact("employees")
    );
    }
    
    public function attendenceDetails()
    {
        $employeeTable = DB::select('select * from employeetypes');
        $employeeArray = json_decode(json_encode($employeeTable), true);

        $employee_personalsTable = DB::select('select * from employee_personals');
        $employee_personalsArray = json_decode(json_encode($employee_personalsTable), true);

        $workingshiftsTable = DB::select('select * from workingshifts');
        $workingshiftsArray = json_decode(json_encode($workingshiftsTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);
        $employees = EmployeeAttendence::all();

        return view("admin.EmployeeAttendence.employe_attendence_details",
        [
            "employeetypesList" => $employeeArray,
            "employee_personalsList" => $employee_personalsArray,
            "workingshiftsList" => $workingshiftsArray,
            'sessionList'   => $sessionArray
        ],compact("employees")
    );
    }
    
    public function attendenceDetailsSearch(Request $request)
    {
        $employeeTable = DB::select('select * from employeetypes');
        $employeeArray = json_decode(json_encode($employeeTable), true);

        $employee_personalsTable = DB::select('select * from employee_personals');
        $employee_personalsArray = json_decode(json_encode($employee_personalsTable), true);

        $workingshiftsTable = DB::select('select * from workingshifts');
        $workingshiftsArray = json_decode(json_encode($workingshiftsTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $workingshift = $request->workingshift;
        $employeetype = $request->employeetype;
        $employee_name= $request->employee_name;
        $month = $request->month;
        $year = $request->year;
        // return $request->all();
        $employees = EmployeeAttendence::where("month", $month)
        ->where("working_shift", $workingshift)
        ->where("employee_type", $employeetype)
        ->where("employee_name", $employee_name)
        ->where("year", $year)
        ->get();

        return view("admin.EmployeeAttendence.employe_attendence_details",
        [
            "employeetypesList" => $employeeArray,
            "employee_personalsList" => $employee_personalsArray,
            "workingshiftsList" => $workingshiftsArray,
            'sessionList'   => $sessionArray
        ], compact("employees")
    );
    }

    public function detailsAttendenceDownload()
    {
        $employeeTable = DB::select('select * from employeetypes');
        $employeetypesList = json_decode(json_encode($employeeTable), true);

         $workingshiftsTable = DB::select('select * from workingshifts');
        $workingshiftsList = json_decode(json_encode($workingshiftsTable), true);
        
        
        $employees = EmployeeAttendence::all();
        $pdf = Pdf::loadView('admin.EmployeeAttendence.employe_attendence_details_pdf',
        compact("employees", "employeetypesList", "workingshiftsList"));

        return $pdf->download('employee_details_attendence_summary.pdf');
        return $pdf->stream();
    }
    
    public function dailyAttendenceSummary()
    {
        $employeeTable = DB::select('select * from employeetypes');
        $employeeArray = json_decode(json_encode($employeeTable), true);

        $workingshiftsTable = DB::select('select * from workingshifts');
        $workingshiftsArray = json_decode(json_encode($workingshiftsTable), true);
        $employees = EmployeeAttendence::all();
        return view("admin.EmployeeAttendence.employee_daily_attendence_summary",
        [
            "employeetypesList" => $employeeArray,
            "workingshiftsList" => $workingshiftsArray
        ], compact("employees")
    );
    }

     public function dailyAttendenceSearch(Request $request)
    {
        $employeeTable = DB::select('select * from employeetypes');
        $employeeArray = json_decode(json_encode($employeeTable), true);

        $workingshiftsTable = DB::select('select * from workingshifts');
        $workingshiftsArray = json_decode(json_encode($workingshiftsTable), true);

        $workingshift = $request->workingshift;
        $employeetype = $request->employeetype;
        $date = $request->date;
        // return $request->all();
        $employees = EmployeeAttendence::where("attendence_date", $date)
        ->where("working_shift", $workingshift)
        ->where("employee_type", $employeetype)
        ->get();
        return view("admin.EmployeeAttendence.employee_daily_attendence_summary",
        [
            "employeetypesList" => $employeeArray,
            "workingshiftsList" => $workingshiftsArray
        ], compact("employees")
    );
    }

    public function dailyAttendenceDownload()
    {
     $employeeTable = DB::select('select * from employeetypes');
        $employeetypesList = json_decode(json_encode($employeeTable), true);

     $workingshiftsTable = DB::select('select * from workingshifts');
     $workingshiftsList = json_decode(json_encode($workingshiftsTable), true);
        
        
        $employees = EmployeeAttendence::all();
        $pdf = Pdf::loadView('admin.EmployeeAttendence.employee_daily_attendence_summary_pdf',
        compact("employees", "employeetypesList", "workingshiftsList"));

        return $pdf->download('employee_daily_attendence_summary.pdf');
        return $pdf->stream();

        
    }


    
    public function monthlyAttendenceSummary()
    {
        $employeeTable = DB::select('select * from employeetypes');
        $employeeArray = json_decode(json_encode($employeeTable), true);

        $workingshiftsTable = DB::select('select * from workingshifts');
        $workingshiftsArray = json_decode(json_encode($workingshiftsTable), true);
        $employees = EmployeeAttendence::all();
        return view("admin.EmployeeAttendence.employee_monthly_attendence_summary",
        [
            "employeetypesList" => $employeeArray,
            "workingshiftsList" => $workingshiftsArray
        ], compact("employees")
    );
    }

    public function monthlyAttendenceSearch(Request $request)
    {
        $employeeTable = DB::select('select * from employeetypes');
        $employeeArray = json_decode(json_encode($employeeTable), true);

        $workingshiftsTable = DB::select('select * from workingshifts');
        $workingshiftsArray = json_decode(json_encode($workingshiftsTable), true);
        
        $workingshift = $request->workingshift;
        $employeetype = $request->employeetype;
        $month = $request->month;
        // return $request->all();

        $employees = EmployeeAttendence::where("month", $month)
        ->where("working_shift", $workingshift)
        ->where("employee_type", $employeetype)
        ->get();
        return view("admin.EmployeeAttendence.employee_monthly_attendence_summary",
        [
            "employeetypesList" => $employeeArray,
            "workingshiftsList" => $workingshiftsArray
        ], compact("employees")
        );
    }

    public function monthlyAttendenceDownload()
    {
     $employeeTable = DB::select('select * from employeetypes');
        $employeetypesList = json_decode(json_encode($employeeTable), true);

     $workingshiftsTable = DB::select('select * from workingshifts');
     $workingshiftsList = json_decode(json_encode($workingshiftsTable), true);
        
        
        $employees = EmployeeAttendence::all();
        $pdf = Pdf::loadView('admin.EmployeeAttendence.employee_monthly_attendence_summary_pdf',
        compact("employees", "employeetypesList", "workingshiftsList"));

        return $pdf->download('employee_monthly_attendence_summary.pdf');
        return $pdf->stream();

        
    }
}
