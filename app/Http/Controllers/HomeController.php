<?php

namespace App\Http\Controllers;


use App\Http\Controllers\PromotionalModule\PromotionalSMSController;
use App\Models\EmployeeAttendence;
use App\Models\StudentAttendence;
use App\Models\Employeetype;
use App\Models\EmployeeProfessionals;
use App\Models\StudentAdmissionFee;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home()
    {
        $bgColor = DB::table('institute_settings')->latest('created_at', 'desc')->first()->admin_theme;

        $todaysDate = date('Y-m-d');
        $students = StudentAttendence::where('date', $todaysDate)
        ->where("absent_status", 1)
        ->orderBy("id", "desc")
        ->take("3")
        ->get();

        $todayDate = date("Y-m-d");
        $empolyees = EmployeeAttendence::where("attendence_date", $todayDate)
        ->where("attendences_status", 1)
        ->orderBy("id", "desc")
        ->take("3")
        ->get();

        /* get total sent sms */
        $sms_query = "SELECT COUNT(*) as count FROM sms_details_reports";
        $sms_query_result = DB::select($sms_query);
        $total_sent_sms = json_decode(json_encode($sms_query_result), true);

        /* get sms balance */
        $url = 'http://smsp2.durjoysoft.com/api/v2/Balance';
        $apiKey = '4AQkrR7nNH3x7OJAVAjp8zRX5mAfKq6/t09cH+zec1E=';
        $clientId = '815b6d25-3139-41fb-a6c3-40075d832056';

        $queryParams = http_build_query([
                'ApiKey' => $apiKey,
                'ClientId' => $clientId,
            ]);

        $fullUrl = $url . '?' . $queryParams;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $fullUrl,
            CURLOPT_RETURNTRANSFER => true,
        ));

        $response = curl_exec($curl);
        $data = json_decode($response, true);

        $credits = $data['Data'][0]['Credits'];
        $numericValue = floatval(preg_replace("/[^0-9.]/", "", $credits));
        $sms_credit = number_format($numericValue, 2);


        $student_admission_list_query = "SELECT * FROM student_admission";
        $student_admission_list = DB::select($student_admission_list_query);
        $student_admission_array = json_decode(json_encode($student_admission_list), true);
        
        
        $teacher = Employeetype::where('name', 'teacher')->first();
        $type = EmployeeProfessionals::where('type', $teacher->id)->get();
        $student=StudentAdmissionFee::all();
        $staff = Employeetype::where('name', 'staff')->first();
        $stafftype=EmployeeProfessionals::where('type',$staff->id)->get();


        return view('index', [
            'total_sent_sms' => $total_sent_sms,
            'sms_credit' => $sms_credit,
            'empolyees' => $empolyees,
            'students' => $students,
            'bgColor' => $bgColor,
            'student_admissionList' => $student_admission_array,
            'teachers' => count($type),
             'staffs'=>count($stafftype),
             'student'=>count($students),

        ]);
    }


    public function show(string $id)
    {

        $tables = ['sessions', 'shifts', 'student_admission'];
        $dataArrays = [];

        foreach ($tables as $table) {
            $dataList = DB::select("select * from $table");
            $dataArrays[$table . 'List'] = json_decode(json_encode($dataList), true);
        }
        // dd($id);
        $student = DB::select("SELECT * FROM student_admission where id = $id");
        // dd($dataArrays);
        return view('admin.StudentModule.student_admission_view', ['student' => $student[0], $dataArrays]);
    }
    public function edit(string $id)
    {
        $student = DB::select("SELECT * FROM student_admission where id = $id");
        // dd($student);
        if (empty($student)) {
            // Handle the case where no student record was found with the given ID
            return redirect()->back()->with('error', 'Student not found');
        }

        return view('admin.StudentModule.student_admission_edit', ['student' => $student[0]]);
        // return view('admin.StudentModule.student_admission_edit', ['student' => $student[0]]);
    }

    public function update(Request $request, $id)
    {

        // dd($id);
        $time = new DateTime();
        $time_string = $time->format('YmdHis');

        $session = $request->input('session');
        $shift = $request->input("shift");
        $class = $request->input("class");
        $class_type = '';
        if (strpos($class, 'Bangla_') === 0) {
            $class_type = 'Bangla';
            $class = substr($class, strlen('Bangla_'));
        } elseif (strpos($class, 'English_') === 0) {
            $class_type = 'English';
            $class = substr($class, strlen('English_'));
        }
        $section = $request->input("section");

        $device_serial = $request->input("deviceSerial");
        $student_id = $request->input("studentId");
        $tracking_id = $request->input("trackingId");
        $roll_no = $request->input("roll_no");
        $rfid_card_no = $request->input("rfidCardNo");
        $attendance_sms = $request->input("attendancesms");

        $name_eng = $request->input("nameEnglish");
        $eng_bng = $request->input("nameBengali");
        $blood_group = $request->input("bloodGroup");
        $religion = $request->input("religion");
        $device_serial_personal = $request->input("deviceSerial");
        $student_id_personal = $request->input("studentIdP");
        $date_of_birth = $request->input("dob");
        $nationality = $request->input("nationality");
        $gender = $request->input("gender");
        // if (strpos($name_eng, ' ') !== false) {
        //     $name_eng_tmp = str_replace(' ', '-', $name_eng);
        // }
        // if ($request->hasFile('photo')) {
        //     $image_name = $name_eng_tmp . '_' . $time_string;
        //     $request->file('photo')->move('assets/Uploads/students_photo/', $image_name);
        //     $image_url_photo = url('assets/Uploads/students_photo/' . $image_name);
        // }
        // return $image_url_photo;
        // return $request->input('photo');
        $photo = $request->input("photo");

        $mobile = $request->input("mobile");
        $email = $request->input("email");
        $present_address = $request->input("presentAddress");
        $parmanat_address = $request->input("parmanantAddress");

        $fathers_name = $request->input("fathername");
        $fathers_phone = $request->input("fatherphone");
        $fathers_nid = $request->input("fathernid");
        $fathers_profession = $request->input("fatherPro");
        $fathers_designation = $request->input("fatherDes");
        $office_name_address_father = $request->input("officeNAF");
        $fathers_office_contact_no = $request->input("focn");
        // if (strpos($fathers_name, ' ') !== false) {
        //     $fathers_name_tmp = str_replace(' ', '-', $fathers_name);
        // }

        // if ($request->hasFile('fp')) {
        //     $image_name = $fathers_name_tmp . '_' . $time_string;
        //     $request->file('fathers_photo')->move('assets/Uploads/parents/', $image_name);
        //     $image_url_f_photo = url('assets/Uploads/parents' . $image_name);
        // }
        $fathers_photo = $request->input("fp");

        $mothers_name = $request->input("mothername");
        $mothers_phone = $request->input("motherphone");
        $mothers_nid = $request->input("mothernid");
        $mothers_profession = $request->input("motherPro");
        $mothers_designation = $request->input("motherDes");
        $office_name_address_mother = $request->input("officeNAM");
        $mothers_office_contact_no = $request->input("mocn");
        // if (strpos($mothers_name, ' ') !== false) {
        //     $mothers_name_tmp = str_replace(' ', '-', $mothers_name);
        // }

        // if ($request->hasFile('mp')) {
        //     $image_name = $mothers_name_tmp . '_' . $time_string;
        //     $request->file('mothers_photo')->move('assets/Uploads/parents', $image_name);
        //     $image_url_m_photo = url('assets/Uploads/parents/' . $image_name);
        // }
        $mothers_photo = $request->input("mp");

        $guardian_receiver = $request->input("guardian_receiver");
        $guardians_name = $request->input("gn");
        $relations_with_student = $request->input("rws");
        $guardians_phone = $request->input("gp");
        $guardians_profession = $request->input("gPro");
        $guardians_designation = $request->input("gd");
        $office_contact_no = $request->input("ocn");
        $office_name_address = $request->input("onag");
        $status = $request->input("status");

        // return $image_url_photo;

        $insertData = DB::insert('insert into current_students
        (Session,Shift, Class,Section ,DeviceSerialMAC , StudentId,TrackingID ,RFIDCardNo , AttendanceSMS,NameEnglish,NameBengali ,BloodGroup , Religion, DeviceSerialMACPersonal,StudentIdPersonal , DateOfBirth,Nationality ,Gender , Photo, Mobile,Email ,PresentAddress ,ParmanantAddress ,FatherName , MotherName,FatherPhone , MotherPhone, FatherNID ,MotherNID , FatherProfession, MotherProfession, FatherDesignation,MotherDesignation ,OfficeNameAddressFather ,OfficeNameAddressMother ,FatherOfficeContactNo ,MotherOfficeContactNo ,FatherPhoto,MotherPhoto ,GuardianType ,GuardianProfession , GuardianName, GuardianDesignation,RelationWithStudent , GuardianOfficeContactNo, GuardianPhone,OfficeNameAddress ,Status)
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ? , ?, ?,?,?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ?, ? , ? , ? , ?, ?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $session, $shift, $class_type, $section, $device_serial, $student_id, $tracking_id, $rfid_card_no, $attendance_sms, $name_eng, $eng_bng, $blood_group, $religion, $device_serial_personal, $student_id_personal, $date_of_birth, $nationality, $gender, $photo, $mobile, $email, $present_address, $parmanat_address,
            $fathers_name,
            $mothers_name,
            $fathers_phone,
            $mothers_phone,
            $fathers_nid,
            $mothers_nid,
            $fathers_profession,
            $mothers_profession,
            $fathers_designation,
            $mothers_designation,
            $office_name_address_father,
            $office_name_address_mother,
            $fathers_office_contact_no,
            $mothers_office_contact_no,
            $fathers_photo,
            $mothers_photo,
            $guardian_receiver,
            $guardians_profession,
            $guardians_name,
            $guardians_designation,
            $relations_with_student,
            $office_contact_no,
            $guardians_phone,
            $office_name_address, $status,
        ]);

        if ($insertData) {
            // return $insertData;
            // return $request->input();
            $randomNumber = mt_rand('10000000', '99999999');
            $randomNumber1 = Hash::make($randomNumber);
            // return $randomNumber;
            $sendSMS = new PromotionalSMSController;
            $sms_body = "Your Student id for Username : " . $student_id . " Password : " . $randomNumber . " Your email : " . $email;
            $sendSMS->sendSms($mobile, $sms_body);

            $usersData = DB::insert('insert into users (name, email,phoneNumber,role,password, student_id) values (?,?,?,?,?,?)', [$name_eng, $email, $mobile, 'user', $randomNumber1, $student_id]);

            if ($usersData) {
                DB::table('student_admission')->where('id', $id)->delete();
            }

            return redirect()->route('current.student')->with('success', "New Students added successfully");
        } else {
            // return $insertData;
            return redirect()->back()->with('error', 'Failed to create new student');
        }
    }


}
