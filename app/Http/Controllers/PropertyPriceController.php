<?php

namespace App\Http\Controllers;

use App\Models\PropertyPrice; //Model

class PropertyPriceController extends Controller
{
    public static function store($datas)
    {
        $created = PropertyPrice::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $user = PropertyPrice::find($datas['price_id']);

        foreach ($datas as $key => $value)
         {
            $user->$key = $value;
        }
        return $user->save();
    }

    public static function rules()
    {
        $rules =
        [
            'time' => 'required|int',
            'price' => 'required',
            'contract' => 'required|int',
            'unity_time' => 'required|int',
        ];

        $errors = [
            '*.required'=>'Este campo deve ser preenchido',
            '*.integer'=>'Valor inválido'
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = PropertyPrice::find($datas);
        return $found;
    }
}
