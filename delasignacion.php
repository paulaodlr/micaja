<?php
session_start();
if(!isset($_SESSION['user_sistema']))
	header("Location:index.php");
if(empty($_SESSION['user_sistema']))
	header("Location:index.php");
include "conexion.php";

$ID = $_GET['id'];


$sql= "UPDATE repartidorcamion SET ACTIVO = 0 WHERE ID = '".$ID."'";
if(!($resultado = $conn->query($sql)))
{
echo "Error de actualización";
}
else
{
echo "Inhabilitación correcta";
}

header("refresh:3;url=asignacion.php");
?>