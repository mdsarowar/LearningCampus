<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAdmissionFee extends Model
{
    use HasFactory;
    private static $addmissionFees;

    public static function newAdmissionFee($request)
    {
        self::$addmissionFees = new StudentAdmissionFee();
        self::$addmissionFees->session = $request->session;
        self::$addmissionFees->student_class = $request->student_class;
        self::$addmissionFees->shift_name = $request->shift_name;
        self::$addmissionFees->section = $request->section;
        self::$addmissionFees->gender = $request->gender;
        self::$addmissionFees->student_name_id = $request->student_name_id;
        self::$addmissionFees->education = $request->education;
        self::$addmissionFees->save();
    }
}
