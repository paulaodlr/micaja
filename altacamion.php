<?php
session_start();
if(!isset($_SESSION['user_sistema']))
	header("Location:index.php");
if(empty($_SESSION['user_sistema']))
	header("Location:index.php");
include "conexion.php";

$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$rodada = $_POST['rodada'];




$sql= "INSERT INTO camion(MATRICULA, MODELO, TIPO, RODADA)
VALUES('".$matricula."','".$modelo."','".$tipo."','".$rodada."')";
if(!($resultado = $conn->query($sql)))
{
echo "Error al agregar la informaci�n";
}
else
{
echo "Alta de nuevo cami�n correcta";
}

header("refresh:3;url=camion.php");
?>
