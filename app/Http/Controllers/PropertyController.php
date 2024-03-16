<?php

namespace App\Http\Controllers;

use App\Models\Property; //Model

class PropertyController extends Controller
{
    public static function store($datas)
    {
        $created = Property::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $user = Property::find($datas['property_id']);

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
            // 'property_type' =>'required|integer',
            // 'property_location' =>'required|string',
            // 'property_description' =>'string',
            // 'property_bedRoom' =>'integer',
            'property_img' => 'required|image|max:1024',
            // 'property_proof' =>'image|max:1024',
            // 'municipality_id' =>'required|int',
        ];

        $errors = [
            '*.required'=>'Este campo deve ser preenchido',
            // '*.integer'=>'Valor inválido',
            // '*.string'=>'Valor inválido',
            '*.image'=>'Este campo deve ser uma imagem',
            '*.max'=>'A imagem não deve ter mais de 1 megaByte'
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = Property::find($datas);
        return $found;
    }

}
