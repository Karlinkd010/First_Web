


<?php
include('conexion.php');

$_grado=$_POST['grado'];
$_grupo=$_POST['grupo'];


$query = "INSERT INTO `bdproyectoccl`.`cursoenactivo`(`txtGrado`,`txtGrupo`) VALUES ('".$_grado."','".$_grupo."')";

$res_conexion= $conexion -> query($query);

echo '<script>
	alert("Datos agregados correctamente"); windows.histrory.go(-1);
	</script> ';
	echo "<script>location.href='curso.php'</script>";
?>