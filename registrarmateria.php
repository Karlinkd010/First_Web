

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Administrador materias</title>
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
    </th><td><strong><font size="6">Administrar materias</font></strong> <br>
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






 


  <form id="form1" name="form1" method="POST" action="amateria.php">
    <h1>Registrar materias</h1>
     <br>
      <label>Matricula materia  </label><input type="text" name="id"  size "22" maxlength="11" required a>
      <br>
       <label>Nombre de la materia  </label><input type="text" name="nam" size "22" required pattern="[A-Z a-z]{3,20}" title="Solo se aceptan letras">
      <br>
      
      <label>Grado</label>
      <select name="grup">
		<?php
  		include("conexion.php");
      $query="SELECT * FROM cursoenactivo";
      $resultado=mysqli_query($conexion, $query);

      while ($row=mysqli_fetch_array($resultado))
      {
        echo "<option value='".$row['intidCurso']."'>";
        echo $row['txtGrado'];
        echo "<option>";
      } 
			
		?>
  </select><br>

    <label>Nombre del  Profesor quien la imparte</label>
      <select name="ing">
    <?php
      include("conexion.php");
      $query="SELECT * FROM tblprofesor";
      $resultado=mysqli_query($conexion, $query);

      while ($row=mysqli_fetch_array($resultado))
      {
        echo "<option value='".$row['intidprofesor']."'>";
        echo $row['txtNombre'];
        echo "<option>";
      } 
      
    ?>
  </select><br><br>
		
    
      <input type="submit" value="Agregar" id="boton">
      

      </form>
      <form method="post"  action="materias.php">
        <input type="submit" value="Salir" class="button" >
        
      </form>

     
</body>
</html>