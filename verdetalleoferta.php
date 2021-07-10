<?php 
    require("conexion.php"); 
    $id=$_GET['id'];
        $ConEmpleado="SELECT * FROM tblparaescolares WHERE idparaescolar='$id'";
         $result =$conexion->query($ConEmpleado);
        $datos=mysqli_fetch_array($result);
        
 
        
?>
<!DOCTYPE html>
<html>
<head>
 <title>Oferta Educativa</title>
 <link rel="stylesheet" type="text/css" href="css/estilos.css">
 <link rel="shortcut icon" type="image/x-icon" href="imagenes/icon.png">
 <meta charset="UTF-8">
 <meta charset="utf-8">
 
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
    </th><td><strong><font size="6">Oferta Educativa</font></strong> <br>
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
<table width="200" border="1" align="center">
  <tbody>
    <tr>
      <td colspan="2"><img src="imagenes\paraescolar\<?php echo $datos['vchimagen']?>" width="200" height="150"/></td>
    </tr>
    <tr>
      <td>Identificador</td>
      <td><?php echo $datos['idparaescolar']?></td>
    </tr>
    <tr>
      <td>Paraescolar</td>
      <td><?php echo $datos['Nombreparaescolar']?></td>
    </tr> 
    <tr>
      <td>Descripcion</td>
      <td><?php echo $datos['descripcion']?></td>
    </tr>
    
  </tbody>
</table>






</body>


</html>