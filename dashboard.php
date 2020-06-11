<?php
session_start();
if(!isset($_SESSION['user_sistema']))
	header("Location:index.php");
if(empty($_SESSION['user_sistema']))
	header("Location:index.php");


?>
<html>
<body>
<head>
</head>
<body>
<center>
<h1>¡ Bienvenido al sistema<?php echo " ".$_SESSION['user_sistema'] ?> !</h1>
<br />
<br />
<a href="camion.php">Administración de Camiones</a>
<br>
<a href="repartidor.php">Administración de Repartidores</a>
<br>
<a href="asignacion.php">Asignación de camiones y repartidores</a>
<br />
<br />
<a href="finaliza.php">Salir </a>
</center>
</body>
</html>