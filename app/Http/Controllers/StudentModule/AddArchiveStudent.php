<?php

namespace App\Http\Controllers\StudentModule;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddArchiveStudent extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $tables = ['teachers', 'classes', 'shifts', 'sections', 'subjects', 'gender', 'religion', 'sessions', 'current_students'];
        $dataArrays = [];

        foreach ( $tables as $table ) {
            $dataList = DB::select( "select * from $table" );
            $dataArrays[$table . 'List'] = json_decode( json_encode( $dataList ), true );
        }
        // dd($dataArrays);
        return view( 'admin.StudentModule.archive_student_add', $dataArrays );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $time = new DateTime();
        $time_string = $time->format( 'YmdHis' );

        $session = $request->input( 'session' );
        $shift = $request->input( "shift" );
        $class = $request->input( "class" );
        $class_type = '';
        if ( strpos( $class, 'Bangla_' ) === 0 ) {
            $class_type = 'Bangla';
            $class = substr( $class, strlen( 'Bangla_' ) );
        } elseif ( strpos( $class, 'English_' ) === 0 ) {
            $class_type = 'English';
            $class = substr( $class, strlen( 'English_' ) );
        }
        $section = $request->input( "section" );
        $device_serial = $request->input( "device_serial" );
        $student_id = $request->input( "student_id" );
        $tracking_id = $request->input( "tracking_id" );
        $roll_no = $request->input( "roll_no" );
        $rfid_card_no = $request->input( "rfid_card_no" );
        $attendance_sms = $request->input( "attendance_sms" );

        $name_eng = $request->input( "name_eng" );
        $eng_bng = $request->input( "eng_bng" );
        $blood_group = $request->input( "blood_group" );
        $religion = $request->input( "religion" );
        $device_serial_personal = $request->input( "device_serial_personal" );
        $student_id_personal = $request->input( "student_id_personal" );
        $date_of_birth = $request->input( "date_of_birth" );
        $nationality = $request->input( "nationality" );
        $gender = $request->input( "gender" );
        if ( strpos( $name_eng, ' ' ) !== false ) {
            $name_eng_tmp = str_replace( ' ', '-', $name_eng );
        }
        // return ($request->hasFile('photo'));
        if ( $request->hasFile( 'photo' ) ) {
            $image_name = $name_eng_tmp . '_' . $time_string;
            $request->file( 'photo' )->move( 'assets/Uploads/students_photo/', $image_name );
            $image_url_photo = url( 'assets/Uploads/students_photo/' . $image_name );
        }
        // $photo = $request->input( "photo" );

        $mobile = $request->input( "mobile" );
        $email = $request->input( "email" );
        $present_address = $request->input( "present_address" );
        $parmanat_address = $request->input( "parmanat_address" );

        $fathers_name = $request->input( "fathers_name" );
        $fathers_phone = $request->input( "fathers_phone" );
        $fathers_nid = $request->input( "fathers_nid" );
        $fathers_profession = $request->input( "fathers_profession" );
        $fathers_designation = $request->input( "fathers_designation" );
        $office_name_address_father = $request->input( "office_name_address_father" );
        $fathers_office_contact_no = $request->input( "fathers_office_contact_no" );
        if ( strpos( $fathers_name, ' ' ) !== false ) {
            $fathers_name_tmp = str_replace( ' ', '-', $fathers_name );
        }

        if ( $request->hasFile( 'fathers_photo' ) ) {
            $image_name = $fathers_name_tmp . '_' . $time_string;
            $request->file( 'fathers_photo' )->move( 'assets/Uploads/parents/', $image_name );
            $image_url_f_photo = url( 'assets/Uploads/parents/' . $image_name );
        }
        // $fathers_photo = $request->input( "fathers_photo" );

        $mothers_name = $request->input( "mothers_name" );
        $mothers_phone = $request->input( "mothers_phone" );
        $mothers_nid = $request->input( "mothers_nid" );
        $mothers_profession = $request->input( "mothers_profession" );
        $mothers_designation = $request->input( "mothers_designation" );
        $office_name_address_mother = $request->input( "office_name_address_mother" );
        $mothers_office_contact_no = $request->input( "mothers_office_contact_no" );
        if ( strpos( $mothers_name, ' ' ) !== false ) {
            $mothers_name_tmp = str_replace( ' ', '-', $mothers_name );
        }

        if ( $request->hasFile( 'mothers_photo' ) ) {
            $image_name = $mothers_name_tmp . '_' . $time_string;
            $request->file( 'mothers_photo' )->move( 'assets/Uploads/parents', $image_name );
            $image_url_m_photo = url( 'assets/Uploads/parents/' . $image_name );
        }
        // $mothers_photo = $request->input( "mothers_photo" );

        $guardian_receiver = $request->input( "guardian_receiver" );
        $guardians_name = $request->input( "guardians_name" );
        $relations_with_student = $request->input( "relations_with_student" );
        $guardians_phone = $request->input( "guardians_phone" );
        $guardians_profession = $request->input( "guardians_profession" );
        $guardians_designation = $request->input( "guardians_designation" );
        $office_contact_no = $request->input( "office_contact_no" );
        $office_name_address = $request->input( "office_name_address" );
        $status = $request->input( "status" );

        // return $image_url_photo;

        $insertData = DB::insert( 'insert into archive_students
        (Session,Shift, Class,Section ,DeviceSerialMAC , StudentId,TrackingID ,RFIDCardNo , AttendanceSMS,NameEnglish,NameBengali ,BloodGroup , Religion, DeviceSerialMACPersonal,StudentIdPersonal , DateOfBirth,Nationality ,Gender , Photo, Mobile,Email ,PresentAddress ,ParmanantAddress ,FatherName , MotherName,FatherPhone , MotherPhone, FatherNID ,MotherNID , FatherProfession, MotherProfession, FatherDesignation,MotherDesignation ,OfficeNameAddressFather ,OfficeNameAddressMother ,FatherOfficeContactNo ,MotherOfficeContactNo ,FatherPhoto,MotherPhoto ,GuardianType ,GuardianProfession , GuardianName, GuardianDesignation,RelationWithStudent , GuardianOfficeContactNo, GuardianPhone,OfficeNameAddress ,Status)
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ? , ?, ?,?,?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ?, ? , ? , ? , ?, ?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $session, $shift, $class_type, $section, $device_serial, $student_id, $tracking_id, $rfid_card_no, $attendance_sms, $name_eng, $eng_bng, $blood_group, $religion, $device_serial_personal, $student_id_personal, $date_of_birth, $nationality, $gender, $image_url_photo, $mobile, $email, $present_address, $parmanat_address,
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
            $image_url_f_photo,
            $image_url_m_photo,

            $guardian_receiver,
            $guardians_profession,
            $guardians_name,
            $guardians_designation,
            $relations_with_student,
            $office_contact_no,
            $guardians_phone,
            $office_name_address, $status,
        ] );

        if ( $insertData ) {
            // return $request->input();
            return redirect( route( 'archive.student' ) )->with( 'success', "New Students added successfully" );
        } else {
            // return $insertData;
            return redirect( route( 'archive.student' ) )->with( 'error', 'Failed to create new student' );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        $student = DB::select( "SELECT * FROM archive_students where id = $id" );
        // dd($student);
        return view( 'admin.StudentModule.archive_student_view', ['student' => $student[0]] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id ) {
        $student = DB::select( "SELECT * FROM archive_students where id = $id" );
        // dd($student);
        return view( 'admin.StudentModule.archive_student_edit', ['student' => $student[0]] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        $updated = DB::table( 'archive_students' )->where( 'id', $id )->update( [
            'Session'                 => $request->input( 'session' ),
            'Shift'                   => $request->input( 'shift' ),
            'Class'                   => $request->input( 'class' ),
            'Section'                 => $request->input( 'section' ),

            'DeviceSerialMAC'         => $request->input( 'deviceSerial' ),
            'StudentId'               => $request->input( 'studentId' ),
            'TrackingID'              => $request->input( 'trackingId' ),
            'RFIDCardNo'              => $request->input( 'rfidCardNo' ),
            'AttendanceSMS'           => $request->input( 'attendancesms' ),
            'NameEnglish'             => $request->input( 'nameEnglish' ),
            'BloodGroup'              => $request->input( 'bloodGroup' ),
            'NameBengali'             => $request->input( 'nameBengali' ),
            'Religion'                => $request->input( 'religion' ),
            'DeviceSerialMACPersonal' => $request->input( 'deviceSerial' ),
            'StudentIdPersonal'       => $request->input( 'studentIdP' ),
            'DateOfBirth'             => $request->input( 'dob' ),
            'Nationality'             => $request->input( 'nationality' ),
            'Gender'                  => $request->input( 'gender' ),
            'Photo'                   => $request->input( 'photo' ),
            'Mobile'                  => $request->input( 'mobile' ),
            'Email'                   => $request->input( 'email' ),
            'PresentAddress'          => $request->input( 'presentAddress' ),
            'ParmanantAddress'        => $request->input( 'parmanantAddress' ),
            'FatherName'              => $request->input( 'fathername' ),
            'MotherName'              => $request->input( 'mothername' ),
            'FatherPhone'             => $request->input( 'fatherphone' ),
            'MotherPhone'             => $request->input( 'motherphone' ),
            'FatherNID'               => $request->input( 'fathernid' ),
            'MotherNID'               => $request->input( 'mothernid' ),
            'FatherProfession'        => $request->input( 'fatherPro' ),
            'MotherProfession'        => $request->input( 'motherPro' ),
            'FatherDesignation'       => $request->input( 'fatherDes' ),
            'MotherDesignation'       => $request->input( 'motherDes' ),
            'OfficeNameAddressFather' => $request->input( 'officeNAF' ),
            'OfficeNameAddressMother' => $request->input( 'officeNAM' ),
            'FatherOfficeContactNo'   => $request->input( 'focn' ),
            'MotherOfficeContactNo'   => $request->input( 'mocn' ),
            'FatherPhoto'             => $request->input( 'fp' ),
            'MotherPhoto'             => $request->input( 'mp' ),
            'GuardianType'            => $request->input( 'guardian_receiver' ),
            'GuardianProfession'      => $request->input( 'gPro' ),
            'GuardianName'            => $request->input( 'gn' ),
            'GuardianDesignation'     => $request->input( 'gd' ),
            'RelationWithStudent'     => $request->input( 'rws' ),
            'GuardianOfficeContactNo' => $request->input( 'ocn' ),
            'GuardianPhone'           => $request->input( 'gp' ),
            'OfficeNameAddress'       => $request->input( 'onag' ),
            'Status'                  => $request->input( 'status' ),
        ] );

        // dd($updated);
        if ( $updated ) {
            return redirect()->back()->with( 'success', 'Student Info updated successfully' );
        } else {
            return redirect()->back()->with( 'error', 'Failed to update student info' );
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request ) {
        $archive_id = $request->label_id;

        $query = DB::table( 'archive_students' )->where( 'id', $archive_id )->delete();
        if ( $query ) {
            return redirect()->back()->with( 'success', 'Archive Student deleted successfully' );
        } else {
            return redirect()->back()->with( 'error', 'Failed to delete student' );
        }
    }
}
