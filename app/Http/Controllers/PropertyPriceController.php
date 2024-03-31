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
            'unity_time' => 'nullable|int',
            'property_id' => 'required|int'
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

    public static function getProperty($property, $unity)
    {
        $propertyResult = PropertyPrice::where('property_id', $property)
                                        ->where('unity_time', $unity)
                                        ->first();
        return $propertyResult;
    }

    public static function getPropertyContrat($property,$contract, $unity = null)
    {
        $propertyResult = PropertyPrice::where('property_id', $property)
                                        ->where('unity_time', $unity)
                                        ->where('contract', $contract)
                                        ->first();
        return $propertyResult;
    }

    public static function getPrices($id)
    {
        $imgsProperty = PropertyPrice::where('property_id', $id)->get();
        return $imgsProperty;
    }

    public static function checkDuplicatePrice($propertyId, $unityTime)
{
    // Verifica se já existe um registro com contrato igual a 1
    $existingContract1 = PropertyPrice::where('property_id', $propertyId)
        ->where('contract', 1)
        ->exists();

    // Verifica se já existe um registro com o unity_time fornecido
    $existingUnityTime = PropertyPrice::where('property_id', $propertyId)
        ->where('unity_time', $unityTime)
        ->exists();

    // Se já existe um registro com contrato igual a 1 ou com o unity_time fornecido, retorna false
    if ($existingContract1 || $existingUnityTime) {
        return false;
    }

    // Caso contrário, retorna true (não existe duplicação)
    return true;
}



}
