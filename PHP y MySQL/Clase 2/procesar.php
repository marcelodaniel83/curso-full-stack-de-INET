<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proceso PHP</title>
</head>
<body>

    <?php
        echo "<h1>Proceso PHP</h1>";

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = '';
            $clave = '';
            if(isset($_POST['usuario'])) {
                $usuario = $_POST['usuario'];
            }
            if(isset($_POST['clave'])) {
                $clave = $_POST['clave'];
            }

            echo "<h3>El usuario es $usuario, y la clave es $clave</h3>";

            if($usuario == 'Juan' && $clave == '1234') {
                echo "<h2 style='color: green;'>Bienvenido</h2>";
            }
            else {
                echo "<h2 style='color: red;'>Acceso denegado</h2>";
            }
        }
    ?>

    <?php
        $numero = 1;
        $numeroDecimal = 3.14152;
        $string = 'Hola';
        $objeto = new stdClass();
        $array = Array(1,'hola',5);
    ?>
    
    <pre>
    <?php
        var_dump($numero);
        var_dump($numeroDecimal);
        var_dump($string);
        var_dump($objeto);
        var_dump($array);
    ?>
    </pre>

    <?php
        echo "<h3>Nomenclaturas de variables y funciones y demás</h3>";
        echo "<ul>";
        echo "<li>lowerCamelCase</li>";
        echo "<li>UpperCamelCase</li>";
        echo "<li>snake_case</li>";
        echo "</ul>";
    ?>

</body>
</html>
