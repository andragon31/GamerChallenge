<?php
    include 'conexion.php';
    include 'ingresarsala.php';

    $_POST = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST['message']))
    {
        //echo '<script>alert("'.$_POST['msg'].'")</script> ';
        $msg = $_POST['message'];
        $idsala = 1;//$_SESSION['IDSala'];
        $idusuario = 1;//$_SESSION['IDUsuario'];
        setlocale(LC_ALL, 'es_ES');
        date_default_timezone_set('America/Tegucigalpa');
        $fecha = date('d/m/Y g:ia');

        $sql ="INSERT INTO mensajesxsala (IDSala, IDUsuarioEmisor, Mensaje, Fecha) VALUES ('$idsala','$idusuario','$msg','$fecha')";
        $result = mysqli_query($link, $sql);

        $result = mysqli_query ($link, sprintf ( "SELECT * FROM mensajesxsala INNER JOIN usuario ON mensajesxsala.IDUsuarioEmisor = usuario.IDUsuario WHERE IDSala = '%s' ORDER BY IDMensajesxSala ASC",$idsala));
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
            $idsala = 1;//$_SESSION['IDSala'];
            //echo '<script>alert("'.$_POST['msg'].'")</script> ';
            $result = mysqli_query ($link, sprintf ( "SELECT * FROM mensajesxsala INNER JOIN usuario ON mensajesxsala.IDUsuarioEmisor = usuario.IDUsuario WHERE IDSala = '%s' ORDER BY IDMensajesxSala ASC",$idsala));
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