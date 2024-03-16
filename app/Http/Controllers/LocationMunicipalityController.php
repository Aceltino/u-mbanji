<?php

namespace App\Http\Controllers;

use App\Models\LocationMunicipality; //Model

class LocationMunicipalityController extends Controller
{
    public static function store($datas)
    {
        $created = LocationMunicipality::create($datas);
        return $created;
    }

    public static function get($datas)
    {
        $found = LocationMunicipality::find($datas);
        return $found;
    }
}
