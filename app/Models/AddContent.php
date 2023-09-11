<?php

namespace App\Models;

use App\helpers\CustomHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu',
        'content',
        'file',
        'status',
    ];


    protected static $content;

    public static function updateData($request,$id){
        self::$content=AddContent::find($id);
        self::insertData($request,self::$content);
    }

    public static function saveData($request){
        self::$content=new AddContent();
        self::insertData($request);
    }

    public static function insertData($request,$content=null){
        self::$content-> menu                  =$request->menu;
        self::$content-> content                   =$request->content;
        self::$content-> file                   =CustomHelper::fileUpload($request->file('file'),'backend/admin/img/content/',isset($content)? $content->file:'');
        self::$content-> status                 =$request->status;
        self::$content->save();
    }

}
