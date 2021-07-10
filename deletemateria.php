
<?php
require("conexion.php");
$clave=$_GET['intidMaterias'];

$query="DELETE FROM tblmaterias WHERE intidMaterias='$clave'";
 $resultado=$conexion->query($query);

 if($resultado)
 {

 		echo '<script>
		alert("Materia eliminada correctamente"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='materias.php'</script>";
 	
 }
else
{
		echo '<script>
		alert("Error al eliminar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='materias.php'</script>";
}
 ?>