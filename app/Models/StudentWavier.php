<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentWavier extends Model
{
    use HasFactory;
    private static $wavier;

    public static function newstudentWavierStore($request)
    {
        self::$wavier = new StudentWavier();
        self::$wavier->session = $request->session;
        self::$wavier->student_class = $request->student_class;
        self::$wavier->shift_name = $request->shift_name;
        self::$wavier->student_name_id = $request->student_name_id;
        self::$wavier->section = $request->section;
        self::$wavier->fees_type = $request->fees_type;
        self::$wavier->waived_month = $request->waived_month;
        self::$wavier->status = $request->status;
        self::$wavier->wavier = $request->wavier;
        self::$wavier->save();
    }
}
