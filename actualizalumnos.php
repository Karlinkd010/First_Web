<?php
require('conexion.php');

$claves=$_GET['intidalumnos'];

if(isset($_GET['intidalumnos']))
{
  $sql="SELECT*FROM tblalumnos WHERE intidalumnos=$claves";
  $resultado=mysqli_query($conexion,$sql);
  if(mysqli_num_rows($resultado)>0)
  {
    $row=mysqli_fetch_assoc($resultado);

    $clave=$row['intidalumnos'];
    $nombre=$row['txtNombre'];
    $paterno=$row['txtAp'];
    $materno=$row['txtAm'];
    $direccion=$row['txtDomicilio'];
    $telefono=$row['txtTelefono'];
    $curso=$row['intidCurso'];
    $turno=$row['intidTurno'];

   
            
  
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Editar alumno</title>
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
    </th><td><strong><font size="6">Editar datos de alumno</font></strong> <br>
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







 


  <form id="form1" name="form1" method="post" action="update.php">
    <h1>Editar datos del alumno</h1>
    <br>
    <label>Matricula  </label><input type="text" value="<?=$clave?>" name="clave"  size "22" required maxlength="10" pattern="[0-9]{10}" title="Solo se aceptan numeros">
      <br>
     
      <label>Nombre  </label><input type="text" value="<?=$nombre?>" name="nombre"  size "22" maxlength="50" required autofocus pattern="[A-Z a-z]{3,20}" title="Solo se aceptan letras">
      <br>
      <label>Apellido Paterno  </label><input type="text" value="<?=$paterno?>" name="aP"  size "22" maxlength="50" required autofocus pattern="[A-Z a-z]{3,20}" title="Solo se aceptan letras">
      <br>
      <label>Apellido Materno  </label><input type="text" value="<?=$materno?>" name="aM" size "22" maxlength="50" required autofocus pattern="[A-Z a-z]{3,20}" title="Solo se aceptan letras">
      <br>
         <label>Grado</label>
      <select name="cursoo"  required>
    <?php
      include("conexion.php");
      $query="SELECT * FROM cursoenactivo";
      $resultado=mysqli_query($conexion, $query);

      while ($row=mysqli_fetch_array($resultado))
      {
        echo "<option value='".$row['intidCurso']."'>";
        echo $row['txtGrado'], $row['txtGrupo'];
        echo "<option>";
      } 
      
    ?>
  </select><br>




      <label>Turno</label>
      <select name="turno"  required>
    <?php
      include("conexion.php");
      $query="SELECT * FROM tblturno";
      $resultado=mysqli_query($conexion, $query);

      while ($row=mysqli_fetch_array($resultado))
      {
        echo "<option value='".$row['intidturno']."'>";
        echo $row['txtDescripcionturno'];
        echo "<option>";
      } 
      
    ?>
  </select><br><br>
      <label>Direccion  </label><input type="text" value="<?=$direccion?>" name="Dir"  size "22" maxlength="50" required autofocus>
      <br>
      <label>Telefono  </label><input type="text" value="<?=$telefono?>" name="Tel" size "22" maxlength="10" required autofocus pattern="[0-9]{10}" title="Solo se aceptan numeros">
      <br> 
   

     
    
      <input type="submit" value="Editar" id="boton">
      

      </form>
      <form method="post"  action="alumnos.php">
        <input type="submit" value="Salir" class="button" >
        
      </form>

     
</body>
</html>