<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function viewAddBankAccount()
    {
        return view('add-bank-details');
    }

}
