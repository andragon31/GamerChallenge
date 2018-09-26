<?php
if (!isset ($_SESSION))
{
    session_start ();
}
	
if(isset($_POST['registro']))
{   
    include 'conexion.php';
    
    $usuario = mysqli_real_escape_string ( $link, $_POST ['nombrer']);
	$email = mysqli_real_escape_string ( $link, $_POST ['emailr']);
    $clave = mysqli_real_escape_string ( $link, $_POST ['claver']);
    //echo '<script>alert("'.$usuario.'")</script>';
    //var_dump($usuario);
    //var_dump($email);
    //var_dump($clave);
    
    $sql ="INSERT INTO usuario (NombreUsuario, ClaveUsuario, EmailUsuario) VALUES ('$usuario','$clave','$email')";
    $result = mysqli_query($link, $sql);
        
    echo '<script>alert("USUARIO REGISTRADO")</script> ';
    echo '<script> window.location = "../principal.php";</script>';
    
    mysqli_close ($link);
    exit();
}
?>