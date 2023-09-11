<?php

namespace App\Models;

use App\helpers\CustomHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'url',
        'status',
    ];


    protected static $social_media;

    public static function updateData($request,$id){
        self::$social_media=SocialMedia::find($id);
        self::insertData($request,self::$social_media);
    }

    public static function saveData($request){
        self::$social_media=new SocialMedia();
        self::insertData($request);
    }

    public static function insertData($request,$social_media=null){
        self::$social_media-> title                  =$request->title;
        self::$social_media-> icon                   =$request->icon;
        self::$social_media-> url                    =$request->url;
        self::$social_media-> status                 =$request->status;
        self::$social_media->save();
    }


}
