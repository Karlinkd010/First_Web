<?php
include('conexion.php');
$_matri=$_POST['id'];
$nombre=$_POST['nam'];
$combocurso=$_POST['grup'];
$comprofesor=$_POST['ing'];

/*echo $_matri;
echo $nombre;
echo $combocurso;
echo $comprofesor;*/

$actualizar=mysqli_query($conexion,"UPDATE `bdproyectoccl`.`tblmaterias` SET `intidMaterias` = '{$_matri}', `txtNombremateria` = '{$nombre}',`intidprofesor` = '{$comprofesor}',`intidCurso` = '{$combocurso}' WHERE `intidMaterias` = '{$_matri}'");

	if (!$actualizar)
	{
		
		echo '<script>
		alert("Error al guardar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='actualizamateria.php'</script>";
	}
	else
	{
		
		echo '<script>
		alert("Datos editados correctamente"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='materias.php'</script>";

		
	}
 
?>