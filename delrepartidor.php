<?php
session_start();
if(!isset($_SESSION['user_sistema']))
	header("Location:index.php");
if(empty($_SESSION['user_sistema']))
	header("Location:index.php");
include "conexion.php";

$varine = $_GET['id'];


$sql= "UPDATE repartidor SET ACTIVO = 0 WHERE INE = '".$varine."'";
if(!($resultado = $conn->query($sql)))
{
echo "Error de actualización";
}
else
{
echo "Inhabilitación Correcta";
}

header("refresh:3;url=repartidor.php");
?>