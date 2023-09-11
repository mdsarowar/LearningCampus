<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMonthlyFee extends Model
{
    use HasFactory;
    private static $monthiyFee;

    public static function newMonthlyFee($request)
    {
        self::$monthiyFee = new StudentMonthlyFee();
        self::$monthiyFee->session = $request->session;
        self::$monthiyFee->student_class = $request->student_class;
        self::$monthiyFee->shift_name = $request->shift_name;
        self::$monthiyFee->section = $request->section;
        self::$monthiyFee->gender = $request->gender;
        self::$monthiyFee->student_name_id = $request->student_name_id;
        self::$monthiyFee->education = $request->education;
        self::$monthiyFee->save();
    }
}
