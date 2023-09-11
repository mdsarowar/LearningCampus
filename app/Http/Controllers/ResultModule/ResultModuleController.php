<?php

namespace App\Http\Controllers\ResultModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultModuleController extends Controller
{
    // public function examAdmitCard() {
    //     return view('admin.ResultModule.exam_admit_card');
    // }
    // public function examAttnBlank() {
    //     return view('admin.ResultModule.exam_attn_blank');
    // }
    // public function examAttnExam() {
    //     return view('admin.ResultModule.exam_attn_exam');
    // }
    // public function examAttnSubject() {
    //     return view('admin.ResultModule.exam_attn_subject');
    // }
    // public function examEligibilities() {
    //     return view('admin.ResultModule.exam_eligibilities');
    // }
    // public function examRoutine() {
    //     return view('admin.ResultModule.exam_routine');
    // }
    // public function examSeatPlan() {
    //     return view('admin.ResultModule.exam_seat_plan');
    // }
    public function addGrade(){
        return view('admin.ResultModule.add_grade');
    }
    public function examGrade() {
        return view('admin.ResultModule.exam_grade');
    }
    public function gradeEdit(){
        return view('admin.ResultModule.grade_edit');
    }
    public function gradeView() {
        return view('admin.ResultModule.grade_view');
    }
    public function marksEntryBlank() {
        return view('admin.ResultModule.marks_entry_blank');
    }
    public function marksEntryExam() {
        return view('admin.ResultModule.marks_entry_exam');
    }
    public function marksEntrySubject() {
        return view('admin.ResultModule.marks_entry_subject');
    }

}
