<?php
    if (!isset ( $_SESSION ))
    {
        session_start ();
    }
    include 'conexion.php';
    include 'ingresarsala.php';
    include 'asignarid.php';
    
    if(isset($_POST['message']))
    {
        //echo '<script>alert("'.$_POST['msg'].'")</script> ';
        $msg = $_POST['message'];
        $idreceptor = $_SESSION['IDPrivado'];
        $idemisor = $_SESSION['IDUsuario'];
        setlocale(LC_ALL, 'es_ES');
        date_default_timezone_set('America/Tegucigalpa');
        $fecha = date('d/m/Y g:ia');

        $sql ="INSERT INTO mensajesindividuales (IDUsuarioEmisor, IDUsuarioReceptor, Mensaje, Fecha) VALUES ('$idemisor','$idreceptor','$msg','$fecha')";
        $result = mysqli_query($link, $sql);

        $result = mysqli_query ($link, sprintf ( "SELECT * FROM mensajesindividuales INNER JOIN usuario ON mensajesindividuales.IDUsuarioEmisor = usuario.IDUsuario WHERE IDUsuarioEmisor = '%s' and IDUsuarioReceptor = '%s' or IDUsuarioEmisor = '%s' and IDUsuarioReceptor = '%s' ORDER BY IDMensajesIndividuales ASC",$idemisor, $idreceptor, $idreceptor, $idemisor));
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
            $idreceptor = $_SESSION['IDPrivado'];
            $idemisor = $_SESSION['IDUsuario'];
            //echo '<script>alert("'.$_POST['msg'].'")</script> ';
            $result = mysqli_query ($link, sprintf ( "SELECT * FROM mensajesindividuales INNER JOIN usuario ON mensajesindividuales.IDUsuarioEmisor = usuario.IDUsuario WHERE IDUsuarioEmisor = '%s' and IDUsuarioReceptor = '%s' or IDUsuarioEmisor = '%s' and IDUsuarioReceptor = '%s' ORDER BY IDMensajesIndividuales ASC",$idemisor, $idreceptor, $idreceptor, $idemisor));
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