<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function registration()
    {
        return view ('registration');
    }
    public function registration_validate(Request $request)
    {
        $request->validate([
            
        ])
    }
}
