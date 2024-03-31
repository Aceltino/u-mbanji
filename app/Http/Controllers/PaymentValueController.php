<?php

namespace App\Http\Controllers;

use App\Models\PaymentValue;

class PaymentValueController extends Controller
{
    public static function store($datas)
    {
        $created = PaymentValue::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $user = PaymentValue::find($datas['contract_id']);

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
            'property_id' => 'required|int',
            'contract' => 'required|int',
            'unity_time' => 'required|int',
            'price' => 'required|int',
        ];

        $errors =
        [
            '*.required'=>'Este campo deve ser preenchido',
            '*.integer'=>'Valor inválido',
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = PaymentValue::find($datas);
        return $found;
    }

    public static function getPropertyPercetage($contract, $unity = null)
    {
        $propertyResult = PaymentValue::where('unity_time', $unity)
                                        ->where('contract', $contract)
                                        ->first();
        return $propertyResult;
    }
}
