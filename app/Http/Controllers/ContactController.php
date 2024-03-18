<?php

namespace App\Http\Controllers;

use App\Models\ContactsInfo;

class ContactController extends Controller
{
    public static function store($datas)
    {
        $created = ContactsInfo::create($datas);
        return $created;
    }

    public static function rules()
    {
        $rules =
        [
            'topic_contact' => 'required|string',
            'content_contact' => 'required|string',
            'email_contact' => 'required|string',
            'phone_number' => 'required|int',
        ];

        $errors = [
            '*.required'=>'Este campo deve ser preenchido',
            '*.integer'=>'Valor inválido para este campo',
            '*.string'=>'Valor inválido para este campo'
        ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = ContactsInfo::find($datas);
        return $found;
    }
}
