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
echo "Error de actualizaci�n";
}
else
{
echo "Inhabilitaci�n correcta";
}

header("refresh:3;url=camion.php");
?>