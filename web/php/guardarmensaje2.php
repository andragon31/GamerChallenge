<?php
    include 'conexion.php';
    include 'ingresarsala.php';

    $_POST = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST['message']))
    {
        //echo '<script>alert("'.$_POST['msg'].'")</script> ';
        $msg = $_POST['message'];
        $idsala = $_SESSION['IDSala'];
        $idusuario = $_SESSION['IDUsuario'];
        setlocale(LC_ALL, 'es_ES');
        date_default_timezone_set('America/Tegucigalpa');
        $fecha = date('d/m/Y g:ia');

        $sql ="INSERT INTO MensajesxSala (IDSala, IDUsuarioEmisor, Mensaje, Fecha) VALUES ('$idsala','$idusuario','$msg','$fecha')";
        $result = mysqli_query($link, $sql);

        $result = mysqli_query ($link, sprintf ( "SELECT * FROM MensajesxSala INNER JOIN Usuario ON MensajesxSala.IDUsuarioEmisor = Usuario.IDUsuario WHERE IDSala = '%s' ORDER BY IDMensajesxSala ASC",$idsala));
        $mensajes=array();

        if (mysqli_num_rows($result)!= 0)
            {     
                while($row = mysqli_fetch_array($result))
                {
                    $mensajes[]=$row;
                }
            }
            echo json_encode($mensajes);
        }

        if(isset($_POST['datos']))
        {
            $idsala = $_SESSION['IDSala'];
            //echo '<script>alert("'.$_POST['msg'].'")</script> ';
            $result = mysqli_query ($link, sprintf ( "SELECT * FROM MensajesxSala INNER JOIN Usuario ON MensajesxSala.IDUsuarioEmisor = Usuario.IDUsuario WHERE IDSala = '%s' ORDER BY IDMensajesxSala ASC",$idsala));
            $mensajes=array();

            if (mysqli_num_rows($result)!= 0)
            {     
                 while($row = mysqli_fetch_array($result))
                {
                    $mensajes[]=$row;
                }
            }
            echo json_encode($mensajes);
        }
?>