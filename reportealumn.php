
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
 <title>Administrador alumnos</title>
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
    </th><td><strong><font size="6">Administrador Alumnos</font></strong> <br>
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

</center>


<form  name="formagregallumnos" method="post"  action="registrar.php">

<input type="submit" value="Agregar Alumno" class="button">
</form>
<form  name="Reportealumos" method="post"  action="reportealumn.php">

<input type="submit" value="Listado de alumnos " class="button">
</form>
<form  name="repor" method="post"  action="generador.php">

<input type="submit" value="Reporte" class="button">
</form>
<br>
<br>


<?php
            
require("conexion.php");



           

            $por_pagina=5;
            if (isset($_GET['pagina'])) {
              // code...
              $pagina=$_GET['pagina'];
            }else {
              // code... 
              $pagina=1;
            }
            //la pagina inicia en 0 y se multiplica $por_pagina
            $empieza= ($pagina-1)*$por_pagina;
            //selecionamos los registros de l tabla usuarios con LIMIT
            $query="SELECT *FROM tblalumnos LIMIT $empieza,$por_pagina";

            $resultado=mysqli_query($conexion,$query);
          ?>
          <center>
          <table  cellpadding="7"  border="1" bgcolor="transparent" action>
            <tr>
              <th>Matricula</th>
              <th>Nombre</th>
              <th>Paterno</th>
              <th>Materno</th>
              <th>Direccion</th>
              <th>Telefono</th>
              

              
                      <th>Modificar</th>
                      <th>Eliminar</th>
            </tr>
            <?php
              while ($fila=mysqli_fetch_assoc($resultado)) {
            ?>
          </center>
            <tr align"center">
              <td><?php echo $fila['intidalumnos'];?></td>
              <td><?php echo $fila['txtNombre'];?></td>
              <td><?php echo $fila['txtAp'];?></td>
              <td><?php echo $fila['txtAm'];?></td>
              <td><?php echo $fila['txtDomicilio'];?></td>
              <td><?php echo $fila['txtTelefono'];?></td>
              


              
           
              <td><a href = "actualizalumnos.php?intidalumnos=<?=$fila['intidalumnos']?>">Modificar</a></td>
              <td>
                  <a href="delete.php?intidalumnos=<?=$fila['intidalumnos']?>">Eliminar</a>
            </tr>
            <?php
            };
            ?>
          </table>
          <div>
           <div>
            <?php
               //seleccionar todos los registros
               $query="SELECT *FROM tblalumnos";
               $resultado=mysqli_query($conexion,$query);
               //contar el total de resgistros
               $total_registros=mysqli_num_rows($resultado);
               //usando ceil para dividir el total de resgistros entre $por_paginas
               $total_paginas=ceil($total_registros/$por_pagina);
               //link primera paginas
               echo "<center><a href='alumnos.php?pagina=1'>".' Primera '."</a>";
               for ($i=1;$i<=$total_paginas;$i++) {
                 echo "<a href='alumnos.php?pagina=".$i."'>".$i."</a>";
               }
               echo "<a href='alumnos.php?pagina=$total_paginas'>".' Ultima '."</a></center>";
            ?>
          </div>
        </center>
      </body>
</html>






