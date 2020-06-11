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
<form action= "altaasignacion.php" method="POST">
<table>
<tr>
<th colspan="2">DATOS DE ASIGNACION DE CAMION Y REPARTIDOR</th>
</tr>
<tr>
<th>ID:</th><th><input type="text" name="ID" placeHolder="ID" required></th>
</tr>
<tr>
<th>Nombre Repartidor:</th><th><input type="text" name="nombre" placeHolder="Nombre" required></th>
<tr>
<th>INE Repartidor:</th><th><input type="text" name="ine" placeHolder="INE" required></th>
</tr>
<tr>
<th>Matricula Camion:</th><th><input type="text" name="matricula" placeHolder="Matricula" required></th>
</tr>
<tr>
<th>Fecha:</th><th><input type="text" name="fecha" placeHolder="Fecha" required></th>
</tr>
<tr>
<th colspan="2"><button type="submit">Alta de Asignacion</button></th>
</tr>
<tr>
</table>
</form>

<br />
<br />
<center>
<table border>
<tr>
  <th><strong>ID</strong></th>
  <th><strong>NOMBRE REPARTIDOR</strong></th>
  <th><strong>INE REPARTIDOR</strong></th>
  <th><strong>MATRICULA CAMION</strong></th>
  <th><strong>FECHA</strong></th>
  <th><strong>ACTIVO</strong></th>
<th></th>
 </tr>
<?php
$sql = "SELECT ID, NOMBREREP, INEREP, MATRICULACAM, FECHA, ACTIVO FROM repartidorcamion";

if(!($resultado = $conn->query($sql)))
{
echo "<tr><th>NO HAY DATOS A MOSTRAR</th></tr>";

exit;
}
while($datos = $resultado->fetch_assoc())
{
echo "<tr>";
echo "<th>".$datos['ID']."</th>";
echo "<th>".$datos['NOMBREREP']."</th>";
echo "<th>".$datos['INEREP']."</th>";
echo "<th>".$datos['MATRICULACAM']."</th>";
echo "<th>".$datos['FECHA']."</th>";
echo "<th>".$datos['ACTIVO']."</th>";	
echo "<th><a href='delasignacion.php?id=".$datos['ID']."'>Inhabilitar</a></th>";
echo "<th><a href='delasignacion2.php?id=".$datos['ID']."'>Borrar</a></th>";
echo "</tr>";
}
?>
</table>
</center>
</body>
</html>