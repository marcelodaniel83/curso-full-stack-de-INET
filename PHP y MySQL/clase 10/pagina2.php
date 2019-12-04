<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina2 - get datos SESSION </title>
</head>
<body>
    
    <?php
        session_start();
        //echo "<p>dato de session: $_SESSION[nombre]</p>";
        
        $nombreUsuario = $_SESSION['nombre'];
        $apellidoUsuario = $_SESSION['apellido'];
        $edadUsuario = $_SESSION['edad'];
        echo "<p>dato de session (nombre): $nombreUsuario</p>";
        echo "<p>dato de session (apellido): $apellidoUsuario</p>";
        echo "<p>dato de session (edad): $edadUsuario</p>";
    ?>

</body>
</html>