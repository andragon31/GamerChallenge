<?php
    if (!isset ( $_SESSION ))
    {
        session_start ();
    }
    $_POST = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST['idemisor']))
    {
        $_SESSION['IDPrivado'] = $_POST['idemisor'];
        //echo '<script> window.location = "../sala.php";</script>';
    }
    /*
    $_POST = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST['id']))
    {
        echo '<script>console.log("si recibe el dato");</script>';
        echo '<script>alert("si recibe el dato");</script>';
        $_SESSION['IDPrivado'] = $_POST['id'];
    }
    */
?>