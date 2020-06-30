<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function welcome(Request $request)
    {
        $firstName = $request["firstname"];
        $lastName = $request["lastname"];
        $fullName = $firstName . " " . $lastName;
        return view('welcome',['nama' => $fullName]);
    }
}
