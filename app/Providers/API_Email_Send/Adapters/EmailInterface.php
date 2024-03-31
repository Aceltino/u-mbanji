<?php

namespace App\Providers\API_Email_Send\Adapters;

interface EmailInterface{
    function ConfigSMTP():void;
    function SendEmail(array $DataEmail):bool;
}