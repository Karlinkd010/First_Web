<?php
session_start();
include 'conexion.php';
    
    $usuario = $_POST['Nombre'];
    $pass = $_POST['Contrasea'];
    
    $IipoUser = "CALL spLogina('$usuario','$pass')";
    
$resultado = mysqli_query($conexion, $IipoUser);
    
$filas = mysqli_num_rows($resultado);
    
$valueRow=$resultado->fetch_assoc();

if ($filas>0)//Si hay un dato
    {
        if ($valueRow['enumTipo']=='ADMINISTRADOR')
            {

            $_SESSION[ 'usuarioa' ] = true;
          
            $_SESSION[ 'start' ] = time();
            $_SESSION[ 'expire' ] = $_SESSION[ 'start' ] + ( 5 * 50 );
            echo '<script>
            alert("Binvenido al sistema de consultas de calificacones Administrador"); windows.histrory.go(-1);
            </script> ';
            echo "<script>location.href='administradormunu.php'</script>";
            }
        else
        {
             if ($valueRow['enumTipo']=='ALUMNO')
            {
                $_SESSION[ 'loggedin' ] = true;
                $_SESSION[ 'usuario' ] = $usuario;
                $_SESSION[ 'start' ] = time();
                $_SESSION[ 'expire' ] = $_SESSION[ 'start' ] + ( 3 * 50 );
                echo '<script>
                alert("Binvenido al sistema de consultas de calificacones"); windows.histrory.go(-1);
                </script> ';
                echo "<script>location.href='maqueta.php'</script>";
                
            }
        }

    }
else
    {
        
        echo '<script>
        alert("ESTE USUARIO NO EXISTE, PORFAVOR VERIFIQUE SUS DATOS"); windows.histrory.go(-1);
        </script> ';
        
        echo "<script>location.href='login.php'</script>"; 
    
    }
    mysqli_free_result($resultado);//Libere espacio 
    mysqli_close($conexion);
?>