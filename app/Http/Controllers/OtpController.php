<?php

namespace App\Http\Controllers;

use App\Models\OtpVerification;
use App\Models\User;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function index()
    {
        return view('auth.confirm-otp');
    }
    public function confirmOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $otp = OtpVerification::where('code', $request->otp)->first();
        if (!$otp) {
            return redirect()->back()->with('msg', 'OTP invalid');
        }
        $user = User::where('id', $otp->user_id)->first();

        if ($otp && $otp->code == $request->otp) {
            // OTP is valid
            $user->update(['is_active' => 1, 'email_verified_at' => now()]);
            $otp->delete(); // Remove the used OTP

            return redirect()->route('login')->with('success', 'OTP verification successful');
        } else {
            // Invalid OTP
            return redirect()->back()->with('msg', 'OTP invalid');
        }
    }
}
