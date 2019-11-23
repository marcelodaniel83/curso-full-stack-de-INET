<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings en PHP</title>
</head>
<body>
    
    <h2>Formulario GET</h2>
    <form action="">
        <input type="text" name="nombre">
        <input type="submit" value="enviar">
    </form>

    <!-- ---------------------------------------------------------
     htmlentities (PREVIENE ATAQUES XSS - CROSS SITE SCRIPING)
    --------------------------------------------------------- -->
    <h2>Formulario POST</h2>
    <h3><?php echo isset($_POST['text'])? htmlentities($_POST['text']):'' ?></h3>
    <form action="" method="post">
        <input type="text" name="text">
        <input type="submit" value="enviar">
    </form>



    <?php
        // ------------------------------------------
        // cifrado rot13
        // ------------------------------------------
        echo "<h4>Mensaje cifrado en rot13</h4>";
        $mensaje = "ABCD";//"HOLA";
        echo "<p>$mensaje</p>";
        $mensajeCifrado = str_rot13($mensaje);
        echo "<p>$mensajeCifrado</p>";

        // ------------------------------------------
        // cifrado md5
        // ------------------------------------------
        echo "<h4>Mensaje cifrado en md5</h4>";
        $mensaje = "123456";
        echo "<p>$mensaje</p>";
        $mensajeCifrado = md5($mensaje);
        echo "<p>$mensajeCifrado</p>";

        // ------------------------------------------
        // cifrado sha-1
        // ------------------------------------------
        echo "<h4>Mensaje cifrado en sha-1</h4>";
        $mensaje = "123456";
        echo "<p>$mensaje</p>";
        $mensajeCifrado = sha1($mensaje);
        echo "<p>$mensajeCifrado</p>";
        $mensajeCifrado = sha1($mensaje);
        echo "<p>$mensajeCifrado</p>";

        // ----------------------------------------------
        // decodificación de cifrado md5 por fuerza bruta
        // ----------------------------------------------
        $password = "123456";
        
        $passwordCifrada = md5($password);
        echo "<p>password: $password, cifrada: $passwordCifrada</p>";
        
        for($i=0; $i<1000000; $i++) {
            if(md5($i) == $passwordCifrada) {
                echo "<p>Te descubrí, la clave es $i</p>";
                break;
            }
        }


        // ------------------------------------------
        // trim, rtrim, ltrim
        // ------------------------------------------
        if(isset($_GET['nombre'])) {
            echo "<p>";
            $nombre = rtrim($_GET['nombre'],'. ');
            var_dump($nombre);
            echo "</p>";
        }

        // ------------------------------------------
        // sprintf
        // ------------------------------------------
        $nombre = "Juan";
        $apellido = "Perez";

        echo "<p>El nombre es $nombre, y el apellido es $apellido</p>";
        echo "<p>El nombre es ".$nombre.", y el apellido es ".$apellido."</p>";
        $frase = sprintf("<p>El nombre es %s, y el apellido es %s %u</p>",$nombre,$apellido, 1234);
        echo $frase;
        echo sprintf("<p>El nombre es %s, y el apellido es %s %u</p>",$nombre,$apellido, 9658);

        // ------------------------------------------
        // str_pad
        // ------------------------------------------
        for($i=0; $i<20; $i++){
            $num = str_pad($i,3,'0', STR_PAD_LEFT);
            echo "<p>$num</p>";
        }

        // ------------------------------------------
        // str_repeat
        // ------------------------------------------
        echo str_repeat('Hola mundo ', 5);

        // ------------------------------------------
        // substr
        // ------------------------------------------
        $string = "Hola mundo";
        $cadena = substr($string,3,3);
        echo "<p>$cadena</p>";
    ?>

    <?php
        // ------------------------------------------
        // intro / strlen
        // ------------------------------------------
        $palabra = "Hola!";
        echo "<p>$palabra</p>";
        echo "<p>0 -> $palabra[0]</p>";
        echo "<p>1 -> $palabra[1]</p>";
        echo "<p>2 -> $palabra[2]</p>";
        echo "<p>3 -> $palabra[3]</p>";

        for($i=0; $i<strlen($palabra); $i++) {
            echo sprintf("<p>%u -> %s</p>",$i,$palabra[$i]);
        }
    ?>

</body>
</html>