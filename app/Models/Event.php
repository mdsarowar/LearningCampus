<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'details',
        'status',
    ];


    protected static $event;

    public static function updateData($request,$id){
        self::$event=Event::find($id);
        self::insertData($request,self::$event);
    }

    public static function saveData($request){
        self::$event=new Event();
        self::insertData($request);
    }

    public static function insertData($request,$event=null){
        self::$event-> name                   =$request->name;
        self::$event-> date                     =$request->date;
        self::$event-> details                     =$request->details;
        self::$event-> status                  =$request->status;
        self::$event->save();
    }

}
