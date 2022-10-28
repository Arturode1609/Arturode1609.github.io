<?php

/****************************************************************
Recibe los datos ingresados
****************************************************************/
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$comentario = $_POST['mensaje'];

if( empty($nombre) || empty($email) || empty($asunto) || empty($comentario) ) {
	
	$error = true;
	
}


/****************************************************************
Aquí debes ingresar el asunto del mail
****************************************************************/
$subject = 'Contacto desde internet de ' . $nombre ;
$comentario = stripcslashes($comentario);



/****************************************************************
Aquí se genera el cuerpo del mensaje
****************************************************************/
$mensaje = "De: $nombre \n
E-mail: $email \n
Asunto: $asunto \n
Mensaje: $comentario \n
\n";

$from = "From: $email\r\n";



/****************************************************************
ingresa mail receptor
****************************************************************/

if( !$error ) {
	mail("email@receptor.com", $subject, $mensaje, $from);
}
?>
				
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Juan Pérez González / Diseño y desarrollo web</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Francisco Aguilera G. - http://franciscoamk.com">
	
	<link rel="stylesheet" href="style.css" >
	
	<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="js/selectivizr-min.js"></script>
	  <script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->
	
	<!--
	/******************************************************************
	 *
	 *  Esta plantilla ha sido diseñada y desarrollada
	 *  por Francisco Aguilera G. (@FranciscoAMK) y se distribuye
	 *  gratuitamente para los suscriptores de su newsletter en
	 *  http://franciscoamk.com/newsletter
	 *
	 *  Siendo un producto de distribución gratuita no se
	 *  ofrece ningún tipo de soporte.
	 *
	 *  Siéntete libre de usar esta plantilla con fines de
	 *  aprendizaje o tammbién para usarla en tu propio sitio
	 *  o en el sitio de alguno de tus clientes.
	 *
	 *  No es requerido, pero sería genial si dejaras un link
	 *  a http://franciscoamk.com/newsletter indicando que allí es 
	 *  donde obtuviste este diseño.
	 *
	 *  Un abrazo,
	 *  @FranciscoAMK
	 *
	 *  --
	 *
	 *  Íconos por Kristian Kim // https://dribbble.com/kristiankim
	 *  http://www.sketchappsources.com/free-source/1061-startup-icon-set-sketch-freebie-resource.html
	 *
	 *  Ilustración de dispositivos por Min Tran // https://dribbble.com/mintran
	 *  http://www.sketchappsources.com/svg-resource/711-free-vector-macbook-ipad-iphone-svg-freebie.html
	 *
	 ******************************************************************/
	-->
	
</head>

<body>
	
	<section id="main-header" class="container cf">
		
		<a class="logo-header" href="index.html" title="Inicio">
			<span class="logo"><img src="img/logo.png" alt="logo" width="306" height="37"></span>
			<span class="slogan">Diseño y Desarrollo Web</span>
		</a><!-- /#logo-header -->
		
		<span class="menu-trigger"><img src="img/menu-responsive.svg" alt="Abrir menú" /></span>
		
		<nav id="main-menu" role="navigation" class="closed">
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="servicios.html">Servicios</a></li>
				<li><a href="portafolio.html">Portafolio</a></li>
				<li><a href="contacto.html">Contacto</a></li>
			</ul>
		</nav><!-- /#main-menu -->
		
	</section><!-- /#main-header -->
	
	<main id="content-area">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">
					
					<h1>Contacto</h1>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut massa non ipsum<br />
					fermentum rhoncus non vel neque. Phasellus varius feugiat purus vel sodales. </p>
				
				</div>
			</header><!-- /.page-header -->
			
			
			
			<div class="container page-content">
			
				<?php if( $error ) { ?>
				
					<div class="alerta">
						Hubo un error, por favor completa todos los campos.
					</div>
				
					<form action="enviar.php" method="post">
						
						<label for="nombre">Nombre:</label>
						<input type="text" id="nombre" name="nombre" placeholder="¿Cómo te llamas?" value="<?php echo $nombre; ?>" required />
						
						<label for="email">Email:</label>
						<input type="text" id="email" name="email" placeholder="¿A donde debería responderte?" value="<?php echo $email; ?>"  required />
						
						<label for="asunto">Asunto:</label>
						<input type="text" id="asunto" name="asunto" placeholder="¿Sobre qué quieres conversar?" value="<?php echo $asunto; ?>"  required />
						
						<label for="mensaje">Mensaje:</label>
						<textarea id="mensaje" name="mensaje" rows="8" placeholder="Aquí debes explayarte" required ><?php echo $comentario; ?></textarea>
						
						<input type="submit" value="Enviar mensaje" class="btn" />
					
					</form>
				
				<?php } else { ?>
				
					<p>Gracias por contactarte conmigo, responderé lo más pronto que pueda :)</p>
				
				<?php } ?>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</main><!-- /#content-area -->
	
	
	<footer id="main-footer">
		
		<div class="footer-call-to-action">
			
			<p class="container">¿Estás listo para comenzar con tu proyecto de diseño web? <a href="contacto.html" class="btn">Trabajemos juntos</a></p>
			
		</div><!-- /.footer-call-to-action -->
		
		<div id="bottom-footer" class="container cf">
			
			<div class="copyright">
				&copy; 2015 Diseño y desarrollo por <a href="http://franciscoamk.com/newsletter">Francisco Aguilera G.</a>
			</div><!-- /.copyright -->
			
			<nav id="footer-menu">
				<ul>
					<li><a href="index.html">Inicio</a></li>
					<li><a href="servicios.html">Servicios</a></li>
					<li><a href="portafolio.html">Portafolio</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav><!-- /#footer-menu -->
			
		</div><!-- /#bottom-footer -->
		
	</footer><!-- /#main-footer -->


	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/rem.min.js"></script>
	<script src="js/functions.js"></script>
	
</body>
</html>