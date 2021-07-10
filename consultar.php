<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   //echo "Esta pagina es solo para usuarios registrados.<br>";
   //echo "<br><a href='login.php'>Login</a>";
  echo '<script>
  alert("Esta pagina solo para usuarios registrados"); windows.histrory.go(-1);
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
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Consultar Calificaciones</title>
 <link rel="stylesheet" type="text/css" href="css/estilos.css">
 <link rel="shortcut icon" type="image/x-icon" href="imagenes/icon.png">
 
 </head>
 <body>

  <div><center>
<table cellspacing="0" cellpadding="0" border="0"  id="shell" height="550" width="600">
  <tr height="50">
    <td colspan="2"> 
    
      <table title="Banner" id="banner" border="0"> 
        <tr>
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
    </th><td><strong><font size="6">Consulta De Calificaciones</font></strong> <br>
    </td>
  
  </tr>
  <tr>
</table>
</center>


<center>
<nav>
  <ul class="menu">
    
    <li><a href="login.php"><b>Cerrar Sesión</b></a></li>
    <li><a href="datos del alumno.php"><b>Datos Del Usuario</b></a></li>
    <li><a href="Consultar.php"><b>Consultar Calificaciones</b></a></li>
    
    <li><a href="#"><b>Cambio De Contraseña</b></a></li>
    <li><a href="quienessomosa.php"><b>¿Quienes somos?</b></a></li>
  </ul>
</nav>
</center>
<center>
<div>
<form  name="formdatos" >
<br>
<br>
<br>
	
<label>Nombre</label> 
<input type="text"  name="nombre" > 
<br>
<br>
<label>Matricula</label> 
<input type="text" name="matricula" > 
<br>
<br>



</form>
</div>
</center>

<CENTER>
<div>
	
	<img src="imagenes/consulta.jpg">

</div>
</CENTER>

<footer>
    <table>
      <tbody><tr><th bgcolor="#98FB98" width="10000000">
    <font color="white">
    <strong>Ubicacioón: </strong><br>
    <strong>Telefono: </strong><br>
    <strong>Correo</strong><br>
    <strong>Facebook</strong>
    </font>
  </th>
  </tr></tbody></table>
  </footer>
			
	</body>
</html>