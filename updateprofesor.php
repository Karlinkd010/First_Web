<?php
	require ('conexion.php');
	$clave=$_POST['clave'];
	$nombre=$_POST['nombre'];
	$paterno=$_POST["aP"];
	$materno=$_POST["aM"];
	$cedula=$_POST['Cel'];
	$horario=$_POST['Horas'];
	$area=$_POST['Area'];	

		$actualizar=mysqli_query($conexion,"UPDATE tblprofesor SET txtNombre='$nombre', txtAp='$paterno', txtAm='$materno', txtCedula='$cedula', txtHorariotrabajo='$horario',txtAreaespecial='$area' WHERE intidprofesor='$clave'");

	if (!$actualizar)
	{
		echo '<script>
		alert("Error al guardar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='actualizaprofesor.php'</script>";
	}
	else
	{
		echo '<script>
		alert("Datos del profesor editados correctamente"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='profesores.php'</script>";

		
	}
?>