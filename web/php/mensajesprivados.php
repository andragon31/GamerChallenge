<?php
    if (!isset ( $_SESSION ))
    {
        session_start ();
    }
    include 'conexion.php';
    include 'ingresarsala.php';
    include 'asignarid.php';
    //include 'guardarprivados';
    //include 'ingresarsala.php'
    //setlocale(LC_ALL, 'es_ES');
    //date_default_timezone_set('America/Tegucigalpa');
    //$fecha = date('m/d/Y g:ia');
    //var_dump($fecha);
    //$time = time();
    //date("d-m-Y (H:i:s)", $time);
    //var_dump(date("d-m-Y (H:i:s)", $time));
    
    $idemisor = 1;//$_SESSION['IDUsuario'];
    $idreceptor = 2;//$_SESSION['IDPrivado'];

    
    //$result = mysqli_query ($link, sprintf ( "SELECT * FROM MensajesxSala WHERE IDSala = '%s'",$idsala));
    $result = mysqli_query ($link, sprintf ( "SELECT * FROM Mensajesindividuales INNER JOIN usuario ON Mensajesindividuales.IDUsuarioEmisor = Usuario.IDUsuario WHERE IDUsuarioEmisor = '%s' and IDUsuarioReceptor = '%s' or IDUsuarioEmisor = '%s' and IDUsuarioReceptor = '%s' ORDER BY IDMensajesIndividuales ASC",$idemisor, $idreceptor, $idreceptor, $idemisor));

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