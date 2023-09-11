<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menue extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu',
        'position',
        'left_colum',
        'status',
    ];


    protected static $menu;

    public static function updateData($request,$id){
        self::$menu=Menue::find($id);
        self::insertData($request,self::$menu);
    }

    public static function saveData($request){
        self::$menu=new Menue();
        self::insertData($request);
    }

    public static function insertData($request,$menu=null){
//        self::$menu-> parent_menu                  =$request->parent_menu;
        self::$menu-> menu                  =$request->menu;
        self::$menu-> position                   =$request->position;
        self::$menu-> left_colum                   =$request->left_colum;
        self::$menu-> status                 =$request->status;
        self::$menu->save();
    }

}
