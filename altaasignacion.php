<?php
session_start();
if(!isset($_SESSION['user_sistema']))
	header("Location:index.php");
if(empty($_SESSION['user_sistema']))
	header("Location:index.php");
include "conexion.php";

$ID = $_POST['ID'];
$nombrerep = $_POST['nombrerep'];
$inerep = $_POST['inerep'];
$matriculacam = $_POST['matriculacam'];
$fecha = $_POST['fecha'];
$activo =$_POST['activo'];


$sql= "INSERT INTO repartidorcamion(ID, NOMBREREP, INEREP, MATRICULACAM,FECHA,ACTIVO)
VALUES('".$ID."','".$nombrerep."','".$inerep."''".$matriculacam."','".$fecha."','".$activo."')";
if(!($resultado = $conn->query($sql)))
{
echo "Error al agregar la información";
}
else
{
echo "Alta de nueva asignacion correcta";
}

header("refresh:3;url=asignacion.php");
?>
