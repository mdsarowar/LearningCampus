<?php

namespace App\Http\Controllers\StudentAccounts;

use App\Http\Controllers\Controller;
use App\Models\StudentAdmissionFee;
use App\Models\StudentFee;
use App\Models\StudentFeeCollection;
use App\Models\StudentMonthlyFee;
use App\Models\StudentWavier;
use App\Models\Wavier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentAccountsController extends Controller
{
    public function admissionFee()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $studentsTable = DB::select('select * from student_admission');
        $studentsArray = json_decode(json_encode($studentsTable), true);

        

        return view("admin.StudentAccounts.admission_fee",
        ['classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sectionsList' => $sectionArray,
        'studentsLests' =>$studentsArray,
        'sessionList'   => $sessionArray
    ]);
    }

    public function addAdmissionFee(Request $request)
    {
        StudentAdmissionFee::newAdmissionFee($request);
        return redirect("/admission-fee")->with("message", "Student Addmission Fees Add Successfully");
    }

    

    public function cancelAdmissionFee()
    {
        return redirect("/admission-fee")->with("message", "Student Addmission Fees Canaled Successfully");
    }

    public function monthlyFee()
    {
       
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $students = StudentAdmissionFee::all();
        return view("admin.StudentAccounts.monthly_fees", 
        ['classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sessionList'   => $sessionArray,
        'sectionsList' => $sectionArray,
        "students" => $students]

    );
    }

    public function addMonthlyFee(Request $request)
    {
        StudentMonthlyFee::newMonthlyFee($request);
        
        return redirect("/admission-monthly-fee")->with("message", "Student Addmission (Monthly) Fees Add Successfully");
    }

   

    public function cancelmonthlyFee()
    {
        return redirect("/admission-monthly-fee")->with("message", "Student Addmission (Monthly) Fees Canaled Successfully");
    }

    public function studentFee()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $students = StudentAdmissionFee::all();

        return view("admin.StudentAccounts.student_fee",
        ['classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sessionList'   => $sessionArray,
        'sectionsList' => $sectionArray,
        'students' => $students]);
    }

    public function studentFeeStore(Request $request)
    {
        StudentFee::newstudentFeeStore($request);
        return redirect("/student-fee")->with("message", "Student Fees Add Successfully");
    }

    public function cancelStudentFee()
    {
        return redirect("/student-fee")->with("message", "Student Fees Canaled Successfully");
    }

    public function studentWavier()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $students = StudentAdmissionFee::all();

        return view("admin.StudentAccounts.student_wavier",
        ['classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sessionList'   => $sessionArray,
        'sectionsList' => $sectionArray,
        'students' => $students]);
    }

    public function studentWavierStore(Request $request)
    {
        StudentWavier::newstudentWavierStore($request);
        return redirect("/student-wavier")->with("message", "Student Wavier Add Successfully");
    }

    public function studentWavierCancel()
    {
       
        return redirect("/student-wavier")->with("message", "Student Wavier Canaled Successfully");
    }

    // public function quickCollection()
    // {
    //     $classTable = DB::select('select * from classes');
    //     $classArray = json_decode(json_encode($classTable), true);

    //     $shiftTable = DB::select('select * from shifts');
    //     $shiftArray = json_decode(json_encode($shiftTable), true);

    //     $sectionTable = DB::select('select * from sections');
    //     $sectionArray = json_decode(json_encode($sectionTable), true); 
    //     $students = StudentAdmissionFee::all();   
    //     return view("admin.StudentAccounts.quick_collection",
    //     ['classesList' => $classArray,
    //     'shiftsList' => $shiftArray,
    //     'sectionsList' => $sectionArray,
    //     "students" => $students]);
    // }

    // public function quickCollectionSearch(Request $request)
    // {
        
    //     return view("admin.StudentAccounts.quick_collection");
    // }

    // public function quickCollectionDetails()
    // {
    //     return view("admin.StudentAccounts.quick_collection_details");
    // }

    public function addFees()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sessionTable = DB::select("SELECT session_name FROM sessions");
        $sessionArray = json_decode(json_encode($sessionTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $students = StudentAdmissionFee::all();
        return view("admin.StudentAccounts.add_fees",
    [
        'classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sessionList'   => $sessionArray,
        'sectionsList' => $sectionArray,
        'students' => $students
    ]);
    }

    public function addFeesStore(Request $request)
    {
        StudentFeeCollection::newaddFeesStore($request, $this->getFolioNo($request), $this->getDeueFee($request));
        return redirect("/add-fees")->with("message", "Student Fees Add Successfully");
    }
    public function getFolioNo($request)
    {
        $student = StudentAdmissionFee::orderBy("id", "desc")->first();
        if($student)
        {
            $id = $student->id +1;
        }
        else
        {
            $id = 1;
        }
        $updateString = preg_replace('/[^A-Za-z0-9]/', "", $request->student_name_id);
        $student_class = strtoupper(substr($updateString, 0,3));
        $year = date('Y');
        $folio = $student_class.$year.$id;
        return $folio;
    }

    public function getDeueFee($request)
    {
        $student = StudentAdmissionFee::orderBy("id", "desc")->first();
        if($student)
        {
            $totalFee = $request->total_fee;
            $paideFee = $request->paid_fee;
            $deueFee = $totalFee - $paideFee ;
        }
        return $deueFee;
    }

    public function detail()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);
        $students = StudentFeeCollection::all();
        return view("admin.StudentAccounts.view_detail",
    [
        'classesList' => $classArray,
            'shiftsList' => $shiftArray,
            'sectionsList' => $sectionArray,
            "students" => $students 
    ]);
    }

    public function detailSearch(Request $request)
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        $student_class = $request->student_class;
        $session = $request->session;
        $shift_name = $request->shift_name;
        $students = StudentFeeCollection::where("student_class", $student_class)
        ->where("session", $session)
        ->where("shift_name", $shift_name)->get();
        return view("admin.StudentAccounts.view_detail", 
    [
        'classesList' => $classArray,
            'shiftsList' => $shiftArray,
            'sectionsList' => $sectionArray,
            "students" => $students 
    ]);
    }

    public function feesRecollection()
    {
        $students = StudentFeeCollection::all();
        return view("admin.StudentAccounts.fees_recollection", compact("students"));
    }

    public function search(Request $request)
    {
        $folio_no = $request->folio_no;
        $students = StudentFeeCollection::where("folio_no", $folio_no)->get();
        return view("admin.StudentAccounts.fees_recollection", compact("students"));
    }

    // public function feesRecollectionEdit($folio_no)
    // {
    //     $student = StudentFeeCollection::find($folio_no);

    //     return view("admin.StudentAccounts.admission_fee_recollection", compact("student"));
    // }
    public function printInvoice()
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);
        $invoices = StudentFeeCollection::all();
        return view("admin.StudentAccounts.print_invoice",
    [
            'classesList' => $classArray,
            'shiftsList' => $shiftArray,
            'sectionsList' => $sectionArray,
            'invoices' => $invoices
    ] );
    }

    public function invoiceSearch(Request $request)
    {
        $classTable = DB::select('select * from classes');
        $classArray = json_decode(json_encode($classTable), true);

        $shiftTable = DB::select('select * from shifts');
        $shiftArray = json_decode(json_encode($shiftTable), true);

        $sectionTable = DB::select('select * from sections');
        $sectionArray = json_decode(json_encode($sectionTable), true);

        
        $folio_no = $request->folio_no;

        $invoices =  StudentFeeCollection::where("folio_no", $folio_no)->get();
        return view("admin.StudentAccounts.print_invoice", 
        ['classesList' => $classArray,
        'shiftsList' => $shiftArray,
        'sectionsList' => $sectionArray,
        'invoices' => $invoices]);
    }

    public function printInvoiceFile($id)
    {
        $invoice = StudentFeeCollection::find($id);
        return view("admin.StudentAccounts.print_invoice_file", compact("invoice"));
    }
}
