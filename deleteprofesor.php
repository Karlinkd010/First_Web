<?php
require("conexion.php");
$clave=$_GET['intidprofesor'];

$query="DELETE FROM tblprofesor WHERE intidprofesor='$clave'";
 $resultado=$conexion->query($query);

 if($resultado)
 {

 		echo '<script>
		alert("Datos del profesor eliminados correctamente "); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='profesores.php'</script>";
 	
 }
else
{
		echo '<script>
		alert("Error al eliminar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='profesores.php'</script>";
}
 ?>