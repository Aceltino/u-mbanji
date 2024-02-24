<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function viewBuyRent()
    {
        return view('buy-rent');
    }

    public function viewSeeMore()
    {
        return view('see-more');
    }

}
