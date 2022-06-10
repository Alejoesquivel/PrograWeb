<?php
    session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Panel de Citas/Consultas</title>
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
					$usuario = $_SESSION["usuario"];
				?>
				<li><a href="iniciar.php">Hola <?=$usuario?></a></li>
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
	<div class="panel_usuarios_background">
	<br>
	</div>
	<section class="panel_usuarios_background">
		<div>
			<h1 class="titlePanelControl">Panel de Consultas</h1>
		</div>
	 <?php
        include("conexion.php");
        $conn = new mysqli($servidor, $user, $password, $bd);
        if($conn->connect_error){
            die("Error al conectar a la BD: ".$conn->connect_error);
        }
        $sql = "SELECT * FROM consultas";
		$sql3 = "SELECT * FROM citas";
		$sql2 = "SELECT tipo FROM usuarios where nombre='$usuario'";
        $cursor = $conn->query($sql);
		$cursor2 = $conn->query($sql3);
		$permisos = $conn->query($sql2);
        if($cursor->num_rows == 0){
            ?>
		<div class="panel_usuarios_no">
			<p>No existen usuarios registrados</p>
		</div>  
            <?php
        }else{
			while($dos = $permisos->fetch_assoc()){
				if($dos["tipo"]==1){
				?>
				<div class="panel_usuarios">
					<table class="table table-striped table-sm">
                		<thead>
                    		<tr class="table-primary">
                       			<th scope="col">ID</th>
                        		<th scope="col">Nombre</th>
                        		<th scope="col">Correo</th>
                        		<th scope="col">Razon</th>
								<th scope="col">Tipo</th>
								<th scope="col">Edad</th>
								<th scope="col">Fecha</th>
								<th scope="col">Eliminar</th>
                    		</tr>
                		</thead>
                	<tbody>       
            	<?php
            	while($tupla = $cursor->fetch_assoc() ){
						?>
                	<tr>
                    	<td><?=$tupla["id"];?></td>
                    	<td><?=$tupla["nombre"];?></td>
                    	<td><?=$tupla["correo"];?></td>
                    	<td><?=$tupla["razon"];?></td>
						<td><?=$tupla["tipomascota"];?></td>
						<td><?=$tupla["edad"];?></td>
						<td><?=$tupla["fecha"];?></td>
						<td><a href="eliminar_consultas.php?id=<?php echo $tupla["id"]; ?>">Eliminar</a></td>
                	</tr>
                <?php
            }
            ?>
                </tbody>
            </table>
			<div>
			<h1 class="titlePanelControl2">Panel de Citas de Adopcion</h1>
			</div>
			<table class="table table-striped table-sm">
                		<thead>
                    		<tr class="table-primary">
                       			<th scope="col">ID</th>
                        		<th scope="col">Nombre</th>
                        		<th scope="col">Correo</th>
                        		<th scope="col">Tipo</th>
								<th scope="col">Fecha</th>
								<th scope="col">Eliminar</th>
                    		</tr>
                		</thead>
                	<tbody>       
            	<?php
            	while($tuplas = $cursor2->fetch_assoc() ){
						?>
                	<tr>
                    	<td><?=$tuplas["id"];?></td>
                    	<td><?=$tuplas["nombre"];?></td>
                    	<td><?=$tuplas["correo"];?></td>
						<td><?=$tuplas["tipomascota"];?></td>
						<td><?=$tuplas["fecha"];?></td>
						<td><a href="eliminar_citas.php?id=<?php echo $tuplas["id"]; ?>">Eliminar</a></td>
                	</tr>
                <?php
            }
            ?>
                </tbody>
            </table>
			<div class="text-center">
            <button type="button" class="btn btn-outline-success btn-sm"><a href="iniciar.php"><i class="fa-solid fa-table-columns"></i> Volver al panel de control</a></button>
            </div>
		</div> 
				<?php		
				} else if ($dos["tipo"]==2) { ?>
			<div class="panel_usuarios">
					<table class="table table-striped table-sm">
                		<thead>
                    		<tr class="table-primary">
                       			<th scope="col">ID</th>
                        		<th scope="col">Nombre</th>
                        		<th scope="col">Correo</th>
                        		<th scope="col">Razon</th>
								<th scope="col">Tipo</th>
								<th scope="col">Edad</th>
								<th scope="col">Fecha</th>
								<th scope="col">Eliminar</th>	
                    		</tr>
                		</thead>
                	<tbody>       
            	<?php
            	while($tupla = $cursor->fetch_assoc() ){
						?>
                	<tr>
                    	<td><?=$tupla["id"];?></td>
                    	<td><?=$tupla["nombre"];?></td>
                    	<td><?=$tupla["correo"];?></td>
                    	<td><?=$tupla["razon"];?></td>
						<td><?=$tupla["tipomascota"];?></td>
						<td><?=$tupla["edad"];?></td>
						<td><?=$tupla["fecha"];?></td>
						<td><a href="eliminar_consultas.php?id=<?php echo $tupla["id"]; ?>">Eliminar</a></td>
                	</tr>
                <?php
            }
            ?>
                </tbody>
            </table>
			<div>
			<h1 class="titlePanelControl2">Panel de Citas de Adopcion</h1>
			</div>
			<table class="table table-striped table-sm">
                		<thead>
                    		<tr class="table-primary">
                       			<th scope="col">ID</th>
                        		<th scope="col">Nombre</th>
                        		<th scope="col">Correo</th>
                        		<th scope="col">Tipo</th>
								<th scope="col">Fecha</th>
								<th scope="col">Eliminar</th>
                    		</tr>
                		</thead>
                	<tbody>       
            	<?php
            	while($tuplas = $cursor2->fetch_assoc() ){
						?>
                	<tr>
                    	<td><?=$tuplas["id"];?></td>
                    	<td><?=$tuplas["nombre"];?></td>
                    	<td><?=$tuplas["correo"];?></td>
						<td><?=$tuplas["tipomascota"];?></td>
						<td><?=$tuplas["fecha"];?></td>
						<td><a href="eliminar_citas.php?id=<?php echo $tuplas["id"]; ?>">Eliminar</a></td>
                	</tr>
                <?php
            }
            ?>
                </tbody>
				</table>
			<div class="text-center">
            <button type="button" class="btn btn-outline-success btn-sm"><a href="iniciar.php"><i class="fa-solid fa-table-columns"></i> Volver al panel de control</a></button>
			</button>
            </div>
		</div>	
		<?php		
				} else { ?>
					<div class="panel_usuarios">
					<table class="table table-striped table-sm">
                		<thead>
                    		<tr class="table-primary">
                       			<th scope="col">ID</th>
                        		<th scope="col">Nombre</th>
                        		<th scope="col">Correo</th>
                        		<th scope="col">Razon</th>
								<th scope="col">Tipo</th>
								<th scope="col">Edad</th>
								<th scope="col">Fecha</th>			
                    		</tr>
                		</thead>
                	<tbody>       
            	<?php
            	while($tupla = $cursor->fetch_assoc() ){
						?>
                	<tr>
                    	<td><?=$tupla["id"];?></td>
                    	<td><?=$tupla["nombre"];?></td>
                    	<td><?=$tupla["correo"];?></td>
                    	<td><?=$tupla["razon"];?></td>
						<td><?=$tupla["tipomascota"];?></td>
						<td><?=$tupla["edad"];?></td>
						<td><?=$tupla["fecha"];?></td>
                	</tr>
                <?php
            }
            ?>
                </tbody>
            </table>
			<div>
			<h1 class="titlePanelControl2">Panel de Citas de Adopcion</h1>
			</div>
			<table class="table table-striped table-sm">
                		<thead>
                    		<tr class="table-primary">
                       			<th scope="col">ID</th>
                        		<th scope="col">Nombre</th>
                        		<th scope="col">Correo</th>
                        		<th scope="col">Tipo</th>
								<th scope="col">Fecha</th>
                    		</tr>
                		</thead>
                	<tbody>       
            	<?php
            	while($tuplas = $cursor2->fetch_assoc() ){
						?>
                	<tr>
                    	<td><?=$tuplas["id"];?></td>
                    	<td><?=$tuplas["nombre"];?></td>
                    	<td><?=$tuplas["correo"];?></td>
						<td><?=$tuplas["tipomascota"];?></td>
						<td><?=$tuplas["fecha"];?></td>
                	</tr>
                <?php
            }
            ?>
                </tbody>
						</table>
			<div class="text-center">
            <button type="button" class="btn btn-outline-success btn-sm"><a href="iniciar.php"><i class="fa-solid fa-table-columns"></i> Volver al panel de control</a></button>
            </div>
		</div>
		<?php
				}
			}
            ?>
		
            <?php
        }
        $conn->close();
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
	</footer>>	
	<script src="https://kit.fontawesome.com/02d559a120.js" crossorigin="anonymous"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/menu_script.js" type="text/javascript"></script>
</body>
</html>
