<?php

namespace App\Providers\API_Email_Send\Utils;

use Exception;

interface ValidateInterface {
    function Email(string $Email): bool;
    function Enum(array $accepteds, $received):bool;
    function ArrayEnum(array $Fields, array $ArrayContext):\Throwable|array;
    function EnsureType(string $type, $value, string $fieldName):\Throwable | bool;


}

class Validate implements ValidateInterface{
    public function Email(string $email): bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public function ArrayEnum(array $Fields, array $ArrayContext):\Throwable | array {
        $errors = [];
        
        if (count($Fields) !== count($ArrayContext)) throw new Exception("A quantidade de chaves está incorreta!");

        foreach ($ArrayContext as $key => $_ ) {
            if (!is_string($key)) {
                $errors[$key] = "Sua chave precisa ser uma string!";
            } 
            if(!$this->Enum($Fields, $key)) {
                $errors[$key] = "Chave não reconhecida!";
            }
        }

        return $errors;
    }
    public function Enum(array $accepteds, $received):bool {
        return array_key_exists($received, $accepteds);
    }
    public function EnsureType(string $type, $value, string $fieldName):\Throwable | bool {
        $acceptedTypes = ["int","bool","float","string","array"];

        if (!array_key_exists($type, $acceptedTypes)) throw new Exception("Tipo não suportado!");

        $_type = [
            "int" => is_int($value),
            "bool" => is_bool($value) ,
            "float" => is_float($value),
            "string" => is_string($value),
            "array" => is_array($value)
        ];

        return $_type[$type] ?? throw new Exception("´".$fieldName."´ precisa ser do tipo $type");
    }

}