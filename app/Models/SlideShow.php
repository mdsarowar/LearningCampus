<?php

namespace App\Models;

use App\helpers\CustomHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'image',
        'description',
        'status',
    ];


    protected static $slide_show;

    public static function updateData($request,$id){
        self::$slide_show=SlideShow::find($id);
        self::insertData($request,self::$slide_show);
    }

    public static function saveData($request){
        self::$slide_show=new SlideShow();
        self::insertData($request);
    }

    public static function insertData($request,$slide_show=null){
        self::$slide_show->type                  =$request->type;
        self::$slide_show->title                  =$request->title;
//        self::$slide_show->image                   =$request->image;
        self::$slide_show->image                   =CustomHelper::fileUpload($request->file('image'),'backend/admin/img/slide/',isset($slide_show)? $slide_show->image:'');
        self::$slide_show-> description             =$request->description;
        self::$slide_show-> status                 =$request->status;
        self::$slide_show->save();
    }

}
