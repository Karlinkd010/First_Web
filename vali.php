<?php
session_start();

include'conexion.php';
	
	$username = $_POST['Nombre'];
	$pass = $_POST['Contraseña'];



$consulta="SELECT txtUsuario,txtPassword FROM   tblusuario WHERE tblusuario.txtUsuario='administrador' AND tblusuario.txtPassword='admin'";
$resultado =mysqli_query($conexion, $consulta);

$filas= mysqli_num_rows($resultado);

if($filas>0)
{
	$_SESSION[ 'loggedin' ] = true;
	$_SESSION[ 'username' ] = $username;
	$_SESSION[ 'start' ] = time();
	$_SESSION[ 'expire' ] = $_SESSION[ 'start' ] + ( 1 * 10 );
	echo '<script>
	alert("BIENVENIDO AL SISTEMA DE CONSULTA DE CALIFICACIONES ADMINISTRADOR"); windows.histrory.go(-1);
	</script> ';
	echo "<script>location.href='administradormunu.php'</script>";
	
}
else

	$consulta2="SELECT txtUsuario,txtPassword FROM   tblusuario WHERE tblusuario.txtUsuario='$username' AND tblusuario.txtPassword='$pass'";
	$resultado2 =mysqli_query($conexion, $consulta2);

	$filas2 = mysqli_num_rows($resultado2);

	if($filas2>0)
	{
		$_SESSION[ 'loggedin' ] = true;
		$_SESSION[ 'username' ] = $username;
		$_SESSION[ 'start' ] = time();
		$_SESSION[ 'expire' ] = $_SESSION[ 'start' ] + ( 1 * 10 );
		echo '<script>
		alert("BIENVENIDO AL SISTEMA DE CONSULTA DE CALIFICACIONES"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='maqueta.php'</script>";
		
	}
else

{
	echo '<script>
	alert("ESTE USUARIO NO EXISTE, PORFAVOR VERIFIQUE SUS DATOS"); windows.histrory.go(-1);
	</script> ';
		
		echo "<script>location.href='login.php'</script>";	
		
}

mysql_free_result($resultado);
mysql_close($conexion);

?>