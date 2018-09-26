<?php

  session_start();
  #destruye la sesion
  session_destroy();
  #redirecciona al index
  echo '<script>window.location = "../login.php";</script>';
 ?>