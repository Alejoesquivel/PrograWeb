<?php
    session_start();
	$id =session_id();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Veterinaria</title>
<link rel="stylesheet" href="css/menu_style.css">
<link rel="stylesheet" href="css/style.css">
<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<header id="header">
		<img src="img/vetco.png">
	</header>
	<nav class="navegacion">
		<div class="navegacion-container">
			<div class="logo">
				<img src="img/Adopt_Me.jpg" alt="Aquí hay una imagen">
			</div>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="citas.php">Agendar Cita</a></li>
				<li><a href="acerca.php">Acerca De Nosotros</a></li>
				<?php
            	if(isset($_SESSION["usuario"])){
				?>
				<li><a href="iniciar.php">Hola <?=$_SESSION["usuario"] ?></a></li>
				<?php
            	}else{
        		?>  
				<li><a href="iniciar.php">Iniciar Sesion</a></li>
				<?php
            	}
        		?>
			</ul>
		</div>
	</nav>
	
	<section>
	<div class="slider">
		<ul>
		<li><img src="img/vetco1.jpg" alt=""></li>
		<li><img src="img/adopta.jpg" alt=""></li>
		<li><img src="img/slider3.jpeg" alt=""></li>
		<li><img src="img/background2.jpg" alt=""></li>
		</ul>	
	</div>
	<div class="principal">
		<div class="informacion">
			<center><h1>Consejos para tus mascotas</h1></center>
				<p>Ansiedad por separación</p>
				<a>Queremos contarte algunos consejos para evitar la ansiedad por separación:</a>
				<br>
				<a>No le digas adiós</a>
				<br>
				<a>Varía tu rutina</a>
				<br>
				<a>Habla con su veterinario</a>
				<br>
				<a>Haz ejercicio con tu mascota</a>
			    <br>
				<a>Es muy importante conocer estos sencillos tips para cuando salgas, dejar más tranquilo a tu pequeño.</a>
				<br>
				<center><img src="img/paseando.png" alt=""></center>
		</div>	
	</div>
	</section>
	<footer>
		<br>
		<div class="piepagina">
			<div class="container">
  				<div class="row">
    				<div class="col-sm centrar">
     					Contactanos a los siguientes numeros:
						<br>
						<a>+52 7151310379</a>
						<br>
						<a>+52 4591140104</a>
						<br>
						<a>+52 4435888469</a>
    				</div>
    				<div class="col-sm centrar columna_izquierda">
      					Numeros/Páginas/Instituciones para denunciar maltrato animal
						<a>Ciudad de México: al 911, al 55 5658 1111 (LOCATEL)</a>
						<br>
						<a>Michoacán: Comisión Estatal de Protección a los Animales</a>
						<br>
						<a>Sonora: ante la Fiscalía General de Justicia</a>
    				</div>
  				</div>
		</div>
		</div>
	</footer>	
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/menu_script.js" type="text/javascript"></script>
	<script src="js/funciones.js"></script>
</body>
</html>
