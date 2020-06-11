<?php

session_start();
include "conexion.php";

if(isset($_POST['usuario']) && isset($_POST['pass']))

{

$usuario = $_POST['usuario'];

$cont	= $_POST['pass'];


	
$sql = "SELECT NOMBRE, PATERNO, MATERNO, NICKNAME, ACTIVO FROM usuario WHERE NICKNAME = '".$usuario."' AND PASS = '".$cont."'";


if(!($resultado = $conn->query($sql)))
{
echo "Error en el usuario o contraseña de:<strong>".$usuario."</strong><br/>";

}
else
{
	if($inicio = $resultado->fetch_assoc())
	{

		$_SESSION['user_sistema'] = $inicio['NOMBRE']." ".$inicio['PATERNO']." ".$inicio['MATERNO'];
		echo "Bienvenido".$_SESSION['user_sistema']."!";
		header("refresh:3;url=dashboard.php");

	}
	else 
	{
		echo "Error en el usuario o contraseña de:<strong>".$usuario."</strong><br/>";

		header("refresh:3;url=index.php");
	}
}
}
?>