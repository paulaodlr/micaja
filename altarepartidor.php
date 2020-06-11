<?php
session_start();
if(!isset($_SESSION['user_sistema']))
	header("Location:index.php");
if(empty($_SESSION['user_sistema']))
	header("Location:index.php");
include "conexion.php";

$ine = $_POST['ine'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$telefono = $_POST['telefono'];
$salario = $_POST['salario'];
$direccion = $_POST['direccion'];



$sql= "INSERT INTO repartidor(INE, NOMBRE, ESTADO, TELEFONO, SALARIO, DIRECCION)
VALUES('".$ine."','".$nombre."','".$estado."','".$telefono."','".$salario."','".$direccion."')";
if(!($resultado = $conn->query($sql)))
{
echo "Error al agregar la información";
}
else
{
echo "Alta de nuevo repartidor correcta";
}

header("refresh:3;url=repartidor.php");
?>