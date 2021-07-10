
<?php 
session_start();  //inicializa la sesion 
session_unset();//eliminar todos los datos de las variables de sesion 
session_destroy(); //destruye toda la sesion 
header('Location:login.php'); 
?> 

