<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciveboucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'boucher_no',
        'transaction_date',
        'payment_type',
        'select_head',
        'amount',
        'remarks',
        'description',
    ];


    protected static $payment_boucher;

    public static function updateData($request,$id){
        self::$payment_boucher=Reciveboucher::find($id);
        self::insertData($request,self::$payment_boucher);
    }

    public static function saveData($request){
        self::$payment_boucher=new Reciveboucher();
        self::insertData($request);
    }

    public static function insertData($request,$payment_boucher=null){
        self::$payment_boucher-> boucher_no                         =$request->boucher_no;
        self::$payment_boucher-> transaction_date                         =$request->transaction_date;
        self::$payment_boucher-> payment_type                         =$request->payment_type;
        self::$payment_boucher-> select_head                          =$request->select_head;
        self::$payment_boucher-> amount                    =$request->amount;
//        self::$payment_boucher-> slug                  =str_replace('','-',$request->grade_name);
        self::$payment_boucher-> remarks                       =$request->remarks;
        self::$payment_boucher-> description                       =$request->description;
        self::$payment_boucher->save();
    }


    protected $searchableFields = ['*'];
}
