<?php $body ="
	<!DOCTYPE html>
	<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title></title>
		
	</head>
	<body>
		<style>
			* {
				box-sizing: border-box;
			}
			html, body {
				font-family: 'Roboto Condensed', sans-serif;
			}
			h1, h2 {
				font-family: 'Cantata One', serif;
			}
			h3, h4, h5, h6 {
				font-family: 'Oswald', sans-serif;
			}
			.social-icon {
				display: block;
				width: 45px;
				height: 44px;
				background-image: url(../img/social-icons/social-icons.svg);
				background-color: #f05f40;
				background-repeat: no-repeat;
				border-radius: 100%;
				box-shadow: 0 .3rem .6rem rgba(0,0,0,.3);
				transition: all .2s;
			}
			.social-icon:hover {
				box-shadow: 0 .5rem 1rem rgba(0,0,0,.5);
				transform: translateY(-.3rem);
			}
			.facebook {
				background-position: -39px -40px;
			}
			.youtube {
				background-position: -39px -100px;
			}
			.linkedin {
				background-position: -399px -40px;
			}
			.github {
				background-position: -159px -280px;
			}
			#social ul {
				list-style: none;
				margin: 0;
				padding: 0;
			}
			#social li {
				display: inline-block;
				padding: .5rem;
			}
			#social a {
				width: 45px;
				height: 45px;
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
				
			}
			#social {
				text-align: center;
			}
			.secondary-title {
				text-transform: uppercase;
				font-weight: bold;
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
				
			</footer>
		</div>
	</body>
	</html>

"; ?>