<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public static function viewRegister()
    {
        return view('register');
    }

    public function viewLogin()
    {
        return view('login');
    }

    public function viewRedefinePass()
    {
        return view('password-reset');
    }

    public function viewRecoveryPass()
    {
        return view('password-recovery');
    }




}
