<?php

namespace App\Http\Controllers;

use App\Mail\MailActivationRegisterEmail;
use App\Models\OtpVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $otpCode = mt_rand(100000, 999999);
        $otpcreate = OtpVerification::create(['user_id' => $user->id, 'code' => $otpCode]);
        if (isset($otpcreate)) {
            $data = [
                'name' => $user->name,
                'code' => $otpCode
            ];
            Mail::to($request->email)->send(new MailActivationRegisterEmail($data));
        }
        return redirect()->route('confirm.otp')->with('success', 'Pendaftaran berhasil, silahkan periksa email untuk aktivasi');
    }
}
