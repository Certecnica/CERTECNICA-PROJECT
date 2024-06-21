<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../prueba/Exception.php';
require '../prueba/PHPMailer.php';
require '../prueba/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                            
    $mail->Host       = 'mail.certecnica.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'soportetic@certecnica.com';                     
    $mail->Password   = '$oporte.2018';                               
    $mail->SMTPSecure = 'ssl';           
    $mail->Port       = 465;                                    
    //Recipients
    $mail->setFrom('soportetic@certecnica.com', 'SOPORTE');
    $mail->addAddress('juanc.sofi@gmail.com');       

    //Content
    $mail->isHTML(true);                                 
    $mail->Subject = 'PRUEBA';
    $mail->Body    = 'hola , pruba!</b>';


    $mail->send();
    echo 'El mensaje se envio correctamente';
} catch (Exception $e) {
    echo "ERROR EN EL ENVIO: {$mail->ErrorInfo}";
}