
<?php
require("conexion.php");
$clave=$_GET['intidturno'];

$query="DELETE FROM tblturno WHERE intidturno='$clave'";
 $resultado=$conexion->query($query);

 if($resultado)
 {

 		echo '<script>
		alert("Turno eliminada correctamente"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='turno.php'</script>";
 	
 }
else
{
		echo '<script>
		alert("Error al eliminar"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='turno.php'</script>";
}
 ?>