<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deslogueo</title>
</head>
<body>
    
    <?php
        session_start();
        setcookie(session_name(),null);
        session_unset();
        session_destroy();

        echo "<p>";
        var_dump($_SESSION);
        echo "</p>";

    ?>


</body>
</html>