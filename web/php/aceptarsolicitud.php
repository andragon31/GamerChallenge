<?php
if (!isset ($_SESSION))
{
    session_start ();
}
    
include 'conexion.php';

if(isset($_POST['aceptar']))
{   
    
    
    $idsolicitud = mysqli_real_escape_string ( $link, $_POST ['idsolicitud']);
    
    //echo '<script>alert("'.$idsolicitud.'")</script>';
    $result = mysqli_query ( $link, sprintf ("UPDATE SolicitudReto SET EstatusSolicitud = 'Aceptado' WHERE IDSolicitudReto = '%s'", $idsolicitud));

    //echo '<script>alert("Solicitud aceptada")</script> ';
    echo '<script> window.location = "../sala.php";</script>';
}

elseif(isset($_POST['rechazar']))
{   
    $idsolicitud = mysqli_real_escape_string ( $link, $_POST ['idsolicitud']);
    
    //echo '<script>alert("'.$idsolicitud.'")</script>';
    $result = mysqli_query ( $link, sprintf ("UPDATE SolicitudReto SET EstatusSolicitud = 'Rechazado' WHERE IDSolicitudReto = '%s'", $idsolicitud));

    //echo '<script>alert("Solicitud aceptada")</script> ';
    echo '<script> window.location = "../sala.php";</script>';
    
    
}

elseif(isset($_POST['cancelar']))
{   
    $idsolicitud = mysqli_real_escape_string ( $link, $_POST ['idsolicitud']);
    
    //echo '<script>alert("'.$idsolicitud.'")</script>';
    $result = mysqli_query ( $link, sprintf ("UPDATE SolicitudReto SET EstatusSolicitud = 'Cancelado' WHERE IDSolicitudReto = '%s'", $idsolicitud));

    //echo '<script>alert("Solicitud aceptada")</script> ';
    echo '<script> window.location = "../sala.php";</script>';
    
    
}

?>