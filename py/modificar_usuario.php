<?php
    session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar Usuario</title>
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
	<div class="tienda">
	<br>
	</div>
	<section class="tienda">
		<?php
		include("conexion.php");
		$conn = new mysqli($servidor, $user, $password, $bd);
        if($conn->connect_error){
            die("Error al conectar a la BD: ".$conn->connect_error);
        }
		$id = $_GET["id"];
        $sql = "SELECT * FROM usuarios WHERE id='$id'";
        $cursor = $conn->query($sql);
		$segunda = $conn->query($sql);
		?>
		<div class="container">
          <div class="row">
            <div class="col-sm-6 text-center">
              <div class="box tamano">
                <h2 class="text-uppercase">Datos del Administrador</h2>
				<?php while($user = mysqli_fetch_array($cursor)){ ?>
					<hr>
				  	<p>Nombre</p>
				  	<p class="text-muted"><?php echo $user['nombre']; ?></p>
				  	<p>Contraseña</p>
				  	<p class="text-muted">**************</p>
				  	<p>Tipo</p>
				  	<p class="text-muted"><?php echo $user['tipo']; ?></p>
                    </tr>
				<?php } ?>		
              </div>
            </div>
            <div class="col-sm-6">
              <div class="box tamano">
                <h2 class="text-uppercase">Datos a Modificar</h2>
                <hr>
                 <form action="modifica_datos.php" id="formulario" class="formulario" method="get">
				<?php while($user = mysqli_fetch_array($segunda)){ ?>
				  	<input id="id" name="id" type="hidden" value="<?php echo $user['id']; ?>">
				<?php } ?>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Ingrese la contraseña">
                  </div>
					<div class="form-group">
                    <label for="passwordconfirm">Confirmar Contraseña</label>
                    <input id="passwordconfirm" name="passwordconfirm" type="password" class="form-control" placeholder="Confirme la contraseña">
                  </div>
					 <div class="form-group">
					 <label for="tipo">Seleccione el tipo que tendrá el usuario</label>
						<select id="tipo" name="tipo" class="form-select form-select-sm">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						</select>
					 </div>
					<br>
					<span id="passwordOK"></span>
					<br>
					 <span id="error2" style="color: red;"></span>
					 <br>
					<span id="error" style="color: red;"></span>
                  	<div class="text-center">
                    <button type="button" id="modificar" class="btn btn-outline-success btn-lg"><i class="fa-solid fa-address-card"></i> Modificar</button>
                  	</div>
                </form>
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
	<script src="https://kit.fontawesome.com/02d559a120.js" crossorigin="anonymous"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/menu_script.js" type="text/javascript"></script>
	<script src="js/funciones.js" type="text/javascript"></script>
	<script src="js/modificar.js" type="text/javascript"></script>
</body>
</html>
