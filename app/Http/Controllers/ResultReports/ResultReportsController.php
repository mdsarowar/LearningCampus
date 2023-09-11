<?php

namespace App\Http\Controllers\ResultReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultReportsController extends Controller
{
    public function studentMeritList() {
        return view('admin.ResultReports.student_merit_list');
    }
    public function studentReportCard() {
        return view('admin.ResultReports.student_report_card');
    }
    public function studentWiseTranscipt() {
        return view('admin.ResultReports.student_wise_transcipt');
    }
}
