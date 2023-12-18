<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\apartament;
use App\Models\country;
use App\Models\type_object;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function country()
    {
        $countries = country::take(4)->get();
        $objects = type_object::take(4)->get();
        return view('index', ['countries' => $countries, 'objects' => $objects]);
    }
    public function hotel_card($id)
    {
        $hotel_card = type_object::find($id)->all();
        return view('hotelcard', ['hotelcard' => $hotel_card]);
    }

    public function create_card()
    {
        return view('create-card');
    }

    public function moderators()
    {
        $moderators = User::where('role', 2)->paginate(5);
        return view('admin.index', compact('moderators'));
    }

    public function delete(User $id)
    {
        $id->delete();
        return redirect('/admin/index');
    }

    public function edit_moderator($id)
    {
        $edit_moderator = User::find($id);
        return view('admin.moderator-edit', ['info_user' => $edit_moderator]);
    }

    public function edit_moderator_valid(Request $request, User $id)
    {
        $request->validate(
            [
                'name' => 'required|alpha',
                'surname' => 'required|alpha',
                'patronymic' => 'required|alpha',
                'email' => 'required|unique:users|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ],
            [
                'email.required' => 'Поле обязательно для заполнения',
                'email.email' => 'Введите email',
                'email.unique' => 'Данный email уже занят',
                'name.required' => 'Поле обязательно для заполнения',
                'name.alpha' => 'Имя должно состоять только из букв',
                'surname.required' => 'Поле обязательно для заполнения',
                'surname.alpha' => 'Фамилия должна состоять только из букв',
                'patronymic.required' => 'Поле оьбязательно для заполнения',
                'patronymic.alpha' => 'Поле должно состоять только из букв',
                'password.required' => 'Поле обязательно для заполнения',
                'confirm_password.required' => 'Поле обязательно для заполнения',
            ],
        );
        $userInfo = $request->all();
        $id->fill([
            'name' => $userInfo['name'],
            'surname' => $userInfo['surname'],
            'patronymic' => $userInfo['patronymic'],
            'email' => $userInfo['email'],
            'role' => '2',
            'password' => Hash::make($userInfo['password']),
        ]);
        $id->save();
        return redirect('/admin/index');
    }

    public function edit_user($id)
    {
        $edit_user = User::find($id);
        return view('personal-security', ['info_user' => $edit_user]);
    }

    public function passsword_edit(Request $request, User $id)
    {
        $request->validate(
            [
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ],
            [
                'password.required' => 'Поле необходимо заполнить',
                'confirm_password.required' => 'Поле необходимо заполнить',
            ],
        );
        $userEdit = $request->only('password');
        $id->fill([
            'password' => $userEdit['password'],
        ]);
        $id->save();
        return redirect()
            ->back()
            ->with('success', 'Вы изменили пароль изменён');
    }

    public function delete_account(User $id)
    {
        $id->delete();
        return redirect('/')->with('success', 'Ваш аккаунт был удалён');
    }
}
