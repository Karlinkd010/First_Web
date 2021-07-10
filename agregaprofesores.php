

<?php
require('conexion.php');
$matri=$_POST['matricula'];
$nombre=$_POST['nombre'];
$paterno=$_POST["aP"];
$materno=$_POST["aM"];
$celula=$_POST["Cel"];
$horas=$_POST["Horas"];
$area=$_POST["Area"];

$mensaje;
$encontrado='no';
$sql='SELECT * FROM tblprofesor';
$buscar=$conexion->query($sql);

while ($resultado=mysqli_fetch_array($buscar))
{

  if ($resultado['intidprofesor']==$matri)
    {

    $encontrado='si';
  }
}

if ($encontrado== 'no')
{



$query = "INSERT INTO tblprofesor(intidprofesor,txtNombre,txtAp,txtAm,txtCedula,txtHorariotrabajo,txtAreaespecial) VALUES ('$matri','$nombre','$paterno','$materno','$celula','$horas','$area')";

$res_conexion= $conexion -> query($query);

echo '<script>
	alert("Datos del profesor agregados correctamente"); windows.histrory.go(-1);
	</script> ';
	echo "<script>location.href='profesores.php'</script>";
  }
else
{
  echo '<script>
  alert("Profesor ya existe"); windows.histrory.go(-1);
  </script> ';
  echo "<script>location.href='registrarprofesores.php'</script>";
  
}

      /*$consulta = 'SELECT *FROM tblprofesor';
      $res_consulta=$conexion-> query($consulta);
      echo "
      <center>
        <table width=313 border=2>
        <tr>
          
          <td width=200>Nombre</td>
          <td width=200>Paterno</td>
          <td width=200>Materno</td>
          <td width=200>cedula</td>
          <td width=200>Horario</td>
          <td width=200>Area</td>
          
          

        
          </tr>
      </center>
        ";

      while ($datos=mysqli_fetch_array($res_consulta))
       {
      echo "<tr>
      
      <td>".$datos['txtNombre']." </td>
      <td>".$datos['txtAp']." </td>
      <td>".$datos['txtAm']." </td>
      <td>".$datos['txtCedula']." </td>
      <td>".$datos['txtHorariotrabajo']." </td>
      <td>".$datos['txtAreaespecial']." </td>
   
      </tr>";
      }
      echo "</table>";*/
?>



			



</body>
</html>