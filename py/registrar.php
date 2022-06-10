<?php
$usuario = $_GET["usuario"];
$password1 = $_GET["password1"];
$password2 = $_GET["password2"];
$tipo= $_GET["tipo"];

include("conexion.php");    

$conn =  new mysqli($servidor, $user, $password, $bd);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

$sql="INSERT INTO usuarios (nombre, password, tipo) VALUES('$usuario', md5('$password1'), '$tipo')";

//Verificamos que se haya ejecutado la consulta con éxito
if($conn->query($sql)===TRUE){
   header("Location: iniciar.php");
}else{
   echo("Error al crear usuario:".$conn->connect_error); 
}
$conn->close();
?>


<p>Regresar a la página de <a href="index.php"> inicio</a></p>