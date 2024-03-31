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
            'img_file' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024',
            'property_id' => 'required|int',

        ];

        $errors = [
            '*.image'=>'Este campo deve ser uma imagem',
            '*.max'=>'A imagem não deve ter mais de 1 megaByte',
            '*.integer'=>'Valor inválido'

        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = PropertyImg::find($datas);
        return $found;
    }

    public static function getImgs($id)
    {
        $imgsProperty = PropertyImg::where('property_id', $id)->get();
        return $imgsProperty;
    }

    public static function getCountimg($property)
    {
        $count = PropertyImg::where('property_id', $property)->count();
        return $count;
    }

}
