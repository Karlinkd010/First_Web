<?php
	require ('conexion.php');
	
	$clave=$_POST['clave'];
	$nombre=$_POST['nombre'];
	$paterno=$_POST["aP"];
	$materno=$_POST["aM"];
	$direcion=$_POST["Dir"];
	$tel=$_POST["Tel"];
	$curso=$_POST['cursoo'];
	$turno=$_POST['turno'];

	/*echo $clave;
	echo $nombre;
	echo $materno;
	echo $direcion;
	echo $tel;
	echo $curso;
	echo $turno;*/

	$actualizar=mysqli_query($conexion,"UPDATE `bdproyectoccl`.`tblalumnos` SET `intidalumnos` = '{$clave}',`txtNombre` = '{$nombre}',`txtAp` = '{$paterno}',`txtAm` = '{$materno}',`txtDomicilio` = '{$direcion}',`txtTelefono` = '{$tel}',`intidCurso` = '{$curso}',`intidTurno` = '{$turno}' WHERE `intidalumnos` = '{$clave}'");

	if (!$actualizar)
	{
		echo '<script>
		alert("Error al guardar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='actualizalumnos.php'</script>";
	}
	else
	{
		
		echo '<script>
		alert("Datos del alumno editados correctamente"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='alumnos.php'</script>";

		
	}
?>

