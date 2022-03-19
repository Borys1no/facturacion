<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../librerias/phpmailer/Exception.php';
require '../librerias/phpmailer/PHPMailer.php';
require '../librerias/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $emailto=$_POST['correoCliente'];
    $file=$_FILES['archivo'];
    $subjet=$_POST['asunto'];
    $body=$_POST['mensaje'];


    $fromemail="boryscereceda8@gmail.com";
    $fromname="Borys Cereceda";
    $host="smtp.gmail.com";
    $port="587";
    $SMTPAuth="login";
    $SMTPSecure="tls";
    $password="bory5astonRoot";
    $mail = new PHPMailer();


    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host=$host;
    $mail->SMTPAuth=$SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username=$fromemail;
    $mail->Password=$password;
    //Recipients
    $mail->setFrom($fromemail,$fromname);
    $mail->addAddress($emailto);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment($file['tmp_name'], $file['name']);         // Add attachments

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subjet;
    $mail->Body    = $body;

    if(!$mail->send()){
        echo "<script>alert('Error al enviar el correo!');</script>"; 
    }   
        header('location:../view/ventas.php');
        echo "<script>alert('Correo enviado con exito!.');</script>";
        
        
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>