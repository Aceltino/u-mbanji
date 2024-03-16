<?php

namespace App\Http\Controllers;
use App\Models\PeopleNumber; //Model

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public static function store($datas)
    {
        $created = PeopleNumber::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $user = PeopleNumber::find($datas['number_id']);

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
            'numberPhone' =>'required|integer',
        ];

        $errors = [
            '*.required'=>'Este campo deve ser preenchido',
            '*.integer'=>'Valor inválido',
            // '*.max'=>'Numero inválido',
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = PeopleNumber::find($datas);
        return $found;
    }
}
