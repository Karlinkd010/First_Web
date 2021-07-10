<?php
  header('Content-Type:text/html; charset=UTF-8');
  include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Consulta de calificaciones</title>
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
    </th><td><strong><font size="6">Consulta de calificaciones</font></strong> <br>
    </td>
  
  </tr>
  <tr>
</table>
</center>


<center>
<nav>
  <ul class="menu">
    <li><a href="index.html"><b>Inicio</b></a></li>
    <li><a href="capasitaciones.html"><b>Quienes somos</b></a></li>
    <li><a href="paraescolares.html"><b>Paraescolar</b></a></li>
    <li><a href="oferta.php"><b>Oferta Escolar</b></a></li>
    <li><a href="fotos.html"><b>Galeria</b></a></li>
    <li><a href="login.php"><b>Consultar Calificaciones</b></a></li>
  </ul>
</nav>
</center>

    <center>
<img src="imagenes/kd.png" width="300" height="300">





    	
<form  name="formdatos" method="post"  action="valida.php">

<label> Usuario</label><br>

<input type="text"   name="Nombre" required placeholder="Ingrese usuario"> 
<br>
<br>	
<label>Contraseña</label><br>

<input type="password" name="Contrasea" required placeholder="Ingrese contraseña">
<br>
<br>
<input type="submit" value="ACEPTAR" class="button">
<br>
<h3><p>Acceder como administrador:</p>
<p>Usuario=Gerass</p>
<p>Contraseña=hola</p>
</h3>
<br>
<br>






  <footer>
    <table>
      <tbody><tr><th bgcolor="#98FB98" width="10000000">
    <font color="white">
    <center>
      <font>© 2018 Todos los derechos reservados, Sistema Control Escolar, S.A. de C.V.
        <br>
        <a href="#">Políticas</a>|<a href="#">Términos y Condiciones</a>
      </center>
    </font>
  </th>
  </tr></tbody></table>
  </footer>
  </form>
</center>

    </body>
</html>