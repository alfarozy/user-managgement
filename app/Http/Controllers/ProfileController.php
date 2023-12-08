<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile');
    }

    public function updateProfile(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'address' => 'required|string',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:4192', // Adjust the mime types and max size accordingly

        ], [
            '*.required' => 'Bidang ini wajib'
        ]);
        if ($request->avatar) {
            $attr['avatar'] = $request->file('avatar')->store('avatars');
        }
        User::where('id', Auth()->id())->update($attr);

        return redirect()->route('dashboard.index')->with('success', 'Profil berhasil diperbaharui');
    }
}
