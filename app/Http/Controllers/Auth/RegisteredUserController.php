<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $getBranchDetails = DB::select('SELECT * FROM branch_details');
        $branchArray = json_decode(json_encode($getBranchDetails), true);
        return view('auth.sign_up', ['branchDetails' => $branchArray]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $captchaCode = session('captchaCode');
        $enteredCaptcha = $request->input('captcha_code');

        if ($enteredCaptcha != $captchaCode) {
            return back()->withErrors(['captcha' => 'Captcha code is incorrect.']);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'branch_id' => $request->branch_id,
            'password' => Hash::make($request->password),
        ]);
        $request->session()->forget('captchaCode');

        event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect(route('login'))->with('registerd', 'Registration Successful');
    }
}
