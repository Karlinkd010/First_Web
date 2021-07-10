<?php
session_start();


include'conexion.php';

if ( $conexion->connect_error ) {
	die( "La conexion falló: " . $conexion->connect_error );
}
$username = $_POST['Nombre'];
$pass = $_POST['Contraseña'];

$encontrado='no';
$admin='no';

$sql='SELECT * FROM tblusuario';
$buscar=$conexion->query($sql);
while ($resultado=mysqli_fetch_array($buscar))
{
	if($resultado="tblusuario.txtUsuario=['administrador']==$username AND tblusuario.txtPassword=['admin']==$pass")
	{
		$_SESSION[ 'loggedin' ] = true;
		$_SESSION[ 'username' ] = $username;
		$_SESSION[ 'start' ] = time();
		$_SESSION[ 'expire' ] = $_SESSION[ 'start' ] + ( 1 * 10 );
		//echo "Bienvenido! " . $_SESSION[ 'username' ];
		//echo "<br><br><a href=administradormunu.php></a>";
		echo '<script>
		alert("BIENVENIDO AL SISTEMA DE CONSULTA DE CALIFICACIONES ADMINISTRADOR"); windows.histrory.go(-1);
		</script> ';
		echo "<script>location.href='administradormunu.php'</script>";
	}

		if($resultado['txtUsuario']==$username AND $resultado['txtPassword']==$pass)
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
	alert("Usuario o contraseña invalido"); windows.histrory.go(-1);
	</script> ';
	echo "<script>location.href='login.php'</script>";
	}

}
mysqli_close( $conexion );
?>