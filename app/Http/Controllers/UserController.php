<?php

namespace App\Http\Controllers;
use App\Models\User; //Model
use App\Traits\UserTrait; //Trait


use Illuminate\Http\Request;

class UserController extends Controller
{
    private function store($datas):int
    {
        $user =
        [
            'username' => $datas['username'],
            'email' => $datas['email'],
            'password' => $datas['password'],
            'user_status' => $datas['user_status'],
        ];

        $createUSer = User::create($user);
        return $createUSer->user_id;
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

    public function teste()
    {
        $user =
        [
            'username' => 'Acel0001',
            'email' => 'cesaltinoquianv@gmail.com',
            'password' => 'Acelt!1no!1',
            'user_status' => 1,
        ];
       return $this->store($user);
    }
}
