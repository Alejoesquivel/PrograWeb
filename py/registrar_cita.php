<?php
$nombreadop = $_GET["nombreadop"];
$correoadop= $_GET["correoadop"];
$tipomascotaadop = $_GET["tipomascotaadop"];
$fechaadop = $_GET["fechaadop"];

include("conexion.php");    

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$sql="INSERT INTO citas(nombre, correo, tipomascota, fecha) VALUES('$nombreadop','$correoadop','$tipomascotaadop','2000-10-26')";

//Verificamos que se haya ejecutado la consulta con éxito
if($conn->query($sql)===TRUE){
   header("Location: citas.php");
}else{
   echo("Error al crear usuario:".$conn->connect_error); 
}
$conn->close();
?>


<p>Regresar a la página de <a href="index.php"> inicio</a></p>