<?php
    session_start();
	$id =session_id();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
if(isset($_SESSION["usuario"])){
?>
	<title>Panel de Control</title>
<?php
}else{
?>  
		<title>Iniciar sesion</title>
<?php
}
?>
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
	<?php
		if(isset($_SESSION["usuario"])){
	?>
		<section class="tienda">
	<?php
		}else{
	?>  
		<section>
	<?php
		}
	?>
		<?php
            	if(isset($_SESSION["usuario"])){
				?>
				<div>
					<h1 class="titlePanelControl">Panel de control</h1>
				</div>
		        <div class="dashboard">
					<a href="panel_usuarios.php">
						<i class="fa-solid fa-users-between-lines"></i>
						<p>
							<strong>Panel de usuarios</strong><br>
						</p>
					</a>
					<a href="panel_citas.php">
						<i class="fas fa-users"></i>
						<p>
							<strong>Panel de Citas/Consultas</strong><br>
						</p>
					</a>
					<a href="cerrar.php">
						<i class="fa-solid fa-person-walking-arrow-right"></i>
						<p>
							<strong>Cerrar sesión</strong><br>
						</p>
					</a>	
				</div>
				<?php
            	}else{
        		?>  
				<div class="contenedor_login">
				<center><h1 style="font-size: 25pt !important;">Iniciar Sesión</h1></center>
    				<form action="login.php" class="form-signin" method="get">
						<label for="usuario">Usuario:</label>
						<input type="text" id="usuario" name="usuario" required>
						<br>
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" required>
						<br>
						<button type="submit" class="w-100 btn btn-lg btn-dark">Entrar</button>
        				<br>
    				</form>   
				</div>
				<?php
            	}
        		?>
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
	<script src="https://kit.fontawesome.com/02d559a120.js" crossorigin="anonymous"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/menu_script.js" type="text/javascript"></script>
</body>
</html>