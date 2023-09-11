<?php

namespace App\Models;

use App\helpers\CustomHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'news',
        'status',
    ];


    protected static $news;

    public static function updateData($request,$id){
        self::$news=News::find($id);
        self::insertData($request,self::$news);
    }

    public static function saveData($request){
        self::$news=new News();
        self::insertData($request);
    }

    public static function insertData($request,$news=null){
        self::$news-> title                   =$request->title;
        self::$news-> image                     =CustomHelper::fileUpload($request->file('image'),'backend/admin/img/news/',isset($news)? $news->image:'');
        self::$news-> news                     =$request->news;
        self::$news-> status                  =$request->status;
        self::$news->save();
    }

}
