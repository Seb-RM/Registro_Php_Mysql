<?php
//Incrustamos la conexión de nuestra base de datos utilizando include
include('db.php');
// Establecemos las variables que guardaran los datos ingresados de los usuarios.
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
//Realizamos el guardado de datos con lenguaje SQL
$peticion = "INSERT INTO perfiles (Nombre, Correo, Usuario, Contrasena) VALUES ('$nombre','$correo','$usuario','$contrasena')";
//Validamos si la conexión y datos se han realizado de forma correcta.
$validacion = mysqli_query($conexion,$peticion);
//verificamos si la validación ha sido correcta y procedemos a redirigir al usuario.
if($validacion){
    header('location:perfil.php');
}else {
    echo "No se ha podido registrar el usuario intente de nuevo mas tarde.";
}