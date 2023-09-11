<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFee extends Model
{
    use HasFactory;
    private static $studentFees;

    public static function newstudentFeeStore($request)
    {
        self::$studentFees = new StudentFee();
        self::$studentFees->session = $request->session;
        self::$studentFees->student_class = $request->student_class;
        self::$studentFees->shift_name = $request->shift_name;
        self::$studentFees->student_name_id = $request->student_name_id;
        self::$studentFees->section = $request->section;
        self::$studentFees->save();
    }
}
