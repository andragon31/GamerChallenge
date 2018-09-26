<?php
    $link = mysqli_connect ("localhost", "root", "");
	mysqli_select_db( $link, "chat2" );
    if(mysqli_connect_errno())
    {
        printf("conexion fallida", mysqli_connect_error());
        exit();
    }
?>