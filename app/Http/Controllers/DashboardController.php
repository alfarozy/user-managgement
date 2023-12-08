<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        //> cek apakah profile sudah lengkap
        $user = Auth::user();
        //> cek jika ada data profil yang kosong
        if (!$user->address || !$user->avatar || !$user->phone || !$user->birth_date || !$user->birth_place) {
            return redirect()->route('profile.index')->with('info', "Silahkan lengkapi profil terlebih dahulu");
        }

        $data = [
            'category' => Category::count(),
            'subCategory' => SubCategory::count(),
            'categories' => Category::get()
        ];
        return view('dashboard.index', $data);
    }
}
