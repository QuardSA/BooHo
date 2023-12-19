<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\category;
use App\Models\service;
use App\Models\type_placement;
use App\Models\apartament;
use App\Models\country;
use App\Models\type_object;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $hotel_card = type_object::find($id);
        $hotel_apart = apartament::find($id);
        return view('hotelcard', ['hotelcard' => $hotel_card, 'hotel_apart' => $hotel_apart]);
    }

    public function catalog()
    {
        $hotels = type_object::paginate(10);
        return view('catalog', compact('hotels'));
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

    public function create_card()
    {
        $category = category::all();
        $country = country::all();
        $service = service::all();
        $placement = type_placement::all();
        return view('create-card', ['categories' => $category, 'countries' => $country, 'services' => $service, 'placements' => $placement]);
    }
    public function create_card_valid(Request $request)
    {
        $request->validate(
            [
                'title_object' => 'required',
                'description' => 'required',
                'category' => 'required',
                'service' => 'required',
                'check_in' => 'required',
                'placement' => 'required',
                'check_out' => 'required',
                'country' => 'required',
                'city' => 'required',
                'address' => 'required',
                'photo_apart' => 'required|image',
                'title_apartaments' => 'required',
                'cost' => 'required|numeric',
                'photo_hotel' => 'required|image',
                'count_people' => 'required|numeric',
            ],
            [
                'title_object.required' => 'Поле необходимо заполнить',
                'description.required' => 'Поле необходимо заполнить',
                'service.required' => 'Поле необходимо заполнить',
                'category.required' => 'Поле необходимо заполнить',
                'check_in.required' => 'Поле необходимо заполнить',
                'placement.required' => 'Поле необходимо заполнить',
                'check_out.required' => 'Поле необходимо заполнить',
                'country.required' => 'Поле необходимо заполнить',
                'city.required' => 'Поле необходимо заполнить',
                'address.required' => 'Поле необходимо заполнить',
                'photo_hotel.required' => 'Поле необходимо заполнить',
                'title_apartaments.required' => 'Поле необходимо заполнить',
                'cost.required' => 'Поле необходимо заполнить',
                'photo_apart.required' => 'Поле необходимо заполнить',
                'count_people.required' => 'Поле необходимо заполнить',
            ],
        );
        $hotelInfo = $request->all();

        $name_hotel = $request->file('photo_hotel')->hashName();
        $path_hotel = $request->file('photo_hotel')->store('public/images/hotels');

        $name_apart = $request->file('photo_apart')->hashName();
        $path_apart = $request->file('photo_apart')->store('public/images/apartaments');

        $apartsCreate = apartament::create([
            'title_apartaments' => $hotelInfo['title_apartaments'],
            'cost' => $hotelInfo['cost'],
            'photo' => $name_apart,
            'count_people' => $hotelInfo['count_people'],
        ]);
        $hotelCreate = type_object::create([
            'title_object' => $hotelInfo['title_object'],
            'description' => $hotelInfo['description'],
            'category' => $hotelInfo['category'],
            'apartament' => $apartsCreate->id,
            'service' => $hotelInfo['service'],
            'placement' => $hotelInfo['placement'],
            'check_in' => $hotelInfo['check_in'],
            'check_out' => $hotelInfo['check_out'],
            'country' => $hotelInfo['country'],
            'user' => Auth::user()->id,
            'city' => $hotelInfo['city'],
            'address' => $hotelInfo['address'],
            'photo' => $name_hotel,
        ]);

        if ($hotelCreate) {
            return redirect('/personal-objects')->with('success', 'Вы добавили свой объект');
        } else {
            return redirect('/create-card')->with('error', 'Ошибка добавления');
        }
    }

    public function personal_objects()
    {
        $objects = type_object::paginate(5);

        return view('personal-objects', ['objects' => $objects]);
    }
    public function delete_hotel_card(type_object $id)
    {
        $id->delete();
        return redirect('/personal-objects');
    }
    public function edit_hotel_card($id)
    {
        $type_object = type_object::where('id', $id)
            ->with('country_object', 'apartament_object', 'service_object', 'placement_object')
            ->get()
            ->first();

        $category = category::all();
        $country = country::all();
        $service = service::all();
        $placement = type_placement::all();
        return view('redact-card', ['categories' => $category, 'countries' => $country, 'services' => $service, 'placements' => $placement, 'object' => $type_object]);
    }

    public function edit_hotel_card_validate(Request $request, type_object $id)
    {
        $request->validate(
            [
                'title_object' => 'required',
                'description' => 'required',
                'category' => 'required',
                'service' => 'required',
                'check_in' => 'required',
                'placement' => 'required',
                'check_out' => 'required',
                'country' => 'required',
                'city' => 'required',
                'address' => 'required',
                'photo_apart' => 'required|image',
                'title_apartaments' => 'required',
                'cost' => 'required|numeric',
                'photo_hotel' => 'required|image',
                'count_people' => 'required|numeric',
            ],
            [
                'title_object.required' => 'Поле необходимо заполнить',
                'description.required' => 'Поле необходимо заполнить',
                'service.required' => 'Поле необходимо заполнить',
                'category.required' => 'Поле необходимо заполнить',
                'check_in.required' => 'Поле необходимо заполнить',
                'placement.required' => 'Поле необходимо заполнить',
                'check_out.required' => 'Поле необходимо заполнить',
                'country.required' => 'Поле необходимо заполнить',
                'city.required' => 'Поле необходимо заполнить',
                'address.required' => 'Поле необходимо заполнить',
                'photo_hotel.required' => 'Поле необходимо заполнить',
                'title_apartaments.required' => 'Поле необходимо заполнить',
                'cost.required' => 'Поле необходимо заполнить',
                'photo_apart.required' => 'Поле необходимо заполнить',
                'count_people.required' => 'Поле необходимо заполнить',
            ],
        );

        $card = $request->all();

        if ($request->hasFile('photo_hotel') || $request->hasFile('photo_apart')) {
            $name_hotel = $request->file('photo_hotel')->hashName();
            $path_hotel = $request->file('photo_hotel')->store('public/images/hotels');

            $name_apart = $request->file('photo_apart')->hashName();
            $path_apart = $request->file('photo_apart')->store('public/images/apartaments');

            $id->fill([
                'type_object' => $card['title_object'],
                'description' => $card['description'],
                'photo' => $name_hotel,
                'country' => $card['country'],
                'service' => $card['service'],
                'placement' => $card['placement'],
                'category' => $card['category'],
                'check_in' => $card['check_in'],
                'check_out' => $card['check_out'],
                'address' => $card['address'],
                'city' => $card['city'],
            ]);
            $apartaments = apartament::where('id', $card['apart']) - first();

            $appartament->fill([
                'title_appartaments' => $card['title_apartaments'],
                'count_people' => $card['count_people'],
                'cost' => $card['cost'],
                'photo' => $name_apart,
            ]);
        } else {
            $apartaments = apartament::where('id', $card['apart']) - first();

            $current_photo_hotel = $id->photo;
            $current_photo_apart = $apartaments->photo;

            $id->fill([
                'type_object' => $card['title_object'],
                'description' => $card['description'],
                'photo' => $current_photo_hotel,
                'country' => $card['country'],
                'service' => $card['service'],
                'placement' => $card['placement'],
                'category' => $card['category'],
                'check_in' => $card['check_in'],
                'check_out' => $card['check_out'],
                'address' => $card['address'],
                'city' => $card['city'],
            ]);

            $appartament->fill([
                'title_appartaments' => $card['title_apartaments'],
                'count_people' => $card['count_people'],
                'cost' => $card['cost'],
                'photo' => $current_photo_apart,
            ]);
        }
        $id->save();
        $appartaments->save();

        return redirect()
            ->back()
            ->with('success', 'Вы изменили пароль изменён');
    }
}
