<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>
</head>
<body>
<!-- 
    Contenedor Principal: Cumple la función de base de todo el documento html.

    Contenedor Formulario: Este contenedor cumple la función de dar forma
    al formulario y definir límites a su vez que es la base del formulario
    sobra la base principal.

    Form: Este contenedor posee todos los elementos de un formulario,
    esta configurado con el método "post" para mayor seguridad al enviar los datos.

    Los datos que se ingresan en el formulario son enviados al archivo "guardado.php"
    una vez se haya presionado el botón de registro.

    Contenedor Título: Este contenedor posee el título del formulario.

    Label: Los label están clasificados por un nombre único, y indican lo que debe ingresar
    el usuario en los input.

    Inputs: Los inputs guardan los datos que ingresa el usuario para posteriormente
    mandarlos mediante el método y dirección establecidos en el formulario.
-->
    <div class="principal">
        <div class="formulario">
            <form action="guardado.php" method="post">
                <div class="titulo">
                    <h1>Regístrate</h1>
                </div>
                <label for="">Ingresa tu nombre</label>
                <br>
                <input type="text" name="nombre" id="" placeholder="Nombre">
                <br>
                <label for="">Ingresa tu correo</label>
                <br>
                <input type="email" name="correo" id="" placeholder="Correo Electrónico">
                <br>
                <label for="">Ingresa un usuario</label>
                <br>
                <input type="text" name="usuario" id="" placeholder="Usuario">
                <br>
                <label for="">Ingresa una contraseña</label>
                <br>
                <input type="password" name="contrasena" id="" placeholder="Contraseña">
                <br>
                <button>Envía tus datos!</button>
            </form>
        </div>
    </div>
</body>
</html>