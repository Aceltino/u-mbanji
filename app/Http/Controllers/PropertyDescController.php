<?php

namespace App\Http\Controllers;

use App\Models\PropertyDescription; //Model

class PropertyDescController extends Controller
{
    public static function store($datas)
    {
        $created = PropertyDescription::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $user = PropertyDescription::find($datas['description_id']);

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
            'description' => 'required',
            'property_id' => 'required|int',
        ];

        $errors = [
            '*.required'=>'Este campo deve ser preenchido',
            '*.integer'=>'Valor inválido'
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = PropertyDescription::find($datas);
        return $found;
    }
}
