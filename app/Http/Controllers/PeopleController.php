<?php

namespace App\Http\Controllers;
use App\Models\People; //Model
use Illuminate\Support\Facades\Auth;

class PeopleController extends Controller
{
    public static function store($datas)
    {
        $created = People::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $data = People::find($datas['personal_id']);

        foreach ($datas as $key => $value)
         {
            $data->$key = $value;
        }
        return $data->save();
    }

    public static function rules()
    {
        $rules =
        [
            'name' =>'required|string',
            'biNumber'=>'required|regex:/^\d{9}[A-Z]{2}\d{3}$/',
            'profilePic'=> 'image|max:1024',
        ];

        $errors = [
            '*.required'=>'Este campo deve ser preenchido',
            '*.string'=>'Valor inválido',
            'biNumber.regex' => 'Numero de bilhete inválido',
            '*.image'=>'Este campo deve ser uma imagem',
            '*.max'=>'A imagem não deve ter mais de 1 megaByte',
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = People::find($datas);
        return $found;
    }

    public static function getPersonalId()
    {
        $found = People::where('user_id', Auth::id())->first();
        return $found;
    }

    public static function getBilhete($datas)
    {
        $found = People::where('bi_number', $datas)->first();
        return $found;
    }
}

