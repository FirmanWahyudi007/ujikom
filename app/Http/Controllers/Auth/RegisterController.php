<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //index
    public function index()
    {
        return view('auth.register');
    }

    //register
    public function register(Request $request)
    {
        //validasi
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255|confirmed',
        ]);

        //create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            //hash password
            'password' => bcrypt($request->password),
        ]);

        //sign in
        auth()->loginUsingId($user->id);

        //redirect
        return redirect()->route('dashboard');
    }
}
