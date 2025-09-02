<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index()
    {
        if (auth()->check()) {
            return redirect('/home');
        }
        return view('auth.login ');
    }

    public function login(Request $request)
    {
        // $credentials = $request->only('username', 'password');
       $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'message' => 'Username atau Password Anda salah.',
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->intended('');
    }
}
