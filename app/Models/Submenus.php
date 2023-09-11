<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenus extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_menu',
        'sub_menu',
        'status',
    ];


    protected static $sub_menu;

    public static function updateData($request,$id){
        self::$sub_menu=Submenus::find($id);
        self::insertData($request,self::$sub_menu);
    }

    public static function saveData($request){
        self::$sub_menu=new Submenus();
        self::insertData($request);
    }

    public static function insertData($request,$sub_menu=null){
        self::$sub_menu-> parent_menu                  =$request->parent_menu;
        self::$sub_menu-> sub_menu                   =$request->sub_menu;
        self::$sub_menu-> status                 =$request->status;
        self::$sub_menu->save();
    }

    public function menus()
    {
        return $this->belongsTo(Menue::class,'parent_menu');
    }

}
