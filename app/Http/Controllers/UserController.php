<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function signin()
    {
        return view('user.signin');
    }
    public function signinPost(Request $request)
    {
        if (Auth::attempt($request->only('login','password'))){

            $request->session()->regenerate();
            return back()->with('success', true);
        }
        return back()->with('notfound', true);
    }
    public function signup()
    {
        return view('user.signup');
    }
    public function signupPost(Request $request)
    {
        $request->validate([
            'login'=>'required|unique:users',
            'name'=>'required',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|min:8',
        ],[
            'required' => 'Поле :attribute обязательно для заполнения',
        ]);


        $request->merge(['password'=> Hash::make($request->password)]);

        User::create($request->all());

        return back()->with('success', true);
    }

    public function account()
    {
        return view('user.account');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
