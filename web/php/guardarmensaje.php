<?php
    include 'conexion.php';

    $_POST = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST['message']))
    {
        //echo '<script>alert("'.$_POST['msg'].'")</script> ';
        $msg = $_POST['message'];
        $sql ="INSERT INTO mensajes (mensaje) VALUES ('$msg')";
        $result = mysqli_query($link, $sql);

        $sql ="SELECT * FROM mensajes";
        $result = mysqli_query($link, $sql);
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
            //echo '<script>alert("'.$_POST['msg'].'")</script> ';
            $sql ="SELECT * FROM mensajes";
            $result = mysqli_query($link, $sql);
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