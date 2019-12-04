<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logueo</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['username'] = 'Pepe';
        $_SESSION['password'] = '1234';
        $_SESSION['alias'] = 'Pepito';

        echo "<p>Session establecida!</p>";
        /* echo "<p>$_SESSION[username]</p>"; */
    ?>

</body>
</html>