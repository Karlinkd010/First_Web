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
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
 <title>Administrar materias</title>
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
    </th><td><strong><font size="6">Administrar materias</font></strong> <br>
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


<form  name="frmmateria" method="post"  action="registrarmateria.php">

<input type="submit" value="Agregar materia" class="button">
</form>

<br>
<br>


<?php
            
require("conexion.php");



           

            $por_pagina=10;
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
            $query="SELECT *FROM vw_vistaprofesores LIMIT $empieza,$por_pagina";

            $resultado=mysqli_query($conexion,$query);
          ?>
          <center>
          <table  cellpadding="7"  border="1" bgcolor="transparent" action>
            <tr>
              <th>Matricula</th>
              <th>Materia</th>
              <th>Grado</th>
              
              <th>Profesor asignado</th>
              <th>Cedula</th>
              

              
                      <th>Modificar</th>
                      <th>Eliminar</th>
            </tr>
            <?php
              while ($fila=mysqli_fetch_assoc($resultado)) {
            ?>
          </center>
            <tr align"center">
              <td><?php echo $fila['intidMaterias'];?></td>
              <td><?php echo $fila['txtNombremateria'];?></td>
              <td><?php echo $fila['txtGrado'];?></td>
              <td><?php echo $fila['txtNombre'];?></td>
              <td><?php echo $fila['txtCedula'];?></td>
             


              
           
              <td><a href = "actualizamateria.php?intidMaterias=<?=$fila['intidMaterias']?>">Modificar</a></td>
              <td><a href="deletemateria.php?intidMaterias=<?=$fila['intidMaterias']?>">Eliminar</a>
            </tr>
            <?php
            };
            ?>
          </table>
          <div>
           <div>
            <?php
               //seleccionar todos los registros
               $query="SELECT * FROM vw_vistaprofesores";
               $resultado=mysqli_query($conexion,$query);
               //contar el total de resgistros
               $total_registros=mysqli_num_rows($resultado);
               //usando ceil para dividir el total de resgistros entre $por_paginas
               $total_paginas=ceil($total_registros/$por_pagina);
               //link primera paginas
               echo "<center><a href='materias.php?pagina=1'>".' Primera '."</a>";
               for ($i=1;$i<=$total_paginas;$i++) {
                 echo "<a href='materias.php?pagina=".$i."'>".$i."</a>";
               }
               echo "<a href='materias.php?pagina=$total_paginas'>".' Ultima '."</a></center>";
            ?>
          </div>
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

