<?php
    if (!isset ( $_SESSION ))
    {
        session_start ();
    }
    include 'php/conexion.php';
    include 'php/ingresarsala.php';

    
    //var_dump($_SESSION["IDSala"]);
    //echo '<script>alert("'.$_SESSION["IDSala"].'")</script> ';
    

    //echo '<script>alert("'.$idusuario.'")</script>';
    
    if (!isset($_SESSION['IDUsuario']))
    {
        echo '<script> window.location = "login.php";</script>';
    }
    else
    {
        $idusuario = $_SESSION['IDUsuario'];
        $idsala = $_SESSION['IDSala'];

        //id del usuario ingresado
        //echo '<script> alert("' . $_SESSION['IDUsuario'] . '");</script>';
    }

    if(isset($_POST['retar']))
    {
        $iduserreto = $_POST['idretador'];
        //echo '<script> alert("'.$iduserreto.'");</script>';

        $result = mysqli_query ( $link, sprintf ("SELECT NombreUsuario FROM Usuario WHERE IDUsuario = '%s'", $idusuario));


        if (mysqli_num_rows($result) != 0) 
        {
            $row = mysqli_fetch_array($result);
            $nombreretador = $row['NombreUsuario'];
            
            mysqli_free_result ($result);
        }

        $result = mysqli_query ( $link, sprintf ("SELECT NombreUsuario FROM Usuario WHERE IDUsuario = '%s'", $iduserreto));


        if (mysqli_num_rows($result) != 0) 
        {
            $row = mysqli_fetch_array($result);
            $nombreretado = $row['NombreUsuario'];
            
            mysqli_free_result ($result);
        }

        if($idusuario == 1)
        {
            $imgperfil = "img/dragon.png"; 
        }
        elseif($idusuario == 2)
        {
            $imgperfil = "img/horda3.jpg";
        }
        elseif($idusuario == 3)
        {
            $imgperfil = "img/pentakill2.jpg";
        }
        else
        {
            $imgperfil = "img/pillars.png";
        }


        if($iduserreto == 1)
        {
            $imgperfil2 = "img/dragon.png"; 
        }
        elseif($iduserreto == 2)
        {
            $imgperfil2 = "img/horda3.jpg";
        }
        elseif($iduserreto == 3)
        {
            $imgperfil2 = "img/pentakill2.jpg";
        }
        else
        {
            $imgperfil2 = "img/pillars.png";
        }
    }

?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gamer Challenge</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/estilochat.css">
</head>

<style>
body, html {
    height: 100%;
}
.bg {
    /* The image used */
    background-image: url("img/play.png");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<body class="bg" id="view">

    <!--Main Navigation-->
    <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar rgba-indigo-light">
        <a class="navbar-brand" href="principal.php"><img style="width:100px; margin: -20px;" class="responsive-img" src="img/gclogo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-9">
        </div>
        <div class="col">
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="principal.php">Salas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mi Cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/logout.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<br><br><br><br><br><br><br>
    <!--body-->
    
    <!--body-->
    <!-- Card -->
    <div class="container">
        <div class="row" style="margin-right: 45px;">
            <div class="col-md-1"></div>
            <div class="card col-md-5 offset-md-1 col-lg-3 responsive text-center">
                <!-- Card image -->
                <img class="card-img-top respnsive-img" src="<?php echo $imgperfil ?>" alt="Card image cap">
                <!-- Card content -->
                <div class="card-body purple darken-3">
                    <!-- Title -->
                    <h4 class="card-title white-text"><a><b><?php echo $nombreretador ?></b></a></h4>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 col-lg-1 responsive h-100 w-100">
                <!-- Card image -->
                <br><br><br><br><br><br>
                <img class="card-img-top respnsive-img" src="img/vs2.png" alt="Card image cap">
                <!-- Card content -->
            </div>

            <div class="card col-md-5 offset-md-1 col-lg-3 offset-lg-1 responsive text-center">
                <!-- Card image -->
                <img class="card-img-top respnsive-img" src="<?php echo $imgperfil2 ?>" alt="Card image cap">
                <!-- Card content -->
                <div class="card-body purple darken-3">
                    <!-- Title -->
                    <h4 class="card-title white-text"><a><b><?php echo $nombreretado ?></b></a></h4>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
        <form action="php/solicitudreto.php" method="post" class="col-md-2 offset-md-5">
            <div class="offset-md-3">
                <input style="width:100px;" type="number" name="valorapuesta" placeholder="Precio $">
            </div>
            <input type="hidden" name="idretador" value="<?php echo $idusuario ?>">
            <input type="hidden" name="idretado" value="<?php echo $iduserreto ?>">
            <input type="hidden" name="idsala" value="<?php echo $idsala ?>">
            <br>
            <div class="col-md-2 offset-md-1">
            <button name="retar" class="btn btn-info purple darken-3 center" type="submit">Retar</button>
            </div>
        </form>
        </div>
    </div>
    <!-- Card -->


    <!--fin body-->
        
    <!--fin body-->

    <!-- Footer -->
    <footer class="page-footer font-small purple darken-3 fixed-bottom">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="#">GamerChallenge</a>
          <br><br>
        </div>
        <!-- Copyright -->
    </footer>
      <!-- Footer -->
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!--LIBRERIAS JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>
    <script src="js/vue-resource.min.js"></script>
    <script src="js/axios.min.js"></script>
    <script src="js/vuesala.js"></script>	
    <script src="js/vueusuarios.js"></script>	
    <script>
        // SideNav Button Initialization
        $(".button-collapse").sideNav();
        // SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        Ps.initialize(sideNavScrollbar);
    </script>
</body>

</html>
