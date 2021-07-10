<?php 
    require("conexion.php"); 
        $ConEmpleado='SELECT * FROM tblparaescolares';
        $result =$conexion->query($ConEmpleado);
        
if(mysqli_num_rows($result)>0)
        { 
            $row=mysqli_fetch_array($result);

            $nombre=$row['Nombreparaescolar'];
            $Apellido=$row['descripcion'];
            $imag=$row['vchimagen'];
        }    
        
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
<?php 
      $cuantos=2;
  do {
    if($cuantos==0){
?>
  <tr>
  <?php } ?>
    <td align="center">
    <p> <img src="imagenes\paraescolar\<?php echo $row['vchimagen'];?>" width="200" height="150"/>     
    </p>
    <p><strong>Nombre deporte:</strong><?php echo $row['Nombreparaescolar'];?></p>
    <a href="verdetalleoferta.php?id=<?php echo $row['idparaescolar'];?>">Ver datalle</a>
    </td>
    
  </tr>
  
  <?php } while ($row=mysqli_fetch_assoc($result));?>
</table>
<P></P>
<CENTER>
<H2><marquee scrollamount="2" direction="down"><I><CENTER>MAPA CURRICULAR</CENTER></I></marquee></H2>

<P></P>
<EMBED src="PDF/MAPA CURRICULAR.pdf" width="1000px" height="1000px">
</CENTER>

  <footer>
    <table>
      <tbody><tr><th bgcolor="#98FB98" width="10000000">
    <font color="white">
    <strong>Ubicación: </strong><br>
    <p>
<h6> C0NOCIDO 
Chicontepec de Tejeda (Municipio: Chicontepec, Estado: Veracruz de Ignacio de la Llave) 
Codigo Postal: 92709
</h3>
    <strong>Telefono: </strong><br>
    <h6>746-118-41-39</h6>
    <strong>Correo</strong><br>
    Telesecundariachicontepec@gmail.com
    </font>
  </th>
  </tr></tbody></table>
  </footer>


</body>


</html>