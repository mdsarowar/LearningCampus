<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    /* Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']); */

    Route::get('login', [AuthenticatedSessionController::class, 'index'])
        ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('student-login', [AuthenticatedSessionController::class, 'student_login_view'])
        ->name('student.login');

    Route::post('student-login-submit', [AuthenticatedSessionController::class, 'student_login_submit'])
        ->name('student.login.submit');


    Route::get('forgot-password', [PasswordResetController::class, 'index'])
        ->name('password.request');
    Route::post('forgot-password-search', [PasswordResetController::class, 'userCheck'])
        ->name('user.check');
    Route::get('otp-verify', [PasswordResetController::class, 'OTP_verify'])
        ->name('otp.verify');
    Route::post('otp-validation', [PasswordResetController::class, 'is_valid_otp'])
        ->name('otp.validation');
    Route::get('reset-password', [PasswordResetController::class, 'resetPassword'])
        ->name('reset.password');
    Route::post('reset-password-submit', [PasswordResetController::class, 'resetPasswordSubmit'])
        ->name('reset.password.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->middleware('dashboardGuard')->name('home');

    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
