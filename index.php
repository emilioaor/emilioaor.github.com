<?php
	session_start();
	if (isset($_SESSION['alert-msg']) && isset($_SESSION['alert-type'])) {
		$message = $_SESSION['alert-msg'];
		$type = $_SESSION['alert-type'];
		unset($_SESSION['alert-msg']);
		unset($_SESSION['alert-type']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>Emilio Ochoa</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="slider/css/style.css">
</head>
<body>
	
	<?php if (isset($message) && isset($type)) { ?>
			
			<!-- if have alert -->
			<div id="space-alert">
				<div class="alert <?php echo $type ?> alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Atención!</strong> <?php echo $message ?>
				</div>
			</div>

	<?php } ?>

	<div id="loading"></div>

	<nav id="navbar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-4 navitems nav-main">
					<ul>
						<li onclick="goTo('#top')"><span class="glyphicon glyphicon-star"></span> Emilio Ochoa</li>
					</ul>

					<button type="button" data-toggle="collapse" data-target="#items-collapse"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
				</div>

				<div id="items-collapse" class="col-xs-8 text-right navitems collapse">
					<ul>
						<li onclick="goTo('#information')"><span class="glyphicon glyphicon-info-sign"></span> Información</li>
						<li onclick="goTo('#skills')"><span class="glyphicon glyphicon-education"></span> Habilidades</li>
						<li onclick="goTo('#portfolio')"><span class="glyphicon glyphicon-briefcase"></span> Portafolio</li>
						<li onclick="goTo('#contact')"><span class="glyphicon glyphicon-envelope"></span> Contacto</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<section id="top">
		
		<div class="slider">
			<div id="fade"></div>
			<ul>
				<li id="slider-text">
					<div class="container">
						<h1 class="main-title text-center">Soy Emilio Ochoa bienvenido a mi portafolio!</h1>
						<hr class="hr">
						<p class="text-center">Sea bienvenido a mi portafolio virtual, aquí encontraras una pequeña muestra de mi y de mis trabajos y como siempre estaré disponible para atender cualquier solicitud.</p>

						<div class="text-center">
							<button type="button" onclick="goTo('#information')" class="btn-primary-giant">Ver mas</button>
						</div>
					</div>
				</li>
				<li id="slider-item1"></li>
				<li id="slider-item2"></li>
				<li id="slider-item3"></li>
				<li id="slider-item4"></li>
			</ul>

		</div>

	</section>

	<section id="information">
		
		<div class="container">
			<h2 class="secondary-title text-center">Información personal</h2>
			<hr class="hr">

			<div class="row">
			
				<div class="col-sm-offset-2 col-sm-4">
					<img src="img/Yo.jpg" id="yo" alt="Emilio Ochoa" title="Emilio Ochoa">
				</div>

				<div class="col-sm-5 col-sm-offset-0">
					<h3>Datos personales</h3>
					<ul>
						<li><strong>Nombres: </strong>Emilio Arturo</li>
						<li><strong>Apellidos: </strong>Ochoa Ramirez</li>
						<li><strong>Cédula de identidad: </strong>21.029.522</li>
						<li><strong>Fecha de nacimiento: </strong>02/10/1992</li>
						<li><strong>Lugar de nacimiento: </strong>Valencia</li>
						<li><strong>Nacionalidad: </strong>Venezolano</li>
						<li><strong>Estado civil: </strong>Soltero</li>
						<li><strong>Edad: </strong>25 años</li>
					</ul>
				</div>

			</div>

			<div class="row">
				<div id="social" class="col-xs-12">
					<br>
					<h2 class="secondary-title text-center">Redes sociales</h2>
					<hr class="hr">
					<div class="text-center">
						<ul>
							<li><a href="https://www.facebook.com/emilioaor" target="_blank"><span class="social-icon facebook"></span></a></li>
							<li><a href="https://github.com/emilioaor" target="_blank"><span class="social-icon github"></span></a></li>
							<li><a href="https://www.linkedin.com/in/emilio-ochoa-458161117/" target="_blank"><span class="social-icon linkedin"></span></a></li>
							<li><a href="https://www.youtube.com/channel/UCIsv-YGxFzg8jZvMzalgSqg" target="_blank"><span class="social-icon youtube"></span></a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>

	</section>

	<section id="skills">
		
		<div class="container">
			
			<h2 class="secondary-title text-center">Habilidades</h2>
			<hr class="hr">
			<br>

			<div class="row">							
				<div class="col-sm-6">
					<article class="card">

						<div class="row">
							<div class="col-xs-4">SQL Server</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">MySQL</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">HTML5</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">CSS3</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">PHP</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">JavaScript</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">JQuery</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
								</div>
							</div>
						</div>

					</article>
				</div>

				<div class="col-sm-6">
					<article class="card">

						<div class="row">
							<div class="col-xs-4">Bootstrap</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">Wordpress</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">Laravel</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">Symfony</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">AngularJS</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">Git</div>
							<div class="col-xs-8">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
								</div>
							</div>
						</div>

					</article>
				</div>
			</div>
			
			<br>
			<div class="text-center">
				<button type="button" onclick="goTo('#portfolio')" class="btn-primary-giant">¿Empleadas en que?</button>
			</div>

		</div>

	</section>

	<section id="portfolio">
		
		<div class="container">
			
			<h2 class="secondary-title text-center">Portafolio</h2>
			<hr class="hr">
			
			<div class="row port-row">
				
				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3">
					<a href="https://github.com/emilioaor/control-de-solicitudes" target="_blank">
						<div class="portfolio-item">
							<h4>Control de solicitudes <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/control-de-solicitudes2.jpg" class="img-responsive" alt="Control de solicitudes" title="Control de solicitudes">
							<p class="text-justify">
								Aplicación para el control de solicitudes de servicio.
							</p>
						</div>
					</a>
				</div>

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3">
					<a href="https://github.com/emilioaor/control-de-inventario-symfony3" target="_blank">
						<div class="portfolio-item">
							<h4>Control de inventario <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/inventory.jpg" class="img-responsive" alt="Control de inventario" title="Control de inventario">
							<p class="text-justify">
								Aplicación para el control de inventario.
							</p>
						</div>
					</a>
				</div>

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3 clear-991">
					<a href="https://github.com/emilioaor/control-de-maquinaria-pesada" target="_blank">
						<div class="portfolio-item">
							<h4>Maquinaria pesada <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/alquiler-de-maquinaria.jpg" class="img-responsive" alt="Maquinaria pesada" title="Maquinaria pesada">
							<p class="text-justify">
								Aplicación para el alquiler de maquinaria pesada.
							</p>
						</div>
					</a>
				</div>

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3">
					<a href="http://www.procuraduriacarabobo.gob.ve" target="_blank">
						<div class="portfolio-item">
							<h4>Procuraduría PEC <span class="text-success">(Online)</span></h4>
							<img src="img/portfolio/pec.jpg" class="img-responsive" alt="Procuraduría PEC" title="Procuraduría PEC">
							<p class="text-justify">
								Página de la Procuraduría del Estado Carabobo.
							</p>
						</div>
					</a>
				</div>

			</div>

			<div class="row">

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3">
					<a href="https://github.com/emilioaor/acortador-de-enlaces" target="_blank">
						<div class="portfolio-item">
							<h4>Acorta enlaces <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/shorterLink.jpg" class="img-responsive" alt="Acortador de enlaces" title="Acortador de enlaces">
							<p class="text-justify">
								Aplicación para acortar y monitorear enlaces.
							</p>
						</div>
					</a>
				</div>

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3">
					<a href="https://github.com/emilioaor/tu-hipico-online" target="_blank">
						<div class="portfolio-item">
							<h4>Tu hipico online <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/hipico.jpg" class="img-responsive" alt="Acortador de enlaces" title="Acortador de enlaces">
							<p class="text-justify">
								Sistema para el control de apuestas de carrera de caballos.
							</p>
						</div>
					</a>
				</div>

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3 clear-991">
					<a href="https://github.com/emilioaor/loteria-de-animalitos" target="_blank">
						<div class="portfolio-item">
							<h4>Lotería de animalitos <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/animalito.jpg" class="img-responsive" alt="Acortador de enlaces" title="Acortador de enlaces">
							<p class="text-justify">
								Sistema para la venta de lotería de animalitos.
							</p>
						</div>
					</a>
				</div>

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3">
					<a href="https://github.com/emilioaor/consultoria-legal" target="_blank">
						<div class="portfolio-item">
							<h4>Consultoría legal <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/consultoria.jpg" class="img-responsive" alt="Consultoría legal" title="Consultoría legal">
							<p class="text-justify">
								Página para control de solicitudes de consultoría legal.
							</p>
						</div>
					</a>
				</div>
				
			</div>

			<div class="row">

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3">
					<a href="https://github.com/emilioaor/crea-tu-cine" target="_blank">
						<div class="portfolio-item">
							<h4>Crea tu cine online <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/creatucine.jpg" class="img-responsive" alt="Crea tu cine online" title="Crea tu cine online">
							<p class="text-justify">
								Aplicación donde usuarios crean su propio cine online.
							</p>
						</div>
					</a>
				</div>

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3">
					<a href="http://peliculascineencasa.com" target="_blank">
						<div class="portfolio-item">
							<h4>Cine en Casa <span class="text-success">(Online)</span></h4>
							<img src="img/portfolio/cineencasa2.jpg" class="img-responsive" alt="Cine en Casa" title="Cine en Casa">
							<p class="text-justify">
								Página de películas autoadministrable.
							</p>
						</div>
					</a>
				</div>

				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3 clear-991">
					<a href="https://github.com/emilioaor/laravel-lista-de-cumpleaneros" target="_blank">
						<div class="portfolio-item">
							<h4>Publica cumpleaños <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/cumple.jpg" class="img-responsive" alt="Publica cumpleaños" title="Publica cumpleaños">
							<p class="text-justify">
								Pequeña cartelera de cumpleañeros autoadministrable.
							</p>
						</div>
					</a>
				</div>
				
				<!-- Porfolio item -->
				<div class="col-xs-6 col-md-3">
					<a href="https://github.com/emilioaor/mundo-acuario" target="_blank">
						<div class="portfolio-item">
							<h4>Mundo acuario <span class="text-warning">(Github)</span></h4>
							<img src="img/portfolio/mundo-acuario.jpg" class="img-responsive" alt="Mundo acuario" title="Mundo acuario">
							<p class="text-justify">
								Aplicación de venta con tematica de peces.
							</p>
						</div>
					</a>
				</div>

			</div>

		</div>

	</section>

	<section id="contact">
		
		<div class="container">
			
			<h2 class="secondary-title text-center">Contacto</h2>
			<hr class="hr">

			<p class="text-center">
				¿Listo para iniciar tu proyecto?. Cuentame un poco a traves del siguiente formulario.
			</p>

			<div class="row">
				
				<div class="col-sm-6 col-sm-offset-3">
					
					<form action="mail/contact_me.php" method="POST">
				
						<div class="form-group">
							<label for="name">Nombre</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Nombre" required="required">
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
						</div>

						<div class="form-group">
							<label for="message">Mensaje</label>
							<textarea id="message" name="message" class="form-control" rows="5" placeholder="Mensaje" required="required"></textarea>
						</div>

						<div class="text-center">
							<button class="btn-primary-medium"><span class="glyphicon glyphicon-envelope"></span> Enviar</button>
						</div>

					</form>

				</div>

			</div>

		</div>

	</section>

	<footer>
		<div class="container">
			<p class="text-center">&copy; Derechos reservado a Emilio Ochoa</p>
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="slider/js/main.js"></script>
</body>
</html>