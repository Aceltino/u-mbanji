<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Deal;

class DealController extends Controller
{
    public static function store($datas)
    {
        $created = Deal::create($datas);
        return $created;
    }

    public static function update($datas): bool
    {
        $user = Deal::find($datas['deal_id']);

        foreach ($datas as $key => $value) {
            $user->$key = $value;
        }
        return $user->save();
    }

    public static function rules()
    {
        $rules =
            [
                'datetime_in' => 'required|date_format:Y-m-d H:i:s',
                'datetime_out' => 'required|date_format:Y-m-d H:i:s',
                'proprietary_id' => 'required|int',
                'contract' => 'required|int',
                'unity_time' => 'required|int',
                'price' => 'required|int',
                'property_id' => 'required|int'
            ];

        $errors =
            [
                '*.required' => 'Este campo deve ser preenchido',
                '*.integer' => 'Valor inválido',
                '*.date' => 'Valor inválido'
            ];

        return [$rules, $errors];
    }

    public static function get($datas)
    {
        $found = Deal::find($datas);
        return $found;
    }

    public function getAllProprietaryDeal(Request $request) //Home page 8
    {
        $foundDeals = [];
        $deals = Deal::where('proprietary_id', $request->id)
            ->paginate(10);

        if ($deals->isEmpty()) {
            return APIResponseController::error(409, 'Nenhuma negociação solicitada!');
        }

        foreach ($deals as $deal) {

            $client = PeopleController::get($deal->client_id);
            $proprietary = PeopleController::get($deal->proprietary_id);
            $paymentMbanji = PaymentDealController::getLastDeal($deal->deal_id);


            $foundDeals[] = [
                "deal_id" => $deal->deal_id,
                "proprietary_name" => $proprietary->full_name,
                "client_name" => $client->full_name,
                "contract" => $deal->contract,
                "status_deal" => $deal->deal_status,
                "paym_client" => $deal->payment_status,
                "paym_mbanji" => $paymentMbanji->payment_status,
            ];
        }
        $return = [
            'deals' => $foundDeals,
            'pagination' => [
                'total' => $deals->total(),
                'per_page' => $deals->perPage(),
                'current_page' => $deals->currentPage(),
                'last_page' => $deals->lastPage(),
                'from' => $deals->firstItem(),
                'to' => $deals->lastItem(),
            ]
        ];

        return response()->json($return);
    }

    public function getAllClientDeal(Request $request) //Home page 8
    {
        $foundDeals = [];
        $deals = Deal::where('client_id', $request->id)
            ->paginate(10);

        if ($deals->isEmpty()) {
            return APIResponseController::error(409, 'Nenhuma negociação solicitada!');
        }
        foreach ($deals as $deal) {

            $client = PeopleController::get($deal->client_id);
            $proprietary = PeopleController::get($deal->proprietary_id);
            $paymentMbanji = PaymentDealController::getLastDeal($deal->deal_id);


            $foundDeals[] = [
                "deal_id" => $deal->deal_id,
                "proprietary_name" => $proprietary->full_name,
                "client_name" => $client->full_name,
                "contract" => $deal->contract,
                "status_deal" => $deal->deal_status,
                "paym_client" => $deal->payment_status,
                "paym_mbanji" => $paymentMbanji->payment_status,
            ];
        }
        $return = [
            'deals' => $foundDeals,
            'pagination' => [
                'total' => $deals->total(),
                'per_page' => $deals->perPage(),
                'current_page' => $deals->currentPage(),
                'last_page' => $deals->lastPage(),
                'from' => $deals->firstItem(),
                'to' => $deals->lastItem(),
            ]
        ];

        return response()->json($return);
    }

    public function getDeal(Request $request)
    {
        $id = $request->id;
        $errors = [];

        $deal = self::get($id);


        $client = PeopleController::get($deal->client_id);
        $proprietary = PeopleController::get($deal->proprietary_id);
        $property = PropertyController::getById($deal->property_id);
        $propertyContract = PropertyPriceController::getPropertyContrat($deal->property_id, $deal->contract, $deal->unity_time ?? null);
        $img = Storage::disk('public')->url($property->property_img);
        $valueMbanji = PaymentValueController::getPropertyPercetage($deal->contract, $deal->unity_time ?? null);

        $dealInfo =
            [
                "deal_operationTime" => FunctionsController::formatarData($deal->created),
                "property_img" => $img,
                "property_type" => $property->property_type ?? '',
                "property_location" => $property->property_location ?? '',
                "property_municipe" => $property->municipality->municipality ?? '',
                "posted" => FunctionsController::formatarData($property->created),
                "deal_contract" => $deal->contract,
                "contract_price" => FunctionsController::formatarKwanza($propertyContract->price),
                "proprietary_name" => $proprietary->full_name,
                "proprietary_bi" => $proprietary->bi_number,
                "client_name" => $client->full_name,
                "client_bi" => $client->bi_number,
                "deal_in" => FunctionsController::formatDateTime($deal->datetime_in),
                "deal_out" => FunctionsController::formatDateTime($deal->datetime_out),
                "mount_mbanji" => FunctionsController::calculatePercentage($deal->price, $valueMbanji->percetage),
                "status_payment" => $deal->deal_status,
            ];

        dd($dealInfo);
        return APIResponseController::successWithWarnings($errors, $propertyInfo);
    }

    public static function validatePropertyAvailability($propertyId, $checkInDateTime, $checkOutDateTime)
    {
        // Verifica se já existe um registro na tabela "deals" para a propriedade específica
        $existingDeal = Deal::where('property_id', $propertyId)
        ->where(function ($query) use ($checkInDateTime, $checkOutDateTime) {
            $query->where(function ($query) use ($checkInDateTime, $checkOutDateTime) {
                // Verifica se o intervalo fornecido se sobrepõe a algum dos intervalos já registrados
                $query->where('datetime_in', '<', $checkOutDateTime)
                    ->where('datetime_out', '>', $checkInDateTime);
            })
            // Adiciona uma verificação extra para garantir que o intervalo não seja completamente coberto por um registro existente
            ->orWhere(function ($query) use ($checkInDateTime, $checkOutDateTime) {
                $query->where('datetime_in', '>=', $checkInDateTime)
                    ->where('datetime_out', '<=', $checkOutDateTime);
            });
        })
        ->first();

        if ($existingDeal) {
            return APIResponseController::error(409, 'Propriedade indisponivel entre ' . FunctionsController::formatDateTime($existingDeal->datetime_in) . ' há ' . FunctionsController::formatDateTime($existingDeal->datetime_out) . '.');
        } else
            return true;
    }
}
