<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakingNews extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'details',
        'status',
    ];


    protected static $breaking_news;

    public static function updateData($request,$id){
        self::$breaking_news=BreakingNews::find($id);
        self::insertData($request,self::$breaking_news);
    }

    public static function saveData($request){
        self::$breaking_news=new BreakingNews();
        self::insertData($request);
    }

    public static function insertData($request,$breaking_news=null){
        self::$breaking_news-> title                  =$request->title;
        self::$breaking_news-> details                   =$request->details;
        self::$breaking_news-> status                 =$request->status;
        self::$breaking_news->save();
    }

}
