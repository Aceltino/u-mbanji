<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

    public static function registerForm()
    {
        return 'Tela de Registro';
        // return view('register');
    }

}
