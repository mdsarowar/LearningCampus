<?php

namespace App\Http\Controllers\AccountBoucher;

use App\Http\Controllers\Controller;
use App\Models\Paymentbouchers;
use App\Models\Reciveboucher;
use Illuminate\Http\Request;

class BoucherController extends Controller
{
    public function createReciveBoucher(){
        return view('admin.AccountBoucher.recive_boucher');
    }
    public function createPaymentBoucher(){
        return view('admin.AccountBoucher.payment_boucher');
    }
    public function storeReciveBoucher(Request $request){
        Reciveboucher::saveData($request);
        return redirect()->back()->with('success','Recive Boucher created successfully');
    }
    public function storePaymentBoucher(Request $request){
        Paymentbouchers::saveData($request);
        return redirect()->back()->with('success','Payment Boucher created successfully');
    }
}
