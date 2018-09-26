<?php
    include 'conexion.php';

    
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
?>