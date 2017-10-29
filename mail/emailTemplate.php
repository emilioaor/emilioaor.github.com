<?php $body ="
	<!DOCTYPE html>
	<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title></title>
		<link href='https://fonts.googleapis.com/css?family=Cantata+One|Oswald|Roboto+Condensed' rel='stylesheet'>
	</head>
	<body>
		<link rel='stylesheet' href='https://emilioochoa.com.ve/css/styles.css'>
		<style>
			* {
				box-sizing: border-box;
			}
			.container {
				max-width: 700px;
				margin: 0 auto;
				background-color: #f4f4f4;
				padding-bottom: 20px;
			}
			h1 {
				background-color: #f05f40;
				color: #fff;
				padding: 10px;
				font-size: 22px;
			}
			p {
				padding: 5px 10px;
			}
			.social-icon {
				background-image: url(https://emilioochoa.com.ve/img/social-icons/social-icons.svg) !important;
			}
			#social {
				text-align: center;
			}
			.secondary-title {
				font-size: 18px;
				text-align: center;
			}
			footer {
				padding: 1rem;
				margin-top: 2rem;
			}
		</style>

		<div class='container'>
			<h1>$name, su mensaje fue enviado.</h1>
			<p>
				Un placer en saludarte $name, su mensaje fue enviado satisfactoriamente, muchas gracias por escribir tan pronto sea posible le daré un mensaje de respuesta.
				<br><br>
				Atte: Emilio Ochoa
			</p>
			<hr>
			<p>
				<strong>Nombre:</strong>
				$name
			</p>
			<p>
				<strong>Email:</strong>
				$email
			</p>
			<p>
				<strong>Objetivos para crear pagina web:</strong>
				$goals
			</p>
			<p>
				<strong>Referencias:</strong>
				$references
			</p>
			<p>
				<strong>Modelos de diseño:</strong>
				$references2
			</p>
			<p>
				<strong>Otros comentarios:</strong>
				$message
			</p>
			<p>
				<strong>Presupuesto:</strong>
				$amount
			</p>
			<p>
				<strong>Tiempo de entrega:</strong>
				$endTime
			</p>
			<footer>
				<div id='social'>
					<h2 class='secondary-title'>Redes sociales</h2>
					<ul>
						<li><a href='https://www.facebook.com/emilioaor' target='_blank'><span class='social-icon facebook'></span></a></li>
						<li><a href='https://github.com/emilioaor' target='_blank'><span class='social-icon github'></span></a></li>
						<li><a href='https://www.linkedin.com/in/emilio-ochoa-458161117/' target='_blank'><span class='social-icon linkedin'></span></a></li>
						<li><a href='https://www.youtube.com/channel/UCIsv-YGxFzg8jZvMzalgSqg' target='_blank'><span class='social-icon youtube'></span></a></li>
					</ul>
				</div>
			</footer>
		</div>
	</body>
	</html>

"; ?>