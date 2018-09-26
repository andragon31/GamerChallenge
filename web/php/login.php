<?php
if (!isset ($_SESSION))
{
    session_start ();
}
	
if(isset($_POST['login']))
{   
    include 'conexion.php';
    
    $email = mysqli_real_escape_string ( $link, $_POST ['emaillg'] );
	$clave = mysqli_real_escape_string ( $link, $_POST ['clavelg'] );
    
    //echo '<script>alert("'.$email.'")</script>';
    //echo '<script>alert("'.$clave.'")</script>';


    //$result = mysqli_query ( $link, sprintf ("SELECT IDUsuario, NombreUsuario FROM Usuario WHERE EmailUsuario = '%s' AND ClaveUsuario = '%s'", $email,$clave));
    $result = mysqli_query ( $link, sprintf ("SELECT IDUsuario, NombreUsuario FROM usuario WHERE EmailUsuario = '%s' AND ClaveUsuario = '%s'", $email,$clave));

    if (mysqli_num_rows($result) != 0) 
    {
        $row = mysqli_fetch_array($result);
        $_SESSION['IDUsuario'] = $row['IDUsuario'];
        
        
        mysqli_free_result ($result);
        mysqli_close ($link);
        
        echo '<script>alert("ENTRA PARA LOGUEAR")</script> ';
        echo '<script> window.location = "../principal.php";</script>';
    }
    else
    {
        mysqli_free_result ($result);
		mysqli_close ($link);
        
        echo '<script>alert("NO ENCUENTRA EL USUARIO")</script> ';
        echo '<script> window.location = "../login.php";</script>';
    }
}

?>