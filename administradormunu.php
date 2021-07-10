<?php
session_start();
if (isset($_SESSION['usuarioa']) && $_SESSION['usuarioa'] == true) {

} else {
   //echo "Esta pagina es solo para usuarios registrados.<br>";
   //echo "<br><a href='login.php'>Login</a>";
	echo '<script>
	alert("Esta pagina solo para Administradores"); windows.histrory.go(-1);
	</script> ';
	echo "<script>location.href='login.php'</script>";
   
exit;
}
$now = time();

if($now > $_SESSION['expire']) 
{
session_destroy();

//echo "Sesión caducado,
//<a href='login.php'>Necesita Hacer Login</a>";
echo '<script>
	alert("Su sesión ha terminado!!!!"); windows.histrory.go(-1);
	</script> ';
	echo "<script>location.href='login.php'</script>";
exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Administrador</title>
 <link rel="stylesheet" type="text/css" href="css/estilos.css">

 <link rel="shortcut icon" type="image/x-icon" href="imagenes/icon.png">

 
 </head>

 <body>
  <?php
require("conexion.php");
 ?>
  <div><center>
<table cellspacing="0" cellpadding="0" border="0"  id="shell" height="550" width="600">
  <tr height="50">
    <td colspan="2"> 
    
      <table title="Banner" id="banner" border="0"> 
        
          <td> <TD STYLE="WIDTH:50PX"><img src="imagenes/imagen6.jpg" wiDth="250" height="170"></TD>
<TD STYLE="WIDTH: 50PX"><img src="imagenes/logo.jpg" wiDth="700" height="160"></TD>
<TD STYLE="WIDTH:50PX"><img src="imagenes/logo.png" wiDTH="200" height="160"></TD>
</TR>


 </td>
        </tr> 
</table>
</div>
</center>


  <center>
 <table>
  
  
  <th>
    </th><td><strong><font size="6">Administrador</font></strong> <br>
    </td>
  
  </tr>
  <tr>
</table>
</center>


<center>

<div>
<nav>
  <ul class="menu">
    
    <li><a href=logout.php><b>Cerrar sesión</b></a></li>
    <li><a href="alumnos.php"><b>Administrar alumnos</b></a></li>
	   <li><a href="profesores.php"><b>Administrar profesores</b></a></li>
    <li><a href="administrarinformacion.php"><b>Administrar Información </b></a></li>
	   <li><a href="quienessomos.php"><b>¿Quienes somos?</b></a></li>
	


</ul>
</nav>
</div>

<img src="imagenes/kd.png">
</center>






  <footer>
    <table>
      <tbody><tr><th bgcolor="#98FB98" width="10000000">
    <font color="white">
    <center>



      <font>© 2018 Todos los derechos reservados, Sistema Control Escolar, S.A. de C.V.
        <br>
        <a href="politicas.php">Políticas de privacidad</a>|<a href="terminos.php">Términos y Condiciones</a>
      </center>
    </font>
  </th>
  </tr></tbody></table>
  </footer>




    </body>
</html>