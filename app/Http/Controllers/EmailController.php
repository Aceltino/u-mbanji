<?php

namespace App\Http\Controllers;

use App\Providers\API_Email_Send\Service;
use Illuminate\Http\Request;
class EmailController extends Controller
{
    protected Service $emailService;

    function __construct()
    {
        $this->emailService= new Service();
    }

    public function SendMail(Request $request)
    {

        $DataEmail= $request->only('name','to','subject','body' );

        $SendEmail=json_decode($this->emailService->sendEmailMessage($DataEmail));
       

        return response()->json($SendEmail, $SendEmail->status_code);
    }

}
