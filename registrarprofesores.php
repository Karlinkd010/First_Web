<?php
  include_once("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Administrador profesores</title>
  <link rel="stylesheet" href="estiloss.css">
 <link rel="stylesheet" type="text/css" href="css/estilos.css">
 <link rel="shortcut icon" type="image/x-icon" href="imagenes/icon.png">
 
 </head>

<body class="body" background="#98FB98">

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
    </th><td><strong><font size="6">Administrador profesores</font></strong> <br>
    </td>
  
  </tr>
  <tr>
</table>
</center>

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
  <form id="form1" name="form1" method="post" action="agregaprofesores.php">
    <h1>Registra datos Profesores</h1>
     <label>Matricula </label><input type="text" name="matricula" id="mat" size "22" maxlength="10" required autofocus pattern="[0-9]{10}" title="Solo se aceptan numeros">
      <br>
       <label>Nombre profesor </label><input type="text" name="nombre" id="nombre" size "22" maxlength="50" required autofocus pattern="[A-Z a-z]{3,20}" title="Solo se aceptan letras">
      <br>
      <label>Apellido Paterno  </label><input type="text" name="aP" id="nombre" size "22" maxlength="50" required autofocus pattern="[A-Z a-z]{3,20}" title="Solo se aceptan letras">
      <br>
      <label>Apellido Materno  </label><input type="text" name="aM" id="nombre" size "22" maxlength="50" required autofocus pattern="[A-Z a-z]{3,20}" title="Solo se aceptan letras">
      <br>
      <label>Cedula  </label><input type="tel" name="Cel"  size "22" required autofocus >
      <br>
      <label>Horas de trabajo  </label><input type="tel" name="Horas" size "22" maxlength="10" required autofocus >
      <br> 
       <label>Area de trabajo  </label><input type="text" name="Area" size "22" maxlength="50" required autofocus pattern="[A-Z a-z]{3,20}" title="Solo se aceptan letras">
      <br> 
      <input type="submit" value="Agregar" id="boton">
      

      </form>
      <form method="post"  action="alumnos.php">
        <input type="submit" value="Salir" class="button" >
        
      </form>

     
</body>
</html>
