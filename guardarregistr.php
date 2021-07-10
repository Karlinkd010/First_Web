<!DOCTYPE html>
<html>
<head>
	<title>Datos registrados</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body bgcolor="yellow">


<center><h1>Datos registrados</h1></center>
<br>
<br>


<?php
require('conexion.php');

$nombre=$_POST['nombre'];
$paterno=$_POST["paterno"];
$materno=$_POST["materno"];
$dirección=$_POST["dirección"];
$telefono=$_POST["telefono"];
$mail=$_POST["mail"];
$usuarioO=$_POST["usuarioO"];
$password=$_POST["password"];
$tipo=$_POST["tipo"];

$query = "INSERT INTO tblalumnos(nombre,apaterno,amaterno,direccion,telefono,mail,usuario,password,tipo) VALUES ('$nombre','$paterno','$materno','$dirección','$telefono','$mail','$usuarioO','$password','$tipo')";
			$res_conexion= $conexion -> query($query);

			$consulta = 'SELECT *FROM tblalumnos;';
			$res_consulta=$conexion-> query($consulta);

			echo "
			<center>
				<table width=313 border=2>
 				<tr>
    			
    			<td width=200>Nombre</td>
   				<td width=200>Email</td>
   				<td width=200>Tel</td>

    			<td width=200>Usuario</td>
  				</tr>
  		</center>
				";

			while ($datos=mysqli_fetch_array($res_consulta))
			 {
			echo "<tr>
			
			<td>".$datos['nombre']." </td>
			<td>".$datos['mail']." </td>
			<td>".$datos['telefono']." </td>
			<td>".$datos['usuario']." </td>
			</tr>";
			}
			echo "</table>";
?>



			



</body>
</html>






