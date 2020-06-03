<?php

session_start();
session_destroy();

if (isset($_SESSION['u_usuario'])){
    echo "Sesion iniciada";
}


else {
   header("Location: index.html");
}
?>