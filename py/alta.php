<?php
    session_start();
	$id =session_id();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alta Usuarios</title>
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
		<div class="contenedor_login">
				<center><h1 style="font-size: 25pt !important;">Dar de alta usuario</h1></center>
    				<form action="registrar.php" class="form-signin" id="formulario" method="get">
						<label for="usuario">Usuario:</label>
						<input type="text" id="usuario" name="usuario" required>
						<br>
						<label for="c1">Contraseña:</label>
						<input type="password" id="password1" name="password1" required>
						<br>
						<label for="c2">Verificar Contraseña:</label>
						<input type="password" id="password2" name="password2" required>						
						<br>
						<div class="form-group">
					 	<label for="tipo">Seleccione el tipo que tendrá el usuario</label>
						<select id="tipo" name="tipo" class="form-select form-select-sm">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						</select>
						<br>
					 	</div>
						<span id="error" style="color: red;"></span>
						<div class="col text-center">
    					<button type="button" id="registrar" class="btn btn-outline-success btn-sm">Registrar</button>
    					</div>
    				</form>   
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
