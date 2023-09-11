<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_type',
        'year',
        'total_student',
        'passed',
        'passed_persentage',
        'a_plus',
        'details',
        'status',
    ];


    protected static $board_result;

    public static function updateData($request,$id){
        self::$board_result=BoardResult::find($id);
        self::insertData($request,self::$board_result);
    }

    public static function saveData($request){
        self::$board_result=new BoardResult();
        self::insertData($request);
    }

    public static function insertData($request,$board_result=null){
        self::$board_result-> exam_type                 =$request->exam_type;
        self::$board_result-> year                     =$request->year;
        self::$board_result-> total_student             =$request->total_student;
        self::$board_result-> passed                     =$request->passed;
        self::$board_result-> passed_persentage          =$request->passed_persentage;
        self::$board_result-> a_plus                     =$request->a_plus;
        self::$board_result-> details                     =$request->details;
        self::$board_result-> status                   =$request->status;
        self::$board_result->save();
    }

}
