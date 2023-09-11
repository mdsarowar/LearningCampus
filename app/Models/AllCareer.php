<?php

namespace App\Models;

use App\helpers\CustomHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllCareer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'deadline',
        'details',
        'file',
        'status',
    ];


    protected static $allcareer;

    public static function updateData($request,$id){
        self::$allcareer=AllCareer::find($id);
        self::insertData($request,self::$allcareer);
    }

    public static function saveData($request){
        self::$allcareer=new AllCareer();
        self::insertData($request);
    }

    public static function insertData($request,$allcareer=null){
        self::$allcareer-> title                   =$request->title;
        self::$allcareer-> deadline                     =$request->deadline;
        self::$allcareer-> details                     =$request->details;
        self::$allcareer-> file                     =CustomHelper::fileUpload($request->file('file'),'backend/admin/img/career/',isset($allcareer)? $allcareer->file:'');
        self::$allcareer-> status                  =$request->status;
        self::$allcareer->save();
    }

}
