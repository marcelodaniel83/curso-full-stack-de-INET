<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clase 6 - PHP</title>
</head>
<body style="height:2000px;">
    
    <?php
        echo "<h2>Clase 6 - PHP!</h2>";

        /* ----------------------------
                    SUBSTR
        -------------------------------*/
        $string = "Hola mundo";
        echo "<p>$string</p>";

        $cadena = substr($string,2,5);
        echo "<p>$cadena</p>";

        $cadena = substr($string,6);
        echo "<p>$cadena</p>";

        /* ----------------------------
                    STRPOS
        -------------------------------*/
        /*
        if(isset($_POST['texto'])) {
            $tienePunto = strpos($_POST['texto'],'.');
            //echo "<p>$tienePunto</p>";
            if($tienePunto !== FALSE) {
                echo "El mensaje tiene un punto";
            }
            else {
                echo "El mensaje NO tiene un punto";
            }
        }
        */

        /* ----------------------------
                STRPOS y SUBSTR
        -------------------------------*/
        if(isset($_POST['texto'])) {
            $offset = strrpos($_POST['texto'],' ');
            echo "<p>$offset</p>";

            $primeraPalabra = substr(
                $_POST['texto'], 0,
                strpos($_POST['texto'],' ')
            );
            echo "<p>Primera Palabra: $primeraPalabra</p>";

            $ultimaPalabra = substr(
                $_POST['texto'], strrpos($_POST['texto'],' ')
                
            );
            echo "<p> Ultima Palabra: $ultimaPalabra</p>";
        }
        /* ----------------------------
                STRTOLOWER y STRTOUPPER
        -------------------------------*/
        $string = "HoLa MuNdO";
        $stringAMinuscula = strtolower($string);
        $stringAMayuscula = strtoupper($string);
        echo "<p>El string a mayúscula es $stringAMayuscula</p>";
        echo "<p>El string a minúscula es $stringAMinuscula</p>";

        /* ----------------------------
                UCWORDS y UCFIRST
        -------------------------------*/
        $string = "hola mundo como están";
        $string1 = ucwords($string);
        $string2 = ucfirst($string);
        echo "<p>UCWORDS:  $string1</p>";
        echo "<p>UCFIRST: $string2</p>";
        
        /* ----------------------------
                IS_NUMERIC
        -------------------------------*/
        $dato = "12n34";
        if(is_numeric($dato)) {
            echo "<p>El dato $dato es un número</p>";
        }
        else {
            echo "<p>El dato $dato NO es un número</p>";
        }
        /* ----------------------------
               EMPTY / ISSET
        -------------------------------*/
        //$a = 0;
        if(isset($a)) {
            echo "<p>La variable existe</p>";
        }
        else {
            echo "<p>La variable NO existe</p>";
        }

        if(empty($a)) {
            echo "<p>La variable está vacía</p>";
        }
        else {
            echo "<p>La variable NO está vacía</p>";
        }
        /* ----------------------------
               ROUND / CEIL / FLOOR
        -------------------------------*/
        $numeroDecimal = 8.96;
        $numeroDecimalRound = round($numeroDecimal,1);
        $numeroDecimalCeil = ceil($numeroDecimal);
        $numeroDecimalFloor = floor($numeroDecimal);

        echo "<p>ORG: $numeroDecimal</p>";
        echo "<p>Round: $numeroDecimalRound</p>";
        echo "<p>Ceil: $numeroDecimalCeil</p>";
        echo "<p>Floor: $numeroDecimalFloor</p>";

    ?>

    <form action="" method="post">
        <input type="text" name="texto">
        <input type="submit" value="enviar">
    </form>

</body>
</html>