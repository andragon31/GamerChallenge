<?php

    if (!isset ($_SESSION))
    {
        session_start ();
    }

    include 'conexion.php';
    include 'ingresarsala.php';
    include 'login.php';
    
    $idsala = $_SESSION["IDSala"];

    $result = mysqli_query ($link, sprintf ( "SELECT * FROM MensajesxSala WHERE IDSala = '%s'",$idsala));
    $mensajes=array();

    if (mysqli_num_rows($result)!= 0)
        {     
            while($row = mysqli_fetch_array($result))
            {
                $mensajes[]=$row;
            }
        }
        echo json_encode($mensajes);
?>