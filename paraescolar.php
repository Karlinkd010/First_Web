
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Administrador Paraescolar</title>
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
    </th><td><strong><font size="6">Administrar paraescolar</font></strong> <br>
    </td>
  
  </tr>
  <tr>
</table>
</center>







 


  <form id="form1" name="form1" method="POST" action="agregarparaescolar.php" enctype="multipart/form-data" >
    <h1>Registrar parascolar</h1>
     
       <label>Nombre del paraescolar </label><input type="text" name="nam" size "22" required pattern="[A-Z a-z]{3,20}" title="Solo se aceptan letras">
      <br>
      <label>Descripcion</label><input type="text" name="descri" size "22" required>
      <br>
      <label>Imagen</label><input type="file" name="vchimagen" value="selecionar imagen" accept="image/*">
      
      
		
    
      <input type="submit" value="Agregar" id="boton">
      

      </form>
      <form method="post"  action="administrarinformacion.php">
        <input type="submit" value="Salir" class="button" >
        
      </form>

     
</body>
</html>