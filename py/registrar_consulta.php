<?php
$nombrecon = $_GET["nombrecon"];
$correocon = $_GET["correocon"];
$tipomascotacon = $_GET["tipomascotacon"];
$edadcon = $_GET["edadcon"];
$razoncon = $_GET["razoncon"];
$fechacon = $_GET["fechacon"];

include("conexion.php");    

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$sql="INSERT INTO consultas (nombre,correo,razon,tipomascota,edad,fecha) VALUES('$nombrecon','$correocon','$razoncon','$tipomascotacon','$edadcon','$fechacon')";

//Verificamos que se haya ejecutado la consulta con éxito
if($conn->query($sql)===TRUE){
   header("Location: iniciar.php");
}else{
   echo("Error al crear usuario:".$conn->connect_error); 
}
$conn->close();
?>


<p>Regresar a la página de <a href="index.php"> inicio</a></p>