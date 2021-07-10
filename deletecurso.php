
<?php
require("conexion.php");
$clave=$_GET['intidCurso'];

$query="DELETE FROM cursoenactivo WHERE intidCurso='$clave'";
 $resultado=$conexion->query($query);

 if($resultado)
 {

 		echo '<script>
		alert("Curso eliminada correctamente"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='curso.php'</script>";
 	
 }
else
{
		echo '<script>
		alert("Error al eliminar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='curso.php'</script>";
}
 ?>