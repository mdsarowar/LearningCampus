<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEducations extends Model
{
    use HasFactory;
    protected $fillable = [
        'noi',
        'emp_id',
        'country',
        'nod',
        'major_sub',
        'extqual',
    ];


    protected static $employee_edu;
    protected static $empids;

    public static function updateData($request,$profid,$empid){
        self::$employee_edu=EmployeeEducations::find($profid);
        self::$empids=$empid;
        self::insertData($request,self::$employee_edu);
    }

    public static function saveData($request,$empid){
        self::$employee_edu=new EmployeeEducations();
        self::$empids=$empid;
        self::insertData($request);
    }

    public static function insertData($request,$employee_edu=null){
        self::$employee_edu-> noi                         =$request->noi;
        self::$employee_edu-> emp_id                         =self::$empids;
        self::$employee_edu-> country                         =$request->country;
        self::$employee_edu-> nod                          =$request->nod;
        self::$employee_edu-> major_sub                    =$request->major_sub;
        self::$employee_edu-> extqual                    =$request->extqual;
        self::$employee_edu->save();
    }


    protected $searchableFields = ['*'];
}
