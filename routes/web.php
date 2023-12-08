<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('profile.index');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');

    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('register');

    Route::get('confirm-otp', [OtpController::class, 'index'])->name('confirm.otp');
    Route::post('confirm-otp', [OtpController::class, 'confirmOtp'])->name('confirm.otp');

    Route::get('forgot-password', [ForgotPasswordController::class, 'index'])->name('forgotpassword');
    Route::post('forgot-password', [ForgotPasswordController::class, 'sendEmail'])->name('forgetpassword.send');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'editPassword'])->name('edit.password');
    Route::put('reset-password', [ForgotPasswordController::class, 'updatePassword'])->name('update.password');


    Route::get('logout', function () {
        Auth()->logout();
        request()->session()->invalidate();
        request()->session()->flush();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');
});
