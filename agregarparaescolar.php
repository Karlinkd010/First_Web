	<?php 
	include("conexion.php");
	$nombreparaescolar=$_POST['nam'];
	$descripcion=$_POST['descri'];
	$nomimagen=$_FILES['vchimagen']['name'];
		

				$permitidos=array("image/jpg","image/png","image/jpeg");
				$limite_kib=500;

				

				if(in_array($_FILES['vchimagen']['type'],$permitidos) && $_FILES['vchimagen']['size']<=$limite_kib * 1024)
				{
						
							$ruta="imagenes/paraescolar/".$nomimagen=$_FILES['vchimagen']['name'];
							move_uploaded_file($_FILES["vchimagen"]["tmp_name"],$ruta);
					
							$query ="INSERT INTO `bdproyectoccl`.`tblparaescolares`(`Nombreparaescolar`,`descripcion`,`vchimagen`) VALUES ('".$nombreparaescolar."','".$descripcion."','".$nomimagen."')";

							$resultado= $conexion->query($query);

							if($resultado)
							{

								 echo '<script>
						        alert("Datos agregados correctamente")
						        </script>';
						        //header("location:tablaproductos.php");
						        echo '<meta http-equiv="Refresh" content="0;URL=administrarinformacion.php">';
							}

							
				}
				else
				{ 
					 echo '<script>
			        alert("Tipo de imagen o tamaño no valido")
			        </script>';
			         echo '<meta http-equiv="Refresh" content="0;URL=administrarinformacion.php">';
							
				}
			
		//pattern="[0-9]{10}"
		//onchange='submit()'*/
	

 ?>