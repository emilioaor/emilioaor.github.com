<?php
session_start();
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   		$_SESSION['alert-msg'] = 'Disculpe, faltan datos';
   		$_SESSION['alert-type'] = 'alert-danger';
		echo "No arguments Provided!";
		echo "<script type='text/javascript'>location.href='../'</script>";
		die;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

require 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer(true); 
 
// Configuramos el protocolo SMTP con autenticación
$mail->IsSMTP();
 
// Configuración del servidor SMTP
$mail->Port = 25;
$mail->Host = 'aspmx.l.google.com';
$mail->SMTPDebug  = 2;
// Configuración cabeceras del mensaje
$mail->From = "emilioaor@gmail.com";
$mail->FromName = "Mi portafolio";
 
$mail->AddAddress("emilioaor@gmail.com", "Emilio O");
$mail->Subject = "Mi portafolio - Contactos:  $name";
 
// Creamos en una variable el cuerpo, contenido HMTL, del correo
$body  = "Has recibido un mensaje desde la página de contactos.\n\n"."He aquí los detalles:\n\nNombre: $name\n\nCorreo: $email_address\n\nMensaje:\n$message";
 
$mail->Body = $body;
 
// Enviar el correo 
$mail->Send(); 

//Alert
$_SESSION['alert-msg'] = 'Su mensaje fue enviado satisfactoriamente';
$_SESSION['alert-type'] = 'alert-success';
echo "<script type='text/javascript'>location.href='../'</script>";
