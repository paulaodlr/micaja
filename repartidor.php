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
<form action= "altarepartidor.php" method="POST">
<table>
<tr>
<th colspan="2">DATOS DE ALTA DE NUEVOS REPARTIDORES</th>
</tr>
<tr>
<th>INE:</th><th><input type="text" name="ine" placeHolder="INE" required></th>
</tr>
<tr>
<th>Nombre:</th><th><input type="text" name="nombre" placeHolder="Nombre" required></th>
<tr>
<th>Estado:</th><th><input type="text" name="estado" placeHolder="Estado" required></th>
</tr>
<tr>
<th>Telefono:</th><th><input type="text" name="telefono" placeHolder="Telefono" required></th>
</tr>
<tr>
<th>Salario:</th><th><input type="text" name="salario" placeHolder="Salario" required></th>
</tr>
<tr>
<th>Direccion:</th><th><input type="text" name="direccion" placeHolder="Direccion" required></th>
</tr>
<tr>
<th colspan="2"><button type="submit">Alta de Repartidor</button></th>
</tr>
<tr>
</table>
</form>

<br />
<br />
<center>
<table border>
<tr>
  <th><strong>INE</strong></th>
  <th><strong>NOMBRE</strong></th>
  <th><strong>ESTADO</strong></th>
  <th><strong>TELEFONO</strong></th>
  <th><strong>SALARIO</strong></th>
  <th><strong>DIRECCION</strong></th>
  <th><strong>ACTIVO</strong></th>
<th></th>
 </tr>
<?php
$sql = "SELECT INE, NOMBRE, ESTADO, TELEFONO, SALARIO, DIRECCION, ACTIVO FROM repartidor";

if(!($resultado = $conn->query($sql)))
{
echo "<tr><th>NO HAY DATOS A MOSTRAR</th></tr>";

exit;
}
while($datos = $resultado->fetch_assoc())
{
echo "<tr>";
echo "<th>".$datos['INE']."</th>";
echo "<th>".$datos['NOMBRE']."</th>";
echo "<th>".$datos['ESTADO']."</th>";
echo "<th>".$datos['TELEFONO']."</th>";
echo "<th>".$datos['SALARIO']."</th>";
echo "<th>".$datos['DIRECCION']."</th>";
echo "<th>".$datos['ACTIVO']."</th>";	
echo "<th><a href='delrepartidor.php?id=".$datos['INE']."'>Inhabilitar</a></th>";
echo "<th><a href='delrepartidor2.php?id=".$datos['INE']."'>Borrar</a></th>";
echo "</tr>";
}
?>
</table>
</center>
</body>
</html>