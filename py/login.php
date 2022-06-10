<?php
session_start();
$usuario = $_GET["usuario"];
$passwd = $_GET["password"];

//Aquí estan las variables de conexion
include("conexion.php");    

//Establecer conexion
$conn = new mysqli($servidor, $user, $password, $bd);

if($conn->connect_error){
    die("Error: ". $conn->connect_error);
}

$sql= "SELECT * FROM usuarios WHERE nombre='".$usuario."' and password=md5('".$passwd."')";

$cursor = $conn->query($sql);

$registros = $cursor->num_rows;

$conn->close();

if($registros == 1){
    $_SESSION["usuario"]=$usuario;
    header("Location: iniciar.php");
}else{
    header("Location: index.php?error=usuario y /opassword invalido");
}
?>