<?php
session_start();

// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   empty($_POST['goals'])   ||
   empty($_POST['references'])   ||
   empty($_POST['references2'])   ||
   empty($_POST['amount'])   ||
   empty($_POST['endTime'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   		$_SESSION['alert-msg'] = 'Disculpe, faltan datos';
   		$_SESSION['alert-type'] = 'alert-danger';
		echo "No arguments Provided!";
		echo "<script type='text/javascript'>location.href='../'</script>";
		die;
   }
	
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$goals = $_POST['goals'];
$references = $_POST['references'];
$references2 = $_POST['references2'];
$amount = $_POST['amount'];
$endTime = $_POST['endTime'];

require 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer(true); 
 
// Configuramos el protocolo SMTP con autenticación
$mail->IsSMTP();
 
// Configuración del servidor SMTP
$mail->Port = 25;
$mail->Host = 'aspmx.l.google.com';
$mail->SMTPDebug  = 0;
$mail->ContentType = 'text/html';
$mail->CharSet = 'UTF-8';
//$mail->SMTPAuth = true;
//$mail->AuthType = 'PLAIN';
//$mail->Username = 'emilioaor@gmail.com';

//$mail->SMTPSecure = 'ssl';
// Configuración cabeceras del mensaje
$mail->SetFrom = "emilioaor@gmail.com";
$mail->FromName = "Mi portafolio";
 
$mail->AddAddress("emilioaor@gmail.com", "Emilio Ochoa");
$mail->Subject = "Mi portafolio - Contactos:  $name";
 
// Creamos en una variable el cuerpo, contenido HMTL, del correo
require 'emailTemplate.php';
 
$mail->Body = $body;
 
// Enviar el correo 
if (! $mail->Send()) {
   $_SESSION['alert-msg'] = 'Disculpe, ocurrio un error de comunicación';
   $_SESSION['alert-type'] = 'alert-danger';
} 

//Alert
$_SESSION['alert-msg'] = 'Su mensaje fue enviado satisfactoriamente';
$_SESSION['alert-type'] = 'alert-success';
echo "<script type='text/javascript'>location.href='../'</script>";
