<?php

namespace App\Http\Controllers;

use App\Models\PayementDeal;

class PaymentDealController extends Controller
{
    public static function store($datas)
    {
        $created = PayementDeal::create($datas);
        return $created;
    }

    public static function update($datas):bool
    {
        $user = PayementDeal::find($datas['payment_id']);

        foreach ($datas as $key => $value)
         {
            $user->$key = $value;
        }
        return $user->save();
    }

    public static function get($datas)
    {
        $found = PayementDeal::find($datas);
        return $found;
    }

    public static function getLastDeal($deal)
    {
        $dealFound = PayementDeal::where('deal_id', $deal)->latest('created')->first();
        return $dealFound;
    }
}
