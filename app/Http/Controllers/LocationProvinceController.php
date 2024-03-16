<?php

namespace App\Http\Controllers;

use App\Models\LocationProvince; //Model

class LocationProvinceController extends Controller
{
    public static function store($datas)
    {
        $created = LocationProvince::create($datas);
        return $created;
    }

    public static function get($datas)
    {
        $found = LocationProvince::find($datas);
        return $found;
    }
}
