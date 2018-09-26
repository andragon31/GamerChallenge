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
                    
                <!-- Default form register -->
                    <form method="post" action="php/registro.php" class="text-center border border-light p-5 rgba-black-strong">

                        <p class="h4 mb-4 white-text">Registrarse</p>
                            
                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- First name -->
                                <input type="text" name="nombrer" id="defaultRegisterFormFirstName nombrer" class="form-control" placeholder="Nombre">
                            </div>
                        </div>
                            
                        <!-- E-mail -->
                        <input type="email" name="emailr" id="defaultRegisterFormEmail emailr" class="form-control mb-4" placeholder="E-mail">
                            
                        <!-- Password -->
                        <input type="password" name="claver" id="defaultRegisterFormPassword claver" class="form-control" placeholder="Contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                        <br>
                        <!-- Phone number -->

                        <!-- Sign up button -->
                        <button name="registro" class="btn btn-info my-4 btn-block purple darken-3" type="submit">Registrarse</button>

                        <!-- Register -->
                        <p class="white-text">Ya eres miembro?
                            <a class="purple-text" href="login.php">Ingresar</a>
                        </p>
                    </form>
                        <!-- Default form register -->
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
