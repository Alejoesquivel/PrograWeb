<?php
//Obtener datos
$id = $_GET["id"];
$nombre = $_GET["nombre"];
$password = $_GET["password"];
$pass_Fuerte = md5($password);
$passwordconfirm = $_GET["passwordconfirm"];
$tipo= $_GET["tipo"];
//Variables de conexion de base de datos
include("conexion.php");    

$conn =  new mysqli($servidor, $user, $password, $bd);

$sql = "UPDATE usuarios SET nombre='$nombre', password='$pass_Fuerte', tipo='$tipo' WHERE id='$id'";
if($conn->query($sql)===TRUE){
   header("Location: panel_usuarios.php");
}else{
   echo("Error al crear usuario:".$conn->connect_error); 
}
$conn->close();
?>
