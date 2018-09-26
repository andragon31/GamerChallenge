<?php

    if (!isset ($_SESSION))
    {
        session_start ();
    }
    include 'conexion.php';

    if(isset($_POST['retar']))
    {
        //echo '<script>alert("'.$_POST['msg'].'")</script> ';
        $idsala = $_POST['idsala'];
        $idretador = $_POST['idretador'];
        $idretado = $_POST['idretado'];
        $valor = $_POST['valorapuesta'];
        //echo '<script>alert("'.$idretado.'")</script>';

        $contador = 0;
        //AQUI SE DEBE VERIFICAR YA EXISTE UNA SOLICITUD ANTERIOR
        $result = mysqli_query ($link, sprintf ("SELECT * FROM solicitudreto WHERE IDUsuarioRetador = '%s' AND IDUsuarioRetado = '%s' AND IDSala = '%s' AND (EstatusSolicitud = 'Pendiente' OR EstatusSolicitud = 'Aceptado')", $idretador,$idretado, $idsala));
        if (mysqli_num_rows($result) != 0)
        {
            $contador++;
        }
        
        if($contador > 0)
        {
            echo '<script>alert("Ya existe una solicitud pendiente")</script>';
            echo '<script> window.location = "../sala.php";</script>';
        }
        else
        {
            $sql ="INSERT INTO solicitudreto (IDSala,IDUsuarioRetador, IDUsuarioRetado, EstatusSolicitud, ValorApuesta,EstatusRetador, EstatusRetado) VALUES ('$idsala', '$idretador', '$idretado','Pendiente', '$valor', 'Pendiente', 'Pendiente')";
            $resultado = mysqli_query($link, $sql);

            echo '<script>alert("SE HA ENVIADO LA SOLICITUD")</script> ';
            echo '<script> window.location = "../sala.php";</script>';
        }
    }
?>