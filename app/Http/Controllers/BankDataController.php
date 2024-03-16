<?php

namespace App\Http\Controllers;

use App\Models\Bankdata;

class BankDataController extends Controller
{
    public static function store($datas)
    {
        $created = Bankdata::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $data = Bankdata::find($datas['iban_id']);

        foreach ($datas as $key => $value)
         {
            $data->$key = $value;
        }
        return $data->save();
    }

    public static function rules()
    {
        return [
            [
                'iban' => 'required',
                'owner_name' => 'required|string',
                'account_number' => 'required|integer'
            ],
            [
                'iban.required' => 'Este campo deve ser preenchido',
                'owner_name.required' => 'Este campo deve ser preenchido',
                'owner_name.string' => 'Este campo deve ser um nome',
                'account_number.integer' => 'Valor inválido'
            ]
        ];
    }

    public static function get($datas)
    {
        $found = Bankdata::find($datas);
        return $found;
    }
}
