<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workingshifts extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'green_limit',
        'orange_limit',
        'red_limit',
        'status',
    ];


    protected static $working_shift;

    public static function updateData($request,$id){
        self::$working_shift=Workingshifts::find($id);
        self::insertData($request,self::$working_shift);
    }

    public static function saveData($request){
        self::$working_shift=new Workingshifts();
        self::insertData($request);
    }

    public static function insertData($request,$working_shift=null){
        self::$working_shift-> name                         =$request->name;
        self::$working_shift-> start_time                   =$request->start_time;
        self::$working_shift-> end_time                     =$request->end_time;
        self::$working_shift-> green_limit                  =$request->green_limit;
        self::$working_shift-> orange_limit                  =$request->orange_limit;
        self::$working_shift-> red_limit                    =$request->red_limit;
        self::$working_shift-> status                       =$request->status;
        self::$working_shift->save();
    }


    protected $searchableFields = ['*'];
}
