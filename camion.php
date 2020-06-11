<?php
session_start();
if(!isset($_SESSION['user_sistema']))
	header("Location:index.php");
if(empty($_SESSION['user_sistema']))
	header("Location:index.php");
include "conexion.php";


?>
<html>
<body>
<head>
</head>
<body>
<h3>¡ Bienvenido al sistema<?php echo " ".$_SESSION['user_sistema'] ?> !</h1>
<a href="finaliza.php">Salir</a>
<br />
<br />
<center>
<form action= "altacamion.php" method="POST">
<table>
<tr>
<th colspan="2">DATOS DE CAMION</th>
</tr>
<tr>
<th>Matricula:</th><th><input type="text" name="matricula" placeHolder="Matricula" required></th>
</tr>
<tr>
<th>Modelo:</th><th><input type="text" name="modelo" placeHolder="Modelo" required></th>
<tr>
<th>Tipo:</th><th><input type="text" name="tipo" placeHolder="Tipo" required></th>
</tr>
<tr>
<th>Rodada:</th><th><input type="text" name="rodada" placeHolder="Rodada" required></th>
</tr>
<tr>
<th colspan="2"><button type="submit">Alta de Camion</button></th>
</tr>
<tr>
</table>
</form>

<br />
<br />
<center>
<table border>
<tr>
  <th><strong>MATRICULA</strong></th>
  <th><strong>MODELO</strong></th>
  <th><strong>TIPO</strong></th>
  <th><strong>RODADA</strong></th>
  <th><strong>ACTIVO</strong></th>
<th></th>
 </tr>
<?php
$sql = "SELECT MATRICULA, MODELO, TIPO, RODADA, ACTIVO FROM camion";

if(!($resultado = $conn->query($sql)))
{
echo "<tr><th>NO HAY DATOS A MOSTRAR</th></tr>";

exit;
}
while($datos = $resultado->fetch_assoc())
{
echo "<tr>";
echo "<th>".$datos['MATRICULA']."</th>";
echo "<th>".$datos['MODELO']."</th>";
echo "<th>".$datos['TIPO']."</th>";
echo "<th>".$datos['RODADA']."</th>";
echo "<th>".$datos['ACTIVO']."</th>";	
echo "<th><a href='delcamion.php?id=".$datos['MATRICULA']."'>Inhabilitar</a></th>";
echo "<th><a href='delcamion2.php?id=".$datos['MATRICULA']."'>Borrar</a></th>";
echo "</tr>";
}
?>
</table>
</center>
</body>
</html>