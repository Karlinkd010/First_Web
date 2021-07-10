
<?php
require("conexion.php");
$clave=$_GET['intidalumnos'];

$query="DELETE FROM tblalumnos WHERE intidalumnos='$clave'";
 $resultado=$conexion->query($query);

 if($resultado)
 {

 		echo '<script>
		alert("Datos del alumnos eliminados dcorrectamente"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='alumnos.php'</script>";
 	
 }
else
{
		echo '<script>
		alert("Error al eliminar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='alumnos.php'</script>";
}
 ?>
