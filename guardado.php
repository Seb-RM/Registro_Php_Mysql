<?php

include('db.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$peticion = "INSERT INTO perfiles (Nombre, Correo, Usuario, Contrasena) VALUES ('$nombre','$correo','$usuario','$contrasena')";

$validacion = mysqli_query($conexion,$peticion);

if($validacion){
    header('location:perfil.php');
}else {
    echo "No se ha podido registrar el usuario intente de nuevo mas tarde.";
}