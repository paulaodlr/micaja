<?php
session_start();
if(!isset($_SESSION['user_sistema']))
	header("Location:index.php");
if(empty($_SESSION['user_sistema']))
	header("Location:index.php");
include "conexion.php";

$varmatricula = $_GET['id'];


$sql= "UPDATE camion SET ACTIVO = 0 WHERE MATRICULA = '".$varmatricula."'";
if(!($resultado = $conn->query($sql)))
{
echo "Error de actualización";
}
else
{
echo "Inhabilitación correcta";
}

header("refresh:3;url=camion.php");
?>