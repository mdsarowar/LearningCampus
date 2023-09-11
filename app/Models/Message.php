<?php

namespace App\Models;

use App\helpers\CustomHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'photo',
        'message',
        'rank',
        'rank',
        'status',
    ];


    protected static $message;

    public static function updateData($request,$id){
        self::$message=Message::find($id);
        self::insertData($request,self::$message);
    }

    public static function saveData($request){
        self::$message=new Message();
        self::insertData($request);
    }

    public static function insertData($request,$message=null){
        self::$message-> name                  =$request->name;
        self::$message-> designation                  =$request->designation;
        self::$message-> photo                   =CustomHelper::fileUpload($request->file('photo'),'backend/admin/img/message/',isset($message)? $message->photo:'');
        self::$message-> message                   =$request->message;
        self::$message-> rank                   =$request->rank;
        self::$message-> status                 =$request->status;
        self::$message->save();
    }

}
