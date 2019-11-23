<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App PHP</title>
</head>
<body>

    <?php
        require("verificar.php");
        require("formulario.html");
        //verifico que los campos de usuario y clave hayan sido enviados
        if(  
            isset($_GET['usuario']) &&
            isset($_GET['alias']) &&
            isset($_GET['clave'])
        ){
            validar($_GET['usuario'],$_GET['alias'],$_GET['clave']);
        }
    ?>


    <?php
        require("procesar.php");
        require("plantilla.html");

        dobleDe(isset($_GET['valor'])? $_GET['valor'] : 0);
    
    ?>

</body>
</html>