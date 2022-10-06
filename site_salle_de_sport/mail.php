<?php 
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\SMTP;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
if(isset($_POST['send'])){

    $mail = new PHPMailer(true);
    
    try{
    // //CONFIG
    // // je veut des info de debug
    $mail -> SMTPDebug = SMTP::DEBUG_SERVER;
    
    //on config le SMTP
    // $mail ->isSMTP('smtp.gmail.com');
    // $mail ->Host = "localhost";
    // $mail ->Port = 465 ;
    $mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP
    $mail->Host = 'smtp.gmail.com'; // Spécifier le serveur SMTP
    $mail->SMTPAuth = true; // Activer authentication SMTP
    $mail->Username = 'lestudiophp@gmail.com'; // Votre adresse email d'envoi
    $mail->Password = 'oklm1234'; // Le mot de passe de cette adresse email
    $mail->SMTPSecure = 'ssl'; // Accepter SSL
    $mail->Port = 465;
    
    
    //Charster (encodage)
    $mail ->CharSet = "utf-8";
    
    //Destinataires
    $mail->addAddress($_POST['mail']);
    
    //expediteur
    
    $mail->setFrom("lestudiophp@gmail.com");
    
    //contenu
    
    $mail->Subject = $_POST['sujet'];
    $mail->Body = $_POST['message'];
    
    //envoie
    
    $mail->send();
    echo 'message envoyé';
    
    
    }catch(Exception){
        echo "Votre message n'ap pas pu etre envoyé.Erreur : {$mail ->ErrorInfo}";
    
    }
}


//clientstudiophp@gmail.com"
