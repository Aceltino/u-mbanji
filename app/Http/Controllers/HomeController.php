<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome()
    {
        return view('home');
    }

    public function viewAbout()
    {
        return view('about');
    }
}
