<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function viewHome()
    {
        return view('client-owner/home');
    }
}
