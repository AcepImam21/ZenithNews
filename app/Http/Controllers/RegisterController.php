<?php

namespace App\Http\Controllers;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('registrasi.registrasi');
    }
}
