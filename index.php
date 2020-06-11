<?php
	
include "conexion.php";

?>

<html>
	
<head>
	
<center>
 <img src="logocaja.png" width="380" height="280">
<br>
</center>
</head>

<body>
<center>
<img src="cajas.png" width="1200" height="420">
<form action="revisa.php"method="POST">


<strong><font face="Arial" font size=4>Usuario:</strong><input type="text" name="usuario" placeHolder="Introducir Usuario" required>
</font>
<br/>

<strong><font face="Arial" font size=4>Contraseña:</strong><input type="password" name="pass" placeHolder="Introducir Contraseña" required>

</font><br/>

<br>
<button type="submit"><font face="Arial" font size=4>Iniciar Sesion</button>
</font>
</center>
</form>

</body>

</html>

