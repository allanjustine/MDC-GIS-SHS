<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthIndexController extends Controller
{

    public function loginForm()
    {
        if (auth()->check()) {
            return back();
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'id_number'     =>      'required',
            'password'      =>      'required',
        ]);


        $credentials = $request->only('id_number', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->is_admin) {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/dashboard');
            }
        }


        return back()->withErrors(['id_number' => 'Invalid Credentials', 'password' => 'Invalid Credentials'])->withInput();
    }

    // public function registerForm()
    // {
    //     if (auth()->check()) {
    //         return back();
    //     }
    //     return view('auth.register');
    // }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
