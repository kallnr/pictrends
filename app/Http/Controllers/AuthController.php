<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('/register');
    }
    public function registered(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/login');
    }
    public function login(Request $request)
    {
        return view('/login');
    }
    public function logined(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            // notify()->success('Laravel Notify is awesome!');
            return redirect()->intended('post');
        } else {
            return redirect()->back();
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');

    }
}
