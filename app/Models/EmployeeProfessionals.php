<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeProfessionals extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'employeetype_id',
        'employee_id',
        'employee_idnumber',
        'designation_id',
        'workingshift_id',
        'grade',
        'rank',
        'divice_serial',
        'rfid_card',
        'tracking_id',
        'joining_date',
        'bank_account',
        'pre_inst',
        'pre_des',
    ];


    protected static $employee_prof;
    protected static $empids;

    public static function updateData($request,$profid,$empid){
        self::$employee_prof=EmployeeProfessionals::find($profid);
        self::$empids=$empid;
        self::insertData($request,self::$employee_prof);
    }

    public static function saveData($request,$empid){
        self::$employee_prof=new EmployeeProfessionals();
        self::$empids=$empid;
        self::insertData($request);
    }

    public static function insertData($request,$employee_prof=null){
        self::$employee_prof-> type                         =$request->type;
        self::$employee_prof-> employeetype_id                         =$request->employeetype_id;
        self::$employee_prof-> designation_id                         =$request->designation_id;
        self::$employee_prof-> employee_id                          =self::$empids;
        self::$employee_prof-> employee_idnumber                          =$request->employee_idnumber;
        self::$employee_prof-> workingshift_id                    =$request->workingshift_id;
        self::$employee_prof-> grade                    =$request->grade;
        self::$employee_prof-> rank                    =$request->rank;
        self::$employee_prof-> divice_serial                    =$request->divice_serial;
        self::$employee_prof-> rfid_card                    =$request->rfid_card;
        self::$employee_prof-> tracking_id                    =$request->tracking_id;
        self::$employee_prof-> joining_date                    =$request->joining_date;
        self::$employee_prof-> bank_account                    =$request->bank_account;
//        self::$employee_prof-> slug                  =str_replace('','-',$request->grade_name);
        self::$employee_prof-> pre_inst                       =$request->pre_inst;
        self::$employee_prof-> pre_des                       =$request->pre_des;
        self::$employee_prof->save();
    }


    protected $searchableFields = ['*'];
    public function employee_personals()
    {
        return $this->belongsTo(EmployeePersonals::class,'employee_id');
    }
    public function types()
    {
        return $this->belongsTo(Employeetype::class,'type');
    }
    public function Workingshifts()
    {
        return $this->belongsTo(Workingshifts::class,'workingshift_id');
    }
    public function designations()
    {
        return $this->belongsTo(Designation::class,'designation_id');
    }
}
