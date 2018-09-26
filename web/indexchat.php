<?php
    $idusuario = 1;
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>VUEjs V2 AJAX vue-resource | Rimorsoft Online</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilochat.css">
</head>
<body>

    <br><br>
    <h1 class="text-center">CHAT CON VUE</h1>
	<div id="main" class="container text-center">
        <div v-for="item in mensajejson">
            <div class="container darker" id="cont-mensaje" v-if="item.IDUsuarioEmisor == <?php echo $idusuario ?>">
                <h3>{{item.NombreUsuario}}</h3>
                <p>{{item.Mensaje}}</p>
                <span class="time-right">{{item.Fecha}}</span>
            </div>
            <div class="container whiten" id="cont-mensaje" v-else>
                <h3>{{item.NombreUsuario}}</h3>
                <p>{{item.Mensaje}}</p>
                <span class="time-left">{{item.Fecha}}</span>
            </div>
        </div>
    </div>
    
    <!--LIBRERIAS JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/vue-resource.min.js"></script>
    <script src="js/axios.min.js"></script>
    <script src="js/vue2.js"></script>		
</body>
</html>
