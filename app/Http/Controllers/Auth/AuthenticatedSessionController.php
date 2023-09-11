<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    public function index()
    {
        session()->forget(['user_check', 'otp_verified']);
        $getBranchDetails = DB::select('SELECT * FROM branch_details');
        $branchArray = json_decode(json_encode($getBranchDetails), true);
        return view('auth.sign_in', ['branchDetails' => $branchArray]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $captchaCode = session('captchaCode');
        $enteredCaptcha = $request->captcha_code;
        $branch_id = $request->branch_id;

        // check if super admin exists with the email
        $super_admin_query = "SELECT COUNT(role) as count FROM users WHERE email = ? AND role = 'super_admin'";
        $super_admin_query_result = DB::select($super_admin_query, [$request->email]);
        $is_exists_super_admin = $super_admin_query_result[0]->count > 0;

        // if not exists, then match the branch for the user
        if (!$is_exists_super_admin) {
            $query = "SELECT COUNT(*) as count FROM users WHERE branch_id = ?";
            $result = DB::select($query, [$branch_id]);
            $rowExists = $result[0]->count > 0;

            if (!$rowExists) {
                return back()->withErrors(['captcha' => 'Branch not matched.']);
            }
        }

        if ($enteredCaptcha != $captchaCode) {
            return back()->withErrors(['captcha' => 'Captcha code is incorrect.']);
        }

        // perform authentication
        $request->authenticate();
        $request->session()->regenerate();
        $request->session()->forget('captchaCode');

        // return redirect()->intended(RouteServiceProvider::HOME);
        $user = Auth::user()->role;
        if ($user == 'super_admin' || $user == 'admin') {
            return redirect('/');
        } else {
            return redirect(route('profile.edit'));
        }
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('login'));
    }


    /* student login view */
    public function student_login_view()
    {
        return view('auth.student-login');
    }

    /* student login submit */
    public function student_login_submit(Request $request)
    {
        $student_id = $request->student_id;
        $password = $request->password;
        $captchaCode = session('captchaCode');
        $enteredCaptcha = $request->captcha_code;

        $has_student_query = "SELECT * FROM users WHERE student_id = ?";
        $user = DB::selectOne($has_student_query, [$student_id]);

        if (!$user) {
            return redirect()->back()->with('error', 'Student doesn\'t exist with this ID');
        } else {

            if ($enteredCaptcha != $captchaCode) {
                return back()->with('error', 'Captcha code is incorrect.');
            }

            if (Hash::check($password, $user->password)) {
                session()->forget('captchaCode');

                Auth::guard('web')->loginUsingId($user->id);
                Auth::user()->role = 'user';

                return redirect(route('profile.update'));
            } else {
                return redirect()->back()->with('error', 'Incorrect password');
            }
        }
    }


}
