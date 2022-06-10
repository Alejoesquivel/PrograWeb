<?php
//Variables de conexion de base de datos
include("conexion.php");    

$conn =  new mysqli($servidor, $user, $password, $bd);
$id = $_GET["id"];
$sql = "DELETE FROM citas WHERE id='$id'";
if($conn->query($sql)===TRUE){
   header("Location: panel_citas.php");
}else{
   echo("Error al eliminar el usuario:".$conn->connect_error); 
}
$conn->close();
?>
