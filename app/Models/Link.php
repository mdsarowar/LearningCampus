<?php

namespace App\Models;

use App\helpers\CustomHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'status',
    ];


    protected static $link;

    public static function updateData($request,$id){
        self::$link=Link::find($id);
        self::insertData($request,self::$link);
    }

    public static function saveData($request){
        self::$link=new Link();
        self::insertData($request);
    }

    public static function insertData($request,$link=null){
        self::$link-> title                   =$request->title;
        self::$link-> url                      =CustomHelper::fileUpload($request->file('url'),'backend/admin/img/link/',isset($link)? $link->url:'');
        self::$link-> status                  =$request->status;
        self::$link->save();
    }

}
