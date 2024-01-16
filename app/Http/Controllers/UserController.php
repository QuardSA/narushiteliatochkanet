<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function signin_valid(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ], [
            'login.required' => 'Поле обязательно для заполнения',
            'password.required' => 'Поле обязательно для заполнения',
        ]);

        $user_authorization = $request->only("login", "password");

        if (Auth::attempt(["login" => $user_authorization['login'], "password" => $user_authorization['password']])) {
            if (Auth::user()->role == 1) {
                return redirect('/admin')->with('success', 'Вы вошли как Администратор');
            }
            } elseif(Auth::user()->role == 2) {
                return redirect('/personal-data')->with('success', 'Добро пожаловать');
            } else {
            return redirect('/signin')->with('error', 'Ошибка авторизации');
    }
}

    public function sign_out()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function signup_valid(Request $request)
    {
        $request->validate(
            [
                'login' => 'required|unique:users|login|max:64',
                'fio' => 'required|alpha|max:64',
                'phone' => 'required',
                'email' => 'required|unique:users|email',
                'password' => 'required',
            ],
            [
                'login.required' => 'Поле обязательно для заполнения',
                'login.login' => 'Введите email',
                'login.unique' => 'Данный email уже занят',
                'email.required' => 'Поле обязательно для заполнения',
                'email.login' => 'Введите email',
                'email.unique' => 'Данный email уже занят',
                'fio.required' => 'Поле обязательно для заполнения',
                'fio.alpha' => 'Фамилия должна состоять только из букв',
                'phone.required' => 'Поле оьбязательно для заполнения',
                'password.required' => 'Поле обязательно для заполнения',
            ],
        );
        $userInfo = $request->all();
        $userCreate = User::create([
            'fio' => $userInfo['fio'],
            'phone' => $userInfo['phone'],
            'login' => $userInfo['login'],
            'email' => $userInfo['email'],
            'password' => Hash::make($userInfo['password']),
            'role' => "2",
        ]);
        if ($userCreate) {
            Auth::login($userCreate);
            return redirect('/')->with('success', 'Вы зарегестрировались');
        } else {
            return redirect('/signup')->with('error', 'Ошибка регистрации');
        }
    }
}
