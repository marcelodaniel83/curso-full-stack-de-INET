<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Bienvenidos a PHP</h1>
    <?php
        ini_set('display_errors','On');
        error_reporting(E_ALL);

        echo "Hola mundo!";
        echo "<br>";
        $nombre = "Juan";
        $apellido = "Perez";
        $edad = 30;
        //echo 'El nombre es '.$nombre."!!!!";
        //echo $nombre;
        //echo "<br>";
        //echo "La edad es $edad";
        //echo $edad;
        echo "El nombre es <b>$nombre $apellido</b> y La edad es <i>$edad</i>";
        echo "<hr>";

        $x = 10;
        $y = 3;
        //$x = $x + 1;
        
        //suma reducida
        echo "<h3>Con los números $x y $y</h3>";
        $xs = $x;
        $xs += $y;
        echo "La suma es: $xs<br>";

        //resta reducida
        $xr = $x;
        $xr -= $y;
        echo "La resta es: $xr<br>";

        //multiplicación reducida
        $xm = $x;
        $xm *= $y;
        echo "La multiplicación es: $xm<br>";

        //división reducida
        $xd = $x;
        $xd /= $y;
        echo "La división es: $xd<br>";

        echo "<hr>";


        $var = "Diego";
        $Var = "Gomez";
        echo "<br>$var, $Var";

        echo "<hr>";
        $numero = 13;
        echo "<p>Valor de la variable $numero<p>";
        if($numero < 10) {
            echo 'El valor de la variable es menor que 10';
        }
        else if($numero >= 10 and $numero < 20) {
            echo 'La variable está entre 10 y 19';
        }
        else if($numero >= 20 && $numero < 30) {
            echo 'La variable está entre 20 y 29';
        }
        else {
            echo 'El valor de la variable es mayor o igual a 30';
        }
    ?>

</body>
</html>
