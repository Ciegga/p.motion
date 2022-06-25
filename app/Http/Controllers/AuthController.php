<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * Авторизация
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:6|max:30'
        ],
            [
                'required' => 'Поле :attribute обязательно для заполнения',
                'unique' => 'Данный email уже используется',
                'min' => 'Минимальная длина поля :attribute 6 символов',
                'max' => 'Максимальная длина поля :attribute 30 символов',
            ]
        );

        if(!$validator->fails()) {
            if(Auth::attempt($request->only('email', 'password'))) {

                $request->session()->regenerate();

                return view('user.account');
            }

            return back()->with('auth-error', true);
        }

        return back()->withErrors($validator)->withInput();
    }

    /**
     * @param Request $request
     * Регистрация
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'surname' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:30|confirmed'
        ],
            [
                'required' => 'Поле :attribute обязательно для заполнения',
                'unique' => 'Данный email уже используется',
                'min' => 'Минимальная длина поля :attribute 6 символов',
                'max' => 'Максимальная длина поля :attribute 30 символов',
                'confirmed' => 'Введенные пароли не совпадают'
            ]
        );

        if(!$validator->fails()) {
            $request->merge(['password' => Hash::make($request->input('password'))]);

            $create = User::create($request->all());

            if($create)
                return back()->with('register', true);
        }

        return back()->withErrors($validator)->withInput();
    }

    /**
     * @param Request $request
     * Выход
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
