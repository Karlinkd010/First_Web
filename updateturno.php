<?php
	require ('conexion.php');
	
	$clave=$_POST['id'];
	
	$_turno=$_POST["turno"];
	


	$actualizar=mysqli_query($conexion,"UPDATE `bdproyectoccl`.`tblturno` SET `intidturno` = '{$clave}',`txtDescripcionturno` = '{$_turno}' WHERE `intidturno` = '$clave'");

		if (!$actualizar)
	{ 
		echo '<script>
		alert("Error al guardar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='actualizaturno.php'</script>";
	}
	else
	{
		
		echo '<script>
		alert("Datos editados correctamente"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='turno.php'</script>";

		
	}

?>