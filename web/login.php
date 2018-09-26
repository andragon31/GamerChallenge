<?php
    if (!isset ( $_SESSION ))
    {
        session_start ();
    }
    include 'php/conexion.php';
    if (!isset($_SESSION['IDUsuario']))
    {
    }
    else
    {
      echo '<script> window.location = "principal.php";</script>';
    }
?>

<!DOCTYPE html>
<html lang="en" class="full-height">

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
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fixed-sn pink-skin" id="view">

    <!--Main Navigation-->
<header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img style="width:100px; margin: -20px;" class="responsive-img" src="img/gclogo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    
        <div class="view intro-2">
            <div class="full-bg-img">
                <div class="mask rgba-black-strong flex-center">
                    
                <!-- Default form login -->
                <form method="post" action="php/login.php" class="text-center border border-light p-5 rgba-black-strong">

                        <p class="h4 mb-4 white-text">Ingresar</p>
                    
                        <!-- Email -->
                        <input type="email" name="emaillg" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
                    
                        <!-- Password -->
                        <input type="password" name="clavelg" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Contraseña">
                    
                        <div class="d-flex justify-content-around">
                            <div>
                                <!-- Remember me -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                    <label class="custom-control-label white-text" for="defaultLoginFormRemember">Recuerdame &nbsp</label>
                                </div>
                            </div>
                            <div>
                                <!-- Forgot password -->
                                <a class="purple-text" href="">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    
                        <!-- Sign in button -->
                        <button name="login" class="btn btn-info btn-block my-4 purple darken-3" type="submit">Ingresar</button>
                    
                        <!-- Register -->
                        <p class="white-text">No eres miembro?
                            <a class="purple-text" href="registro.php">Registrate</a>
                        </p>
                    
                    </form>
    <!-- Default form login -->
                </div>
            </div>
        </div>
    
    </header>

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
    <script>
        // SideNav Button Initialization
        $(".button-collapse").sideNav();
        // SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        Ps.initialize(sideNavScrollbar);
    </script>
</body>

</html>
