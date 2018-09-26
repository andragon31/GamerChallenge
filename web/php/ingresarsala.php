<?php

    if (!isset ($_SESSION))
    {
        session_start ();
    }
    include 'conexion.php';

    if(isset($_POST['idsala']))
    {
        //echo '<script>alert("'.$_POST['msg'].'")</script> ';
        $idsala = $_POST['idsala'];
        $idusuario = $_SESSION["IDUsuario"];

        //AQUI SE DEBE VERIFICAR SI EL USUARIO YA ESTA EN LA SALA, SINO ESTA SE ASIGNA EL USUARIO A LA SALA PARA PODER ENTRAR Y SE ABRE LA PANTALLA PRINCIPAL DE LA SALA
        $result = mysqli_query ($link, sprintf ( "SELECT * FROM usuariosxsala WHERE IDUsuario = '%s' AND IDSala = '%s'", $idusuario,$idsala));
        if (mysqli_num_rows($result) != 0)
        {
            $_SESSION["IDSala"] = $idsala;
            echo '<script> window.location = "../sala.php";</script>';
        }
        else
        {
            //var_dump($idsala, $idusuario);
            $sql ="INSERT INTO usuariosxsala (IDUsuario, IDSala) VALUES ('$idusuario', '$idsala')";
            $resultado = mysqli_query($link, $sql);  
            

            $_SESSION["IDSala"] = $idsala;
            //echo '<script>alert("HAS INGRESADO A LA SALA SATISFACTORIAMENTE")</script> ';
            echo '<script> window.location = "../sala.php";</script>';
        }
    }
?>