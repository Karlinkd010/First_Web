<?php
include('conexion.php');
$_matri=$_POST['id'];
$_turno=$_POST['turno'];

$query = "INSERT INTO `bdproyectoccl`.`tblturno` (`intidturno`,`txtDescripcionturno`) VALUES ('".$_matri."','".$_turno."')";

$res_conexion= $conexion -> query($query);
echo '<script>
	alert("Datos agregados correctamente"); windows.histrory.go(-1);
	</script> ';
	echo "<script>location.href='turno.php'</script>";



?>