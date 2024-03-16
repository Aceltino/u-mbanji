<?php

namespace App\Http\Controllers;
use App\Models\User; //Model

use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function store($datas)
    {
        $created = User::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $user = User::find($datas['user_id']);

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
            'email' =>'required|email',
            'password'=>'required|string|min:4',
            'numberPhone' =>'required|int|max:15'
        ];

        $errors = [
            '*.required'=>'Este campo deve ser preenchido',
            '*.email'=>'Email inválido',
            '*.min'=>'Palavra-passe deve conter no minimo 4 caracteres',
            '*.integer'=>'Valor inválido',
            '*.max'=>'Valor inválido'
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = User::find($datas);
        return $found;
    }

    public static function getNumber($datas)
    {
        $found = User::where('number', $datas)->first();
        return $found;
    }

    public static function getEmail($datas)
    {
        $found = User::where('email', $datas)->first();
        return $found;
    }
}


// public static function pegarPessoa($idPessoa)
// {
//     $pessoa = Pessoa::find($idPessoa);
//     return $pessoa;
// }
