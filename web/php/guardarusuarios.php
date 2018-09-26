<?php
    include 'conexion.php';
    include 'ingresarsala.php';

    $_POST = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST['datos']))
        {
            $idsala = 1; //$_SESSION['IDSala'];
            //echo '<script>alert("'.$_POST['msg'].'")</script> ';
            $result = mysqli_query ($link, sprintf ( "SELECT * FROM UsuariosxSala INNER JOIN Usuario ON UsuariosxSala.IDUsuario = Usuario.IDUsuario WHERE IDSala = '%s' ORDER BY IDUsuariosxSala ASC",$idsala));
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