<?php

namespace App\Providers\API_Email_Send\Gateway;

use PHPMailer\PHPMailer\PHPMailer;

interface EmailInterface{
    function ConfigSMTP():void;
    function SendEmail(array $DataEmail);
}

class PHPMailerGateway implements EmailInterface
{
    private PHPMailer $mailer;

    function __construct()
    {
        $this->mailer = new PHPMailer();
    }

    function ConfigSMTP(): void
    {
        //Configuração SMTP
        $this->mailer->isSMTP();
        $this->mailer->Host = env('SMTP_HOST');
        $this->mailer->Port = env('SMTP_PORT');
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = env('SMTP_USERNAME');
        $this->mailer->Password = env('SMTP_PASSWORD');
        $this->mailer->SMTPSecure = env('SMTP_SECURE', 'tls');

    }

    function SendEmail(array $DataEmail)
    {

        try {
            
            $this->mailer->setFrom($DataEmail['from']);
            $this->mailer->addAddress($DataEmail['to']);
            $this->mailer->Subject = $DataEmail['subject'];
            $this->mailer->Body = $DataEmail['body'];

            $this->mailer->send();

            return true;

        } catch (\Exception $ex) {

            return $ex;
        }
    }
}
