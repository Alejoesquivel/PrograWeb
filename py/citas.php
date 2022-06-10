<?php
    session_start();
	$id =session_id();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Agendar tu cita</title>
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
		<div class="contenedor">
			<div class="container">
  				<div class="row">
   					<div class="col-sm">
      					<img src="img/Formulario.jpg">
    				</div>
    				<div class="col-sm">
     					 <div class="formulario">
							<label for="opciones">Selecciona lo que deseas hacer</label>
							<br>
							<input type="radio" id="adoptar" name="opciones" value="adoptar">
							<label for="adoptar">Adoptar una Mascota</label>
							<br>
							<input type="radio" id="consulta" name="opciones" value="consulta">
							<label for="consulta">Agendar una consulta para mi Mascota</label>
								<form name="form_adopcion" class="formulario_escondido" id="form_adopcion" method="get" action="registrar_cita.php">
								<label for="nombre">¿Cual es tu nombre?</label>
								<br>
								<input type="text" id="nombreadop" name="nombreadop" placeholder="Nombre" class="field" required>
								<label for="correo">¿Cual es tu correo electronico?</label>
								<br>
								<input type="text" id="correoadop" name="correoadop" placeholder="Correo electronico" class="field" required>
								<br>
								<label for="tipo">¿Que tipo de mascota te gustaría adoptar?</label>
								<br>
								<input type="text" id="tipomascotaadop" name="tipomascotaadop" placeholder="Tipo de mascota" class="field" required>
								<label for="fecha">Selecciona una fecha para ir a la sucursal:</label>
								<input type="date" id="fechaadop" name="fechaadop" required>
								<span id="error" style="color: red;"></span>
								<div class="text-center">
            					<button type="button" class="btn btn-outline-success btn-sm" id="citar1"><i class="fa-solid fa-calendar"></i> Hacer cita</a></button>
            					</div>
								</form>
								<form action="registrar_consulta.php" name="form_consulta" class="formulario_escondido" id="form_consulta" method="get">
								<label for="nombre">¿Cual es tu nombre?</label>
								<br>
								<input type="text" id="nombrecon" name="nombrecon" placeholder="Nombre Completo" class="field" required>
								<br>
								<label for="correo">¿Cual es tu correo electronico?</label>
								<br>
								<input type="text" id="correocon" name="correocon" placeholder="Correo Electronico" class="field" required>
								<label for="razon">¿Cual es la razón de la cita?</label>
								<br>
								<input type="text" id="razoncon" name="razoncon" placeholder="Razón" class="field" required>
								<br>
								<label for="tipomascota">¿Que es tu mascota? (Perro, Gato, Etc)</label>
								<br>
								<input type="text" id="tipomascotacon" name="tipomascotacon" placeholder="Mascota" class="field" required>
								<br>
								<label for="edad">¿Cual es su edad?</label>
								<br>
								<input type="number" id="edadcon" name="edadcon" placeholder="Edad" class="field" required>
								<label for="fecha">Selecciona una fecha para ir a la sucursal:</label>
								<input type="date" id="fechacon" name="fechacon" required>
								<br>
								<span id="error2" style="color: red;"></span>
								<div class="text-center">
            					<button type="button" class="btn btn-outline-success btn-sm" id="citar2"><i class="fa-solid fa-calendar"></i> Hacer cita</a></button>
            					</div>
								</form>
						</div>
    				</div>
  				</div>
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
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/funciones.js"></script>
	<script src="https://kit.fontawesome.com/02d559a120.js" crossorigin="anonymous"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/menu_script.js" type="text/javascript"></script>
	
</body>
</html>
