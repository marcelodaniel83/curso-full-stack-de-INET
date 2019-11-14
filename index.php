<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays en PHP</title>

    <style>
        table, tr, th, td {
            border: 1px solid black;
            border-collapse : collapse;
        }
    
    </style>

</head>
<body style="height: 2000px;">
    
    <h1>Arrays en PHP</h1>

    <!-- -------------------------------- -->
    <!--           Presentación           -->
    <!-- -------------------------------- -->
    <h2>Presentación</h2>
    <?php
        $colores = Array(
                    "Rojo",
                    "Azul",
                    "Verde",
                    "Magenta",
                    "Amarillo",
                    "Indigo"
        );

        //echo "<p>$colores</p>";

    ?>
    <p><u>Tipo de array y sus elementos</u></p>
    <pre>
        <?php
            var_dump($colores);
        ?>
    </pre>

    <p><u>Acceso con notación corchete</u></p>
    <?php
        echo "<p>El color en el indice 0 es $colores[0]</p>";
    ?>
    <?php
        $colores2 = Array(
                    20 => "Rojo",
                    21 => "Azul",
                    22 => "Verde",
                    23 => "Magenta"
        );
        echo "<p>El color en el indice 20 es $colores2[20]</p>";
    ?>
    <pre>
        <?php
            var_dump($colores2);
        ?>
    </pre>
    
    <!-- -------------------------------- -->
    <!--       Arrays y Strings           -->
    <!-- -------------------------------- -->
    <h2>Arrays y Strings</h2>
    
    <?php
        $string = "Hola mundo como estas!";

        echo "<p>$string</p>";

        echo "<p>El caracter 0 del string es $string[0]</p>";
        echo "<p>El caracter 1 del string es $string[1]</p>";


        $array = explode(' ', $string);
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $newString = implode('-*-',$array);
        echo $newString;
    ?>

    <!-- -------------------------------- -->
    <!--  Ciclo For para recorrer Arrays  -->
    <!-- -------------------------------- -->
    <h2>Ciclo For para recorrer Arrays</h2>

    <?php
        $cantidadTotal = sizeof($colores);

        echo "El número de elementos del array es: $cantidadTotal";

        for($i=0; $i<$cantidadTotal; $i++) {
            echo "<p>$colores[$i]</p>";
        }
    ?>

    <!-- -------------------------------- -->
    <!--       Indices Asociados          -->
    <!-- -------------------------------- -->
    <h2>Indices Asociados</h2>
    <?php
        $persona = Array(
            "nombre" => "Juan",
            "apellido" => "Gomez",
            "edad" => 28,
            "dni" => "20543678"
        );
        echo "<pre>";
        var_dump($persona);
        echo "</pre>";
    
        echo $persona["nombre"];
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>DNI</th>
        </tr>
        <tr>
            <!-- <td><?php echo $persona["nombre"];?></td> -->
            <td><?= $persona["nombre"];?></td>
            <td><?= $persona["apellido"];?></td>
            <td><?= $persona["edad"];?></td>
            <td><?= $persona["dni"];?></td>
        </tr>
    
    </table>

    <!-- -------------------------------- -->
    <!--   Foreach (para recorrer arrays) -->
    <!-- -------------------------------- -->
    <h2>Foreach (para recorrer arrays)</h2>
    <?php

        $coloresAsociativos = Array(
            "color1" => "Rojo",
            "color2" => "Azul",
            "color3" => "Verde",
            "color4" => "Magenta",
            "color5" => "Amarillo",
            "color6" => "Indigo"
        );

        foreach($coloresAsociativos as $color) {
            echo "<p>$color</p>";
        }
        echo "<br>";
        foreach($coloresAsociativos as $key => $value) {
            echo "<p>$key - $value</p>";
        }
    ?>

</body>
</html>