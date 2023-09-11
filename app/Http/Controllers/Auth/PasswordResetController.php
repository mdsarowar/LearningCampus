<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PromotionalModule\PromotionalSMSController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PasswordResetController extends Controller
{
    public function index()
    {
        return view('auth.forgot-password');
    }

    public function userCheck(Request $request)
    {
        $phoneNumber = $request->phoneNumber;

        $query = "SELECT COUNT(*) as count FROM users WHERE phoneNumber = ?";
        $result = DB::select($query, [$phoneNumber]);

        $rowExists = $result[0]->count > 0;

        if ($rowExists) {
            $otp = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

            $sendSMS = new PromotionalSMSController;

            $sms_body = "Your phone verification code is: ".$otp;
            $sendSMS->sendSms($phoneNumber, $sms_body);

            session()->put([
                'otp' => $otp,
                'phoneNumber' => $phoneNumber,
                'user_check' => true
            ]);

            return redirect(route('otp.verify'))->with('is_exists', 'true');
        } else {
            return redirect()->back()->with('is_exists', 'false');
        }
    }

    public function OTP_verify()
    {
        return view('auth.otp-verify');
    }

    public function is_valid_otp(Request $request)
    {
        $get_otp = $request->otp;
        $actual_otp = session('otp');

        if ($get_otp === $actual_otp) {
            session()->forget(['otp', 'is_exists']);
            session()->put('otp_verified' , true);

            return redirect(route('otp.verify'))->with('is_verified', 'true');
        } else {
            return redirect()->back()->with('is_verified', 'false');
        }
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }

    public function resetPasswordSubmit(Request $request)
    {
        $phoneNumber = $request->phoneNumber;
        $password = $request->password;
        $confirm_password = $request->confirm_password;

        if ($password == $confirm_password) {
            $password = Hash::make($request->password);
            DB::table('users')
                ->where('phoneNumber', $phoneNumber)
                ->update(['password' => $password]);

            session()->forget(['otp', 'phoneNumber']);
            return redirect()->back()->with('updated', 'true');
        } else {
            return redirect()->back()->with('updated', 'false');
        }
    }
}
