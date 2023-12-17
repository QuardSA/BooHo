<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
class AuthorizationController extends Controller
{
    public function registration()
    {
        return view('registration');
    }
    public function registration_validate(Request $request)
    {
        $request->validate(
            [
                'Name' => 'required|alpha',
                'Surname' => 'required|alpha',
                'Patronymic' => 'required|alpha',
                'Email' => 'required|unique:users|email',
                'Password' => 'required',
                'Confirm_Password' => 'required|same:Password',
            ],
            [
                'Email.required' => 'Поле обязательно для заполнения',
                'Email.email' => 'Введите email',
                'Email.unique' => 'Данный email уже занят',
                'Name.required' => 'Поле обязательно для заполнения',
                'Name.alpha' => 'Имя должно состоять только из букв',
                'Surname.required' => 'Поле обязательно для заполнения',
                'Surname.alpha' => 'Фамилия должна состоять только из букв',
                'Patronymic.required' => 'Поле оьбязательно для заполнения',
                'Patronymic.alpha' => 'Поле должно состоять только из букв',
                'Password.required' => 'Поле обязательно для заполнения',
                'Confirm_Password' => 'Поле обязательно для заполнения',
            ],
        );
        $userInfo = $request->all();
        $userCreate = User::create([
            'Name' => $userInfo['Name'],
            'Surname' => $userInfo['Surname'],
            'Patronymic' => $userInfo['Patronymic'],
            'Email' => $userInfo['Email'],
            'Password' => Hash::make($userInfo['Password']),
            'Role' => "3",
        ]);
        if ($userCreate) {
            Auth::login($userCreate);
            return redirect('/')->with('success', 'Вы зарегестрировались');
        } else {
            return redirect('/registration')->with('error', 'Ошибка регистрации');
        }
    }
    public function authorization()
    {
        return view('authorization');
    }
    public function login(Request $request)
    {


        $user = $request->only('Email', 'Password');

        if (Auth::attempt([
            'Email' => $user['Email'],
            'Password' => $user['Password'],
        ])) {
            if (Auth::user()->id == 1) {
                return redirect('admin')->with('succes', 'Привет админ');
            } else {
                return redirect('/')->with('succes', '');
            }
        } else {
            return redirect('/authorization')->with('error', 'Проверьте введеные данные!');
        }
    }
//     public function autorization_validate(Request $request)
// {
//     $request->validate([
//         'Email' => 'required|email',
//         'Password' => 'required',
//     ], [
//         'Email.required' => 'Поле обязательно для заполнения',
//         'Email.email' => 'Введите email правильно',
//         'Password.required' => 'Поле обязательно для заполнения',
//     ]);

//     $user_authorization = $request->only("Email", "Password");

//     if (Auth::attempt(["Email" => $user_authorization['Email'], "password" => $user_authorization['Password']])) {
//         if (Auth::user()->Role == 1) {
//             return redirect('/admin')->with('success', 'Вы вошли как администратор');
//         } else {
//             return redirect('/personal-data')->with('success', 'Добро пожаловать');
//         }
//     } else {
//         return redirect('/authorization')->with('error', 'Ошибка авторизации');
//     }
// }
    public function sign_out()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function edit_personal_data(Request $request)
    {
        $request ->validate([
            'Password' =>'required',
            'confirm_password' =>'required|same:Password',
        ],[
            'Password.required' =>'Поле обязательно для заполнения',
            'Confirm_Password' =>'Поле обязательно для заполнения',
        ],);
    }
}
