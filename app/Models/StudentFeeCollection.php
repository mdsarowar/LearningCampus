<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFeeCollection extends Model
{
    use HasFactory;
    private static $feeCollect;

    public static function newaddFeesStore($request, $folio, $deueFee)
    {
        self::$feeCollect = new StudentFeeCollection();
        self::$feeCollect->session = $request->session;
        self::$feeCollect->student_class = $request->student_class;
        self::$feeCollect->shift_name = $request->shift_name;
        self::$feeCollect->section = $request->section;
        self::$feeCollect->fees_month = $request->fees_month;
        self::$feeCollect->student_name_id = $request->student_name_id;
        self::$feeCollect->total_fee = $request->total_fee;
        self::$feeCollect->paid_fee = $request->paid_fee;
        self::$feeCollect->due_fee = $deueFee;
        self::$feeCollect->folio_no = $folio;
        self::$feeCollect->save();
    }
}
