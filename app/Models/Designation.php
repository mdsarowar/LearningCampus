<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'title',
//        'dsoa',
//        'hot',
        'status',
    ];


    protected static $designation;

    public static function updateData($request,$id){
        self::$designation=Designation::find($id);
        self::insertData($request,self::$designation);
    }

    public static function saveData($request){
        self::$designation=new Designation();
        self::insertData($request);
    }

    public static function insertData($request,$designation=null){
        self::$designation-> type                         =$request->type;
        self::$designation-> title                         =$request->title;
        self::$designation-> status                       =$request->status;
        self::$designation->save();
    }


    protected $searchableFields = ['*'];
}
