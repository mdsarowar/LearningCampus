<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeetype extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
    ];


    protected static $employee_type;

    public static function updateData($request,$id){
        self::$employee_type=Employeetype::find($id);
        self::insertData($request,self::$employee_type);
    }

    public static function saveData($request){
        self::$employee_type=new Employeetype();
        self::insertData($request);
    }

    public static function insertData($request,$employee_type=null){
        self::$employee_type-> name                         =$request->name;
        self::$employee_type-> status                       =$request->status;
        self::$employee_type->save();
    }


    protected $searchableFields = ['*'];
}
