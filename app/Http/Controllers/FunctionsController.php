<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NumberFormatter;
use DateTime; // Adicionando a referência para a classe DateTime



class FunctionsController extends Controller
{

    public static function formatarData($data)
    {
        // Converte a data para um objeto DateTime
        $dataFormatada = new DateTime($data);

        // Formata a data no formato desejado (dia, mês e ano)
        return $dataFormatada->format('d/m/Y');
    }
    public static function formatarKwanza($numero)
    {
        $fmt = new NumberFormatter('pt-AO', NumberFormatter::CURRENCY); // pt-AO é o locale para Angola
        return $fmt->formatCurrency($numero, 'AOA'); // AOA é o código da moeda para Kwanza
    }

    public static function formatDateTime($dateTime)
    {
        $dateTimeObject = new DateTime($dateTime);

        $formattedDateTime = $dateTimeObject->format('d/m/Y, H:i'); // Formatação da data e hora combinadas

        return $formattedDateTime;
        // $formattedDateTime = [
        //     'day' => $dateTimeObject->format('d'),
        //     'month' => $dateTimeObject->format('m'),
        //     'year' => $dateTimeObject->format('Y'),
        //     'hour' => $dateTimeObject->format('H'),
        //     'minute' => $dateTimeObject->format('i')
        // ];

        return $formattedDateTime;
    }


    public static function calculatePercentage($value, $percentage)
    {
        // Calcula a porcentagem
        $result = $value * ($percentage / 100);

        return self::formatarKwanza($result);
    }
}
