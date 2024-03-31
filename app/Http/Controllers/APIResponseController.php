<?php

namespace App\Http\Controllers;

class APIResponseController extends Controller
{
    public static function errorWithErrors(array $errors, $code, $message) //Erro com erros de inputs!
    {
        return response()->json([
            'error' => true,
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }

    public static function success() //200
    {
        return response()->json([
            'success' => true,
        ], 200);
    }

    public static function savedResponse() //201
    {
        return response()->json([
            'success' => true,
        ], 201);
    }

    public static function error( $code, $message) //Erro sem erros de inputs!
    {
        return response()->json([
            'error' => true,
           'message' => $message
       ], $code);
    }

    public static function successWithWarnings(array $warnings, $body) //Sucesso com avisos!
    {
        return response()->json([
            'warning' => true,
            'body' => $body,
            'warnigs' => $warnings
        ], 200);
    }
}
