<?php

namespace App\Models;

use App\helpers\CustomHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePersonals extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'dob',
        'national_id',
        'photo',
        'facebook',
        'father_name',
        'mother_name',
        'matarial_status',
        'religion',
        'blood_group',
        'gender',
        'present_add',
        'permanant_add',
    ];


    protected static $employee_personal;
    protected static $empid;

    public static function updateData($request,$id){
        self::$employee_personal=EmployeePersonals::find($id);
        self::insertData($request,self::$employee_personal);

        $profid=EmployeeProfessionals::where('employee_id',$id)->first();
        EmployeeProfessionals::updateData($request,$profid->id,self::$empid->id);

        $empedu=EmployeeEducations::where('emp_id',$id)->first();
        EmployeeEducations::updateData($request,$empedu->id,self::$empid->id);
    }

    public static function saveData($request){
        self::$employee_personal=new EmployeePersonals();
        self::insertData($request);

        EmployeeProfessionals::saveData($request,self::$empid->id);

        EmployeeEducations::saveData($request,self::$empid->id);

    }

    public static function insertData($request,$employee_personal=null){
        self::$employee_personal-> name                    =$request->name;
        self::$employee_personal-> mobile                  =$request->mobile;
        self::$employee_personal-> email                   =$request->email;
        self::$employee_personal-> dob                     =$request->dob;
        self::$employee_personal-> national_id             =$request->national_id;
        self::$employee_personal-> photo                   =CustomHelper::fileUpload($request->file('photo'),'backend/admin/img/Employee/',isset($employee_personal)? $employee_personal->photo:'');
        self::$employee_personal-> facebook                =$request->facebook;
        self::$employee_personal-> father_name             =$request->father_name;
        self::$employee_personal-> mother_name             =$request->mother_name;
        self::$employee_personal-> matarial_status         =$request->matarial_status;
        self::$employee_personal-> religion                =$request->religion;
        self::$employee_personal-> blood_group             =$request->blood_group;
//        self::$employee_personal-> slug                  =str_replace('','-',$request->grade_name);
        self::$employee_personal-> gender                  =$request->gender;
        self::$employee_personal-> present_add             =$request->present_add;
        self::$employee_personal-> permanant_add           =$request->permanant_add;
        self::$employee_personal->save();
        self::$empid=EmployeePersonals::latest()->first();

    }


    protected $searchableFields = ['*'];
}
