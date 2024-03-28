<?php

namespace App\Providers\API_Email_Send;

use PHPMailer\PHPMailer\PHPMailer;

class Service
{
    public function Email(string $email): bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public function ArrayEnum(array $Fields, array $ArrayContext):\Throwable | array {
        $errors = [];
        
        if (count($Fields) !== count($ArrayContext)) throw new \Exception("The number of keys does not match!");

        foreach ($ArrayContext as $key => $_ ) {
            if (!is_string($key)) {
                $errors[$key] = "Key must be a string!";
            } 
            if(!isset($ArrayContext[$key])) {
                $errors[$key] = "Can´t be null!";
            }
        }

        return $errors;
    }

    public function sendEmailMessage(array $DataEmail)
    {
        try {

            $errors = $this->ArrayEnum(['name','to','subject','body'],$DataEmail);

            if (count($errors)) return json_encode(["response" => $errors, "status_code" => 400]);
            
            if (!$this->Email($DataEmail['to'])) return json_encode(["response" => "Must to be valid email", "status_code" => 400]);

            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPDebug = false;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = env('SMTP_ENCRYPTION');
            $mail->Host = env('SMTP_HOST');
            $mail->Username = env('SMTP_USERNAME');
            $mail->Password = env('SMTP_PASSWORD');
            $mail->Port = env('SMTP_PORT');

            $mail->setFrom( env('SMTP_FROM_ADDRESS'), env('SMTP_FROM_NAME'));
            $mail->addAddress($DataEmail['to'], $DataEmail['name']);
            $mail->isHTML(true);
            $mail->Subject = $DataEmail['subject'];
            $mail->Body    = $DataEmail['body'];

            $result = $mail->send();

            return json_encode([
                'response'=> $result ? "Email enviado com sucesso!":"Ocorreu um erro inesperado!", 
                'status_code'=>  $result ? 200:500 
            ]);

        } catch (\Exception $e) {

            return json_encode(['response'=>$e->getMessage(), 'status_code'=> 400]);
        }
    }
}
