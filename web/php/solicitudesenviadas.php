<?php

    include 'conexion.php';
    include 'ingresarsala.php';
 
    
    $idsala = 1;//$_SESSION['IDSala'];
    $idusuario = 1;//$_SESSION['IDUsuario'];
    
    //$result = mysqli_query ($link, sprintf ( "SELECT * FROM MensajesxSala WHERE IDSala = '%s'",$idsala));
    $result = mysqli_query ($link, sprintf ("SELECT * FROM solicitudreto INNER JOIN usuario ON solicitudreto.IDUsuarioRetado = usuario.IDUsuario WHERE IDSala = '%s' AND (EstatusSolicitud = 'Pendiente' OR EstatusSolicitud = 'Aceptado')", $idsala));

    $solicitudes=array();

    if (mysqli_num_rows($result)!= 0)
        {     
            while($row = mysqli_fetch_array($result))
            {
                $solicitudes[]=$row;
            }
        }
        echo json_encode($solicitudes);
?>