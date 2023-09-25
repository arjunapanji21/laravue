<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect(route('admin.dashboard'));
        }
        return inertia()->render('auth/login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect(route('admin.dashboard'));
            }
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('alert', 'Login Gagal!');
        }
        return back()->with('alert', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('admin.dashboard'));
    }
}
