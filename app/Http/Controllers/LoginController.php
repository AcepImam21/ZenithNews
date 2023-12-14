<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }
}
