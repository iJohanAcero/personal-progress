<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'config.php';

// Verificar si se ha enviado el formulario
$email = $_POST['email'];
$query = "SELECT * FROM usuarios WHERE email = '$email' AND status = '1'";
$result = $conn->query($query);


if ($result->num_rows > 0) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $row = $result->fetch_assoc();

    try {
        $mail->isSMTP();
        $mail->Host = 'live.smtp.mailtrap.io'; // O el host SMTP que te da Mailtrap
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = 'api'; // O el usuario SMTP de Mailtrap
        $mail->Password = 'f70df89a282c29398e7c8c9fb09b41a4'; // O la contraseña SMTP de Mailtrap

        //Recipients
        $mail->setFrom('noreply@demomailtrap.co', 'prueba'); // Usa un correo válido
        $mail->addAddress('johanacero8@gmail.com', 'johan'); // Destinatario

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Recuperación de contraseña';
        $mail->Body    = 'hola este es un mensaje de prueba para recuperar tu contraseña. ve a esta pagina <a href="localhost/SENA/washington/php/phpmailer/change_password.php?id='.$row['id'].'">Recuperacion de contraseña</a>.';
        $mail->AltBody = '--- * ---';

        $mail->send();
        echo 'Message has been sent';
        header("location: ../index.php?messsage=ok");
    } catch (Exception $e) {
        header("location: ../index.php?messsage=error");
    }
} else {
    // Usuario no encontrado, redirigir a la página de inicio de sesión con un mensaje de error
    header("Location: ../index.php?messsage=nouser");
    exit();
}
