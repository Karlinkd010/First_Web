<?php
include('conexion.php');
$_matri=$_POST['id'];
$nombre=$_POST['nam'];
$combocurso=$_POST['grup'];
$comprofesor=$_POST['ing'];

$query="INSERT INTO `bdproyectoccl`.`tblmaterias`(`intidMaterias`,`txtNombremateria`,`intidprofesor`,`intidCurso`)
VALUES ('".$_matri."','".$nombre."','".$comprofesor."','".$combocurso."')";
$res_conexion= $conexion->query($query);


 echo '<script>
  alert("Materia agregada correctamente"); windows.histrory.go(-1);
  </script> ';
  echo "<script>location.href='materias.php'</script>";
 
?>