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

        $result = mysqli_query ($link, sprintf ("SELECT * FROM SolicitudReto INNER JOIN Usuario ON SolicitudReto.IDUsuarioRetado = Usuario.IDUsuario WHERE IDSala = '%s' AND (EstatusSolicitud = 'Pendiente' OR EstatusSolicitud = 'Aceptado')", $idsala));
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
            $result = mysqli_query ($link, sprintf ("SELECT * FROM SolicitudReto INNER JOIN Usuario ON SolicitudReto.IDUsuarioRetado = Usuario.IDUsuario WHERE IDSala = '%s' AND (EstatusSolicitud = 'Pendiente' OR EstatusSolicitud = 'Aceptado')", $idsala));
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