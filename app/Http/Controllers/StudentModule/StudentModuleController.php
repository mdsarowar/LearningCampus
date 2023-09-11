<?php

namespace App\Http\Controllers\StudentModule;

use App\Http\Controllers\Controller;

class StudentModuleController extends Controller {
    public function studentAdmission() {
        return view( 'admin.StudentModule.students-add' );
    }
    public function printAdmissionForm() {
        return view( 'admin.StudentModule.print_admission_form' );
    }
    public function currentStudentList() {
        return view( 'admin.StudentModule.current_student' );
    }
    public function archiveStudentList() {
        return view( 'admin.StudentModule.archive_student' );
    }
    public function currentStudentSearch() {
        return view( 'admin.StudentModule.current_student' );
    }
    public function archiveStudentSearch() {
        return view( 'admin.StudentModule.archive_student_search' );
    }
    public function studentSwitchProcess() {
        return view( 'admin.StudentModule.student_switch' );
    }
    public function studentMigrationProcess() {
        return view( 'admin.StudentModule.student_migration' );
    }
    public function printStudentIdCard() {
        return view( 'admin.StudentModule.print_student_id' );
    }
    public function studentBiometricExport() {
        return view( 'admin.StudentModule.student_biometric_export' );
    }
    public function printStudentTestomonial() {
        return view( 'admin.StudentModule.testomonial' );
    }
    public function StudentView() {
        return view( 'admin.StudentModule.student_view' );
    }

}
