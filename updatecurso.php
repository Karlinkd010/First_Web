<?php
	require ('conexion.php');
	
	$clave=$_POST['id'];
	
	$_grado=$_POST["grado"];
	$_grupo=$_POST["grupo"];
/*

	echo $clave;
	echo $_grado;
	echo $_grupo;*/
	

	$actualizar=mysqli_query($conexion,"UPDATE `bdproyectoccl`.`cursoenactivo` SET `intidCurso` = '{$clave}',`txtGrado` = '{$_grado}',`txtGrupo` = '{$_grupo}' WHERE `intidCurso` = '{$clave}'");

	if (!$actualizar)
	{ 
		echo '<script>
		alert("Error al guardar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='actualizacurso.php'</script>";
	}
	else
	{
		
		echo '<script>
		alert("Datos editados correctamente"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='curso.php'</script>";

		
	}
?>