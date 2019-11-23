<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones continuación</title>
</head>
<body>
    
    <?php
        //$contador = 0;
        function contar() {
            static $contador = 0;
            //global $contador;
            //$contador = 0;
            $contador++;
            echo "<p>$contador</p>";
        }
        contar();
        contar();
        contar();

        function calcularIva($total,$iva=21) {
            $iva = ($total*$iva)/100;
            echo "<p>El iva es $iva</p>";
        }

        calcularIva(1000,17);

        /* ------------------------------ */
        /* PASAJE DE PARÁMETROS POR VALOR */
        /* ------------------------------ */
        function saludarConCopia($nombre) {
            $nombre = "Hola $nombre";
            echo $nombre;
        }

        $miNombre = 'Juan';
        echo saludarConCopia($miNombre);
        echo "<p>$miNombre</p>";

        function saludarSinCopia($nombre) {
            echo "<p>Hola $nombre</p>";
        }
        $miNombre2 = 'Pedro';
        echo saludarSinCopia($miNombre2);
        echo "<p>$miNombre2</p>";


        /* ----------------------------------- */
        /* PASAJE DE PARÁMETROS POR REFERENCIA */
        /* ----------------------------------- */
        function saludar(&$nombre) {
            $nombre = "Hola $nombre";
            echo $nombre;
        }

        $miNombre = 'Juan';
        echo saludar($miNombre);
        echo "<p>$miNombre</p>";
    ?>


</body>
</html>