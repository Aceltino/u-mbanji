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

    public function propertyInputs(Request $request) //REGISTRAR PROPERTY
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

        $personalID = PeopleController::getPersonalId()->personal_id;

        $imageMain = $personalID.'mbjanji'.time().".".$request->property_img->getClientOriginalExtension();
        Storage::disk('public')->put($imageMain, file_get_contents($request->property_img));

        $imageProof = 'mbjanji'.$personalID.time().".".$request->property_proof->getClientOriginalExtension();
        Storage::disk('public')->put($imageProof, file_get_contents($request->property_proof));

        $property =
            [
                'property_type' => $request->property_type,
                'property_location' => $request->property_location,
                'property_description' => $request->property_type,
                'property_status' => 1,
                'property_bedRoom' => $request->property_bedRoom,
                'property_img' => $imageMain,
                'property_proof' => $imageProof,
                'municipality_id' => $request->municipality_id,
                "personal_id" => $personalID
            ];
        PropertyController::store($property);

        return APIResponseController::savedResponse();
    }

    public function propertyImgInputs(Request $request) //REGISTRAR PROPERTY-IMG
    {
        $error = array();

        $rules = [
            PropertyImgController::rules()[0],
        ];

        $errors = [
            PropertyImgController::rules()[1],
        ];

        // dd($request->all(), $rules[0], $errors[0]);
        $validator = Validator::make($request->all(), $rules[0], $errors[0]);

        if ($validator->fails()) {
            $error[] = $validator->errors()->toArray();
        }

        $propertylID = $request->property_id;

        if(PropertyImgController::getCountimg($propertylID) > 4)
        {
            return APIResponseController::error(401, 'Não pode registrar mais de 5 imagens!');
        }
        if (!empty($error))
        {
            return APIResponseController::errorWithErrors($error, 422, 'Dados inválidos!');
        }

        $imageMain = $propertylID.'mbjanji'.time().".".$request->img_file->getClientOriginalExtension();
        Storage::disk('public')->put($imageMain, file_get_contents($request->img_file));

        $property =
            [
                'img_file' => $imageMain,
                "property_id" => $propertylID
            ];
            PropertyImgController::store($property);

        return APIResponseController::savedResponse();
    }

    public function propertyDesc(Request $request) //REGISTRAR PROPERTY-DESCRIÇAO
    {
        $error = array();

        $rules = [
            PropertyDescController::rules()[0],
        ];

        $errors = [
            PropertyDescController::rules()[1],
        ];

        $validator = Validator::make($request->all(), $rules[0], $errors[0]);

        if ($validator->fails())
        {
            $error[] = $validator->errors()->toArray();
        }

        if (!empty($error))
        {
            return APIResponseController::errorWithErrors($error, 422, 'Dados inválidos!');
        }

        foreach($request->description as $description)
        {
            $property =
            [
                'description' => $description['description'],
                'type_description' => $description['type'],
                "property_id" => $request->property_id
            ];
            PropertyDescController::store($property);
        }

        return APIResponseController::savedResponse();
    }

    public function propertyPrice(Request $request) //REGISTRAR PROPERTY-DESCRIÇAO
    {
        $error = array();

        $rules = [
            PropertyPriceController::rules()[0],
        ];

        $errors = [
            PropertyPriceController::rules()[1],
        ];

        $validator = Validator::make($request->all(), $rules[0], $errors[0]);

        if ($validator->fails())
        {
            $error[] = $validator->errors()->toArray();
        }
        $propertySeek = PropertyPriceController::getProperty($request->property_id, $request->unity_time);
        if ($propertySeek)
        {
            $property =
            [
                'price_id' => $propertySeek->price_id,
                'time' => $request->time,
                'price' => $request->price
            ];
            PropertyPriceController::update($property);
            return APIResponseController::savedResponse();
        }

        if (!empty($error))
        {
            return APIResponseController::errorWithErrors($error, 422, 'Dados inválidos!');
        }
            $property =
            [
                'time' => $request->time,
                'price' => $request->price,
                "contract" => $request->contract,
                'unity_time' => $request->unity_time,
                'property_id' => $request->property_id
            ];
            PropertyPriceController::store($property);

        return APIResponseController::savedResponse();
    }

    public function dealProperty(Request $request)
    {
        $error = array();

        $rules = [
            DealController::rules()[0],
            PaymentValueController::rules()[0]
        ];

        $errors = [
            DealController::rules()[1],
            PaymentValueController::rules()[1]
        ];

        $validator = Validator::make($request->all(), $rules, $errors);
        if ($validator->fails())
        {
            $error[] = $validator->errors()->toArray();
        }


        if (!empty($error))
        {
            return APIResponseController::errorWithErrors($error, 422, 'Dados inválidos!');
        }
        // dd($request->all());
            $paymentValue =
            [
                'time' => $request->time,
                'price' => $request->price,
                "contract" => $request->contract,
                'unity_time' => $request->unity_time,
                'property_id' => $request->property_id
            ];
            $payValue = PaymentValueController::store($paymentValue);

            $deal =
            [
                'datetime_in' => $request->datetime_in,
                'datetime_out' => $request->datetime_out,
                'payment_status' => 3,
                'deal_status' => 0,
                'proprietary_id' => $request->proprietary_id,
                'client_id' => PeopleController::getPersonalId()->personal_id,
                'property_id' => $request->property_id,
                'contract_id' => $payValue->contract_id
            ];
            $dealDone = DealController::store($deal);

            $payDeal =
            [
                'deal_id' => $dealDone->deal_id,
            ];
            PaymentDealController::store($payDeal);

        return APIResponseController::savedResponse();

    }
}
