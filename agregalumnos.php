

<?php

require('conexion.php');

$nombre=$_POST['nombre'];
$paterno=$_POST['aP'];
$materno=$_POST['aM'];
$direcion=$_POST['Dir'];
$tel=$_POST['Tel'];
$curso=$_POST['cursoo'];
$turno=$_POST['turno'];

$mensaje;
$encontrado='no';
$sql='SELECT * FROM tblalumnos';
$buscar=$conexion->query($sql);

while ($resultado=mysqli_fetch_array($buscar))
{

  if ($resultado['txtTelefono']==$tel)
    {

    $encontrado='si';
  }
}

if ($encontrado== 'no')
{

$query = "INSERT INTO `bdproyectoccl`.`tblalumnos`(`txtNombre`,`txtAp`,`txtAm`,`txtDomicilio`,`txtTelefono`,`intidCurso`,`intidTurno`)
VALUES ('".$nombre."','".$paterno."','".$materno."','".$direcion."','".$tel."','".$curso."','".$turno."')";
$res_conexion= $conexion -> query($query);
echo '<script>
  alert("Datos del alumno agregados correctamente"); windows.histrory.go(-1);
  </script> ';
  echo "<script>location.href='alumnos.php'</script>";




  }
else
{
  echo '<script>
  alert("Alumno ya existe"); windows.histrory.go(-1);
  </script> ';
  echo "<script>location.href='registrar.php'</script>";
  
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