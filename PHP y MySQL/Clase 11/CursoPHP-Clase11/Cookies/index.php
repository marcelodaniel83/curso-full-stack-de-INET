<!-- 
    CREAR UNA COOKIE
    setcookie('nombreCookie', valor, expiraciónEnSeg=0)

    LEER UNA COOKIE
    $miCookie = $_COOKIE['nombreCookie']
    
    VERIFICAR SI LA COOKIE EXISTE
    if(isset($_COOKIE['nombreCookie'])) {}
-->

<?php
    $estilo = 0;

    if(isset($_POST['estilo'])) {
        $estilo = (int)$_POST['estilo'];
        setcookie('estilo', $estilo, $expire=0);
    }
    else if(isset($_COOKIE['estilo'])) {
        $estilo = (int)$_COOKIE['estilo'];
    }
    /* echo "<p> estilo: $estilo</p>"; */

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies en PHP</title>
    <link rel="stylesheet" href="css/<?php echo "tema$estilo.css" ?>">

</head>
<body>
    
    <form action="" method="POST">
        <select name="estilo">
            <option value="1" <?= $estilo==1?'selected':'' ?>>
                TEMA 1
            </option>
            <option value="2" <?= $estilo==2?'selected':'' ?>>
                TEMA 2
            </option>
        </select>

        <input type="submit" value="Cambiar Estilo">

    </form>

</body>
</html>