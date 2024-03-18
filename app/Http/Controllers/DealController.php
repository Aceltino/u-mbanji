<?php

namespace App\Http\Controllers;

use App\Models\Deal;

class DealController extends Controller
{
    public static function store($datas)
    {
        $created = Deal::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $user = Deal::find($datas['deal_id']);

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
            'datetime_in' => 'required|date_format:Y-m-d H:i:s',
            'datetime_out' => 'required|date_format:Y-m-d H:i:s',
            'proprietary_id' => 'required|int',
            'contract' => 'required|int',
            'property_id' => 'required|int'
        ];

        $errors =
        [
            '*.required'=>'Este campo deve ser preenchido',
            '*.integer'=>'Valor inválido',
            '*.date'=>'Valor inválido'
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = Deal::find($datas);
        return $found;
    }
}
