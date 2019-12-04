<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina1 - set datos SESSION</title>
</head>
<body>
    
    <?php
        session_start();
        /* $_SESSION['nombre'] = 'Juan';
        $nombreUsuario = 'Pedro'; */

        $nombreUsuario = 'Pedro';
        $apellidoUsuario = 'Gonzalez';
        $edadUsuario = 32;
        $_SESSION['nombre'] = $nombreUsuario;
        $_SESSION['apellido'] = $apellidoUsuario;
        $_SESSION['edad'] = $edadUsuario;
    ?>












</body>
</html>