<?php

namespace App\Http\Controllers;

use App\Models\apartament;
use App\Models\photo;
use App\Models\country;
use App\Models\type_object;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function country(){
        $countries = country::take(4)->get();
        $objects = type_object::with("apartament")->take(4)->get();
        return view('index',['countries'=>$countries,'objects'=>$objects]);
    }

    public function create_card()
    {
        return view('create-card');
    }
    public function card_form(Request $request)
    {
        $objectes = $request->all();
        type_object::create([
            'Title_object' => $objectes['Title_object'],
            'Description' => $objectes['Description'],
            'Country' => $objectes['Country'],
            'Placement' => $objectes['Placement'],
            'Category' => $objectes['Category'],
            'Apartament' => $objectes['Apartament'],
            'Check_in' => $objectes['Check_in'],
            'Check_out' => $objectes['Check_out'],
            'User' => $objectes['User'],
            'Address' => $objectes['Address'],
            'City' => $objectes['City'],
        ]);
    }
}
