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
		echo "<script type='text/javascript'>location.href='../index.php'</script>";
		die;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'emilioaor@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Mi portafolio - Contactos:  $name";
$email_body = "Has recibido un mensaje desde la página de contactos.\n\n"."He aquí los detalles:\n\nNombre: $name\n\nCorreo: $email_address\n\nMensaje:\n$message";
$headers = "Desde: noreply@ddg.com.ve\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Copia: $email_address";
mail($to,$email_subject,$email_body,$headers);
//Alert
$_SESSION['alert-msg'] = 'Su mensaje fue enviado satisfactoriamente';
$_SESSION['alert-type'] = 'alert-success';
echo "<script type='text/javascript'>location.href='../index.php'</script>";
