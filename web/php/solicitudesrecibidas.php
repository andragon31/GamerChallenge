<?php

    include 'conexion.php';
    include 'ingresarsala.php';
 
    
    $idsala = $_SESSION['IDSala'];
    $idusuario = $_SESSION['IDUsuario'];
    
    //$result = mysqli_query ($link, sprintf ( "SELECT * FROM MensajesxSala WHERE IDSala = '%s'",$idsala));
    $result = mysqli_query ($link, sprintf ("SELECT * FROM SolicitudReto INNER JOIN Usuario ON SolicitudReto.IDUsuarioRetador = Usuario.IDUsuario WHERE IDSala = '%s' AND (EstatusSolicitud = 'Pendiente' OR EstatusSolicitud = 'Aceptado')", $idsala));

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