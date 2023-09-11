<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'status',
    ];


    protected static $album;

    public static function updateData($request,$id){
        self::$album=Album::find($id);
        self::insertData($request,self::$album);
    }

    public static function saveData($request){
        self::$album=new Album();
        self::insertData($request);
    }

    public static function insertData($request,$album=null){
        self::$album-> title                  =$request->title;
        self::$album-> type                   =$request->type;
        self::$album-> status                 =$request->status;
        self::$album->save();
    }

}
