<?php

namespace App\Models;

use App\helpers\CustomHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'caption',
        'photo',
        'status',
    ];


    protected static $gallery;

    public static function updateData($request,$id){
        self::$gallery=Gallery::find($id);
        self::insertData($request,self::$gallery);
    }

    public static function saveData($request){
        self::$gallery=new Gallery();
        self::insertData($request);
    }

    public static function insertData($request,$gallery=null){
        self::$gallery-> type                   =$request->type;
        self::$gallery-> title                     =$request->title;
        self::$gallery-> caption                     =$request->caption;
        self::$gallery-> photo                     =CustomHelper::fileUpload($request->file('photo'),'backend/admin/img/gallery/',isset($gallery)? $gallery->photo:'');
        self::$gallery-> status                  =$request->status;
        self::$gallery->save();
    }

}
