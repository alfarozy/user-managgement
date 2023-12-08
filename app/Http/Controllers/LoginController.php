<?php

namespace App\Http\Controllers;

use App\Mail\MailActivationRegisterEmail;
use App\Models\OtpVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        if ($request->email && $request->password) {

            $user = User::whereEmail($request->email)->first();
            if ($user && Hash::check($request->password, $user->password)) {


                if ($user->email_verified_at == null && $user->is_active == 1) {
                    if (isset($reset) && !empty($reset)) {
                        $otpCode = mt_rand(100000, 999999);
                        $otpcreate = OtpVerification::create(['user_id' => $user->id, 'code' => $otpCode]);
                        if (isset($otpcreate)) {
                            $data = [
                                'name' => $user->name,
                                'code' => $otpCode
                            ];
                            Mail::to($request->email)->send(new MailActivationRegisterEmail($data));
                        }
                        return redirect()->back()->with('success', 'Akun belum aktif,Silahkan periksa email untuk aktivasi');
                    }
                }

                Auth::login($user);
                return redirect()->route('dashboard.index');
            } else {
                return redirect()->route('login')->with('msg', '<b>Login gagal</b>, Email atau password salah');
            }
        } else {
            return redirect()->route('login')->with('msg', 'Email dan password wajib');
        }
    }
}
