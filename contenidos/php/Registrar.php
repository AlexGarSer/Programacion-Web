<?php
include("conexion.php");

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$psw = $_POST['psw'];
$img = $_POST['img'];
 
$query = "INSERT INTO usuarios(usuario,nombre,apellido,correo,psw,img) VALUES('$usuario','$nombre','$apellido','$correo','$psw','$img')";

$resultado = $conn -> query($query);

if ($resultado) {  header ("Location: ../Login.html");}
else { echo "No se ha podido registar, contacte con un administrador.";}
 
?>