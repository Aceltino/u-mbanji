<?php

namespace App\Http\Controllers;

use App\Models\PropertyImg; //Model

class PropertyImgController extends Controller
{

    public static function store($datas)
    {
        $created = PropertyImg::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $user = PropertyImg::find($datas['image_id']);

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
            'property_img' => 'image|max:1024',
        ];

        $errors = [
            '*.image'=>'Este campo deve ser uma imagem',
            '*.max'=>'A imagem não deve ter mais de 1 megaByte'
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = PropertyImg::find($datas);
        return $found;
    }

}
