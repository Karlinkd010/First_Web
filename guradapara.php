<?php
require('conexion.php');
if (isset($_POST['btn_enviar'])) {
	$archivo=$_FILES['img_Prod']['tmp_name'];
	$mTipo=exif_imagetype($archivo);
	if (($mTipo != IMAGETYPE_JPEG) && ($mTipo != IMAGETYPE_PNG)){
		// echo "Formato Incorrecto, Pruebe Con Imágenes";
    echo '<script>
    alert("Formato Incorrecto, Pruebe Con Imágenes"); windows.histrory.go(-1);
    </script> ';
    echo "<script>location.href='AddProductos.php'</script>";
	}
elseif (($mTipo = IMAGETYPE_JPEG) && ($mTipo = IMAGETYPE_PNG)) {
  $destino="C:/xampp/htdocs/Proyecto MenuMx/img/". $_FILES['img_Prod']['name'];
	//funcion para subir
	move_uploaded_file($archivo, $destino);

  $nombre=$_POST['vchNombreProducto'];
  $Desc=$_POST['vchDescripcion'];
  $tipo=$_POST['intIdTipo'];
  $precio=$_POST['floatPrecio'];
  $stock=$_POST['intStock'];
  $imagen=basename($_FILES['img_Prod']['name']);
  $insertar=mysqli_query($conexion,"INSERT INTO tblproductos(vchNombreProducto,vchDescripcion,intIdTipo ,
  floatPrecio,intStock,vchImagen)
  VALUES('$nombre','$Desc','$tipo','$precio','$stock','$imagen')");
  			if (!$insertar)
  			{
  				echo "Error, Verifique los datos (Tipo de Producto)";
					echo "header(Location:ShowProductos.php)";
  			}
  			else
  			{
 header("Location:ShowProductos.php");


  			}
}

}

?>
