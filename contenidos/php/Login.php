<?php

session_start();

$usuario = $_POST["txtusuario"];
$psw = $_POST["txtpassword"];

include("conexion.php");

$proceso = $conn -> query("SELECT * FROM usuarios WHERE usuario ='".$usuario."' and psw = '".$psw."'");
    if ($resultado = mysqli_fetch_array($proceso)) {
        $_SESSION['u_usuario'] = $usuario;
        header("Location: ../../sesion.php"); }
        
    else { header("Location: ../../index.html"); }

?>