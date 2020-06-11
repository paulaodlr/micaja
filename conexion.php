<?php       
$server 	= "localhost";    
$user   	= "user_ventas";    
$pass   	= "userventas00";    
$database 	= "ventas";  

$conn = new mysqli($server, $user, $pass, $database);    

if ($conn->connect_error) {  
  
die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);  
}    
?>
