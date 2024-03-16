<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InputController extends Controller
{
    public function peopleInputs(Request $request) //CRIAR USUARIO
    {
        $errors = array();

        $rules = [
            UserController::rules()[0],
            NumberController::rules()[0],
            PeopleController::rules()[0],
        ];

        $error = [
            UserController::rules()[1],
            NumberController::rules()[1],
            PeopleController::rules()[1],
        ];

        $validator = Validator::make($request->all(), $rules, $error);

        if ($validator->fails()) {
            $errors[] = $validator->errors()->toArray();
        }

        $phone = UserController::getNumber($request->numberPhone);
        // dd($phone, $request->numberPhone);
        if ($phone) {
            $errors[0]['numberPhone'] = ["Este telefone já está em uso!"];
        }

        $email = UserController::getEmail($request->email);
        if ($email) {
            $errors[0]['email'] = ["Este email já está em uso!"];
        }

        $bilhete = PeopleController::getBilhete($request->biNumber);
        if ($bilhete) {
            $errors[0]['biNumber'] = ["Este numero de bilhete já está em uso!"];
        }

        if (!empty($errors)) {
            return APIResponseController::errorWithErrors($errors, 422, 'Dados inválidos!');
        }

        $user =
            [
                "email" => $request->email,
                "password" =>  bcrypt($request->password),
                "user_status" => 1,
                "number" => $request->numberPhone,
            ];
        $savedUser = UserController::store($user);

        $people =
            [
                "full_name" => $request->name,
                "bi_number" => $request->biNumber,
                "level_access" => 2,
                "user_id" => $savedUser->user_id,

            ];
        $savedPeople = PeopleController::store($people);

        $number =
            [
                "number" => $request->numberPhone,
                "personal_id" => $savedPeople->personal_id,
            ];
        NumberController::store($number);

        return APIResponseController::savedResponse();
    }

    public function bankDataInputs(Request $request) //REGISTRAR CONTA BANCÁRIA
    {
        $error = array();

        $rules = [
            BankDataController::rules()[0],
        ];

        $errors = [
            BankDataController::rules()[1],
        ];

        // dd($request->all(), $rules[0], $errors[0]);
        $validator = Validator::make($request->all(), $rules[0], $errors[0]);

        if ($validator->fails()) {
            $error[] = $validator->errors()->toArray();
        }
        // dd($request->all(), $error);
        if (!empty($error)) {
            return APIResponseController::errorWithErrors($error, 422, 'Dados inválidos!');
        }
        $bank =
            [
                "iban" => $request->iban,
                "owner_name" =>  $request->owner_name,
                "account_number" => $request->account_number,
                "status" => 1,
                "personal_id" => PeopleController::getPersonalId()->personal_id
            ];
        BankDataController::store($bank);

        return APIResponseController::savedResponse();
    }

    public function phoneInputs(Request $request) //REGISTRAR TELEFONE
    {
        $error = array();

        $rules = [
            NumberController::rules()[0],
        ];

        $errors = [
            NumberController::rules()[1],
        ];

        // dd($request->all(), $rules[0], $errors[0]);
        $validator = Validator::make($request->all(), $rules[0], $errors[0]);

        if ($validator->fails()) {
            $error[] = $validator->errors()->toArray();
        }
        // dd($request->all(), $error);
        if (!empty($error)) {
            return APIResponseController::errorWithErrors($error, 422, 'Dados inválidos!');
        }
        $phone =
            [
                "number" => $request->numberPhone,
                "personal_id" => PeopleController::getPersonalId()->personal_id
            ];
        NumberController::store($phone);

        return APIResponseController::savedResponse();
    }

    public function propertyInputs(Request $request) //REGISTRAR TELEFONE
    {
        $error = array();

        $rules = [
            PropertyController::rules()[0],
        ];

        $errors = [
            PropertyController::rules()[1],
        ];

        // dd($request->all(), $rules[0], $errors[0]);
        $validator = Validator::make($request->all(), $rules[0], $errors[0]);

        if ($validator->fails()) {
            $error[] = $validator->errors()->toArray();
        }
        // dd($request->all(), $error);
        if (!empty($error)) {
            return APIResponseController::errorWithErrors($error, 422, 'Dados inválidos!');
        }

        $imageName = Str::random(32).".".$request->property_img->getClientOriginalExtension();

        $done = Storage::disk('public')->put($imageName, file_get_contents($request->property_img));
dd($done);

        $phone =
            [
                "number" => $request->numberPhone,
                "personal_id" => PeopleController::getPersonalId()->personal_id
            ];
        NumberController::store($phone);

        return APIResponseController::savedResponse();
    }
}
