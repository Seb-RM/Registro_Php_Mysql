<?php

$conexion = mysqli_connect('localhost','root','','registro');

/*
La conexión a la base de datos inicia con la variable  "$conexion", esta variable
guarda los datos de la conexión de nuestra base de datos.

Los datos se ingresan mediante "mysqli_connect", y los parámetros a ingresar son los siguientes:
('servidor','usuario','contrasena''db').
El apartado de contraseña es un espacio vacío ya que la base de datos no contiene una contraseña
establecida.
 */