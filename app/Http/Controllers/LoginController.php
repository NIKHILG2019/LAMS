<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login (Request $req)
    {
        $username = $req->username;
        $password = $req->passwrd;

    }
}
