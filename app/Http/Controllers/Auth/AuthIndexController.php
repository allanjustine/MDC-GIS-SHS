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
            'id_number' => 'required',
            'password' => 'required',
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

    public function registerForm()
    {
        if (auth()->check()) {
            return back();
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'required|string',
            'phone_number' => 'required|string|max:11',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')
                ->withErrors($validator)
                ->withInput();
        }


        $user = new User();
        $user->name = $request->input('name');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->phone_number = $request->input('phone_number');
        $user->password = bcrypt($request->input('password'));


        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }

        $user->save();

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
