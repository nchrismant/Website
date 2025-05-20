<?php
namespace App\Mail;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'PortfolioConf.conf.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\PortfolioConf;

class Mail {

    private $mail;

    public function __construct(PHPMailer $mail)
    {
        $this->mail = $mail;
    }
    
    /**
     * Envoie un mail.
     *
     * @param  string $body Corps du mail
     * @param  string $from Adresse de l'expéditeur
     * @param  string $fromName Nom de l'expéditeur
     * @param  string $to Adresse du receveur
     * @param  string $subject Sujet du mail
     * @return void
     */
    public function sendMail(string $body, string $from, string $fromName, string $to='nathanchrismant1@gmail.com', string $subject='Contact Portfolio') : void
    {

        $this->mail->IsSMTP();
        $this->mail->Host = 'smtp-nchrismant.alwaysdata.net';               //Adresse IP ou DNS du serveur SMTP
        $this->mail->Port = 465;                          //Port TCP du serveur SMTP
        $this->mail->SMTPAuth = 1;                        //Utiliser l'identification
        $this->mail->CharSet = 'UTF-8';
        
        if($this->mail->SMTPAuth) {
            $this->mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
            $this->mail->Username   =  PortfolioConf::$smtpUser;    //Adresse email à utiliser
            $this->mail->Password   =  PortfolioConf::$smtpPassword;         //Mot de passe de l'adresse email à utiliser
        }
           
        $this->mail->setFrom(trim($from), $fromName);                //L'email à afficher pour l'envoi
        
        $this->mail->AddAddress($to);

        $this->mail->isHTML(true);      
        $this->mail->Subject    =  $subject;                      //Le sujet du mail
        $this->mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
        $this->mail->Body = "<p><b>Nom</b> : " . $fromName . "</p>
                            <p><b>Adresse email</b> : " . $from . "</p>
                            <p><b>Message</b> : " . $body . "</p>" ; 	       //Texte brut

        if (!$this->mail->send()) {
            throw new \Exception($this->mail->ErrorInfo);
        }
    }
}
?>
