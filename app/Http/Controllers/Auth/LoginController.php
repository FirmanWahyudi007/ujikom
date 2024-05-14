<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //index
    public function index()
    {
        return view('auth.login');
    }

    //login
    public function login(Request $request)
    {
        //validasi
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
        ]);

        //sign in
        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }

        //redirect
        return redirect()->route('dashboard');
    }

    //logout
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login.view');
    }
}
