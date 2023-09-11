<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\helpers\CustomHelper;

class AllNotice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file',
        'notice',
        'status',
    ];


    protected static $allnotice;

    public static function updateData($request,$id){
        self::$allnotice=AllNotice::find($id);
        self::insertData($request,self::$allnotice);
    }

    public static function saveData($request){
        self::$allnotice=new AllNotice();
        self::insertData($request);
    }

    public static function insertData($request,$allnotice=null){
        self::$allnotice-> title                   =$request->title;
        self::$allnotice-> notice                     =$request->notice;
        self::$allnotice-> file                     =CustomHelper::fileUpload($request->file('file'),'backend/admin/img/notice/',isset($allnotice)? $allnotice->file:'');
        self::$allnotice-> status                  =$request->status;
        self::$allnotice->save();
    }

}
