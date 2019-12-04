<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comprobacion session activa</title>
</head>
<body>
    
    <?php
        session_start();
        echo "<p>$_SESSION[username]</p>";
        echo "<p>$_SESSION[password]</p>";
        echo "<p>$_SESSION[alias]</p>";

        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";
    ?>

</body>
</html>