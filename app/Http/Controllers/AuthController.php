<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('admin.register');
    }
    //
    public function postRegister(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        //enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/success');
    }
    //
    public function getLogin()
    {
        return view('admin.login');
    }
    //
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin-panel');
        }

        return redirect('/not-admin')->with('LoginError', 'Login Failed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        request()
            ->session()
            ->invalidate();
        request()
            ->session()
            ->regenerateToken();

        return redirect('/admin-login');
    }
}
