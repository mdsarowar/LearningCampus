<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCategoris extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'dsoa',
        'hot',
        'status',
    ];


    protected static $employee_category;

    public static function updateData($request,$id){
        self::$employee_category=EmployeeCategoris::find($id);
        self::insertData($request,self::$employee_category);
    }

    public static function saveData($request){
        self::$employee_category=new EmployeeCategoris();
        self::insertData($request);
    }

    public static function insertData($request,$employee_category=null){
        self::$employee_category-> type                         =$request->type;
        self::$employee_category-> name                         =$request->name;
        self::$employee_category-> dsoa                         =$request->dsoa;
        self::$employee_category-> hot                          =$request->hot;
//        self::$employee_category-> note                    =$request->note;
//        self::$employee_category-> slug                  =str_replace('','-',$request->grade_name);
        self::$employee_category-> status                       =$request->status;
        self::$employee_category->save();
    }


}
