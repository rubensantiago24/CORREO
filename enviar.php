<?php
$msg = null;
$correo =htmlspecialchars( $_POST["correo"]);
$asunto =htmlspecialchars( $_POST["asunto"]);
$texto =htmlspecialchars( $_POST["texto"]);
$remitente =htmlspecialchars( $_POST["remitente"]);
$img = $_FILES["img"];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$mail = new PHPMailer(true);

try{
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'tucorreo@gmail.com';                     
    $mail->Password   = 'tu_contraseña';                               
    $mail->SMTPSecure = 'tls';         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom('tucorreo@gmail.com', $remitente);
    $mail->addAddress($correo);     
    

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = $asunto;
    $mail->Body    = $texto;

    $mail->addAttachment($img ["tmp_name"], $img ["name"]);
    $mail->send();
    echo "Mensaje enviado a su correo: $correo";

}catch (Exception $e) {
    echo "No se pudo enviar el mensaje. Error de envío: {$mail->ErrorInfo}";
}

//Rubén Santiago Orejuela Torres -2020
//Analisis y desarrollo de Sistemas de Informacion.
 
