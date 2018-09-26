<?php
    $link = mysqli_connect ("db4free.net:3306", "gcuser", "gamer123");
	mysqli_select_db( $link, "bdgamer");
    if(mysqli_connect_errno())
    {
        printf("conexion fallida", mysqli_connect_error());
        exit();
    }
    else
    {
        printf("conexion exitosa");
    }
?>