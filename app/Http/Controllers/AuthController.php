<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Http\Request;

class LoginController extends Controller
{


    public function login(Request $request)
    {
        dd($request->all());
    }
}
