<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays en PHP (Parte 2)</title>
</head>

<body style="height:8000px;">
    
    <h1>Arrays en PHP (Parte 2)</h1>

    <!-- ------------------------------------------------------- -->
    <!--  Agregar / Quitar / Reemplazar un elemento en el Array  -->
    <!-- ------------------------------------------------------- -->
    <h2> Agregar / Quitar / Reemplazar un elemento en el Array</h2>

    <?php
        $array = Array(1,2,3,4,5);
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        echo "<p><u>Agregar</u></p>";

        $array[] = 6;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $array[10] = 10;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $array[] = 20;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $array['cadena'] = 'hola';
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        $array[] = 30;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        echo "<p><u>Quitar</u></p>";

        unset($array[3]);
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        echo "<p><u>Cambiar valor</u></p>";
        $array[10] = 333;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
    ?>

    <!-- ------------ -->
    <!-- Array diff   -->
    <!-- ------------ -->
    <h2> Array diff</h2>
    <?php

        $colores1 = Array(
            "Rojo",
            "Verde2",
            "Azul",
            "Violeta",
            "Amarillo"
        );

        $colores2 = Array(
            "Rojo",
            "Verde",
            "Azul",
            "Violeta"
        );

        $resultado = array_diff($colores1,$colores2);
        echo "<pre>";
        var_dump($resultado);
        echo "</pre>";
    ?>

    <!-- ----------------------- -->
    <!-- Ordenamiento de Arrays  -->
    <!-- ----------------------- -->
    <h2>Ordenamiento de Arrays</h2>
   
    <?php
        /* -----------------------
                    SORT
        ------------------------ */
        echo "<p><u>sort</u></p>";

        $colores = Array(
            "Rojo",
            "Verde",
            "Azul",
            "Violeta",
            "Amarillo"
        );


        echo "<pre>";
        var_dump($colores);
        echo "</pre>";

        sort($colores);

        echo "<br>";
        echo "<pre>";
        var_dump($colores);
        echo "</pre>";

        /* -----------------------
                    RSORT
        ------------------------ */
        echo "<p><u>rsort</u></p>";

        $coloresR = Array(
            "Rojo",
            "Verde",
            "Azul",
            "Violeta",
            "Amarillo"
        );


        echo "<pre>";
        var_dump($coloresR);
        echo "</pre>";

        rsort($coloresR);

        echo "<br>";
        echo "<pre>";
        var_dump($coloresR);
        echo "</pre>";

        /* -----------------------
                    KSORT
        ------------------------ */
        echo "<p><u>ksort</u></p>";
        $coloresA1 = Array(
            "color5" => "Rojo",
            "color2" => "Verde",
            "color3" => "Azul",
            "color4" => "Violeta",
            "color1" => "Amarillo"
        );
        echo "<pre>";
        var_dump($coloresA1);
        echo "</pre>";

        ksort($coloresA1);

        echo "<br>";
        echo "<pre>";
        var_dump($coloresA1);
        echo "</pre>";

        /* -----------------------
                    KRSORT
        ------------------------ */
        echo "<p><u>krsort</u></p>";
        $coloresA2 = Array(
            "color5" => "Rojo",
            "color2" => "Verde",
            "color3" => "Azul",
            "color4" => "Violeta",
            "color1" => "Amarillo"
        );
        echo "<pre>";
        var_dump($coloresA2);
        echo "</pre>";

        krsort($coloresA2);

        echo "<br>";
        echo "<pre>";
        var_dump($coloresA2);
        echo "</pre>";

        /* -----------------------
                    ASORT
        ------------------------ */
        echo "<p><u>asort</u></p>";
        $coloresA3 = Array(
            "color5" => "Rojo",
            "color2" => "Verde",
            "color3" => "Azul",
            "color4" => "Violeta",
            "color1" => "Amarillo"
        );
        echo "<pre>";
        var_dump($coloresA3);
        echo "</pre>";

        asort($coloresA3);

        echo "<br>";
        echo "<pre>";
        var_dump($coloresA3);
        echo "</pre>";


        /* -----------------------
                    ARSORT
        ------------------------ */
        echo "<p><u>arsort</u></p>";
        $coloresA4 = Array(
            "color5" => "Rojo",
            "color2" => "Verde",
            "color3" => "Azul",
            "color4" => "Violeta",
            "color1" => "Amarillo"
        );
        echo "<pre>";
        var_dump($coloresA4);
        echo "</pre>";

        arsort($coloresA4);

        echo "<br>";
        echo "<pre>";
        var_dump($coloresA4);
        echo "</pre>";
    ?>
    <!-- ----------------------- -->
    <!--   in_array (búsqueda)   -->
    <!-- ----------------------- -->
    <h2>in_array (búsqueda)</h2>
    <?php
        
        $coloresBusqueda = Array(
            "Rojo",
            "Verde",
            "Azul",
            "Violeta",
            "Amarillo"
        );

        /* con foreach */
        $encontrado = false;
        foreach($coloresBusqueda as $color) {
            if($color == "Violeta") {
                $encontrado = true;
            }
        }
        if($encontrado) {
            echo "<p>Color Encontrado!</p>";
        }
        else {
            echo "<p>Color NO encontrado</p>";
        }

        /* con in_array */
        $color = "Violeta";
        if(in_array($color, $coloresBusqueda)) {
            echo "<p>Color Encontrado!</p>";
        }
        else {
            echo "<p>Color NO encontrado</p>";
        }
    ?>
    <!-- ----------------------- -->
    <!--   Combinando Arrays     -->
    <!-- ----------------------- -->
    <h2>Combinando Arrays</h2>
    <?php
        
        $coloresC1 = Array(
            "Rojo",
            "Verde",
            "Azul",
            "Violeta",
            "Amarillo"
        );

        $coloresC2 = Array(
            "Marron",
            "Rosa",
            "Negro",
            "Blanco",
            "Celeste"
        );
        echo "<pre>";
        var_dump($coloresC1);
        echo "</pre>";

        echo "<br>";

        echo "<pre>";
        var_dump($coloresC2);
        echo "</pre>";

        echo "<br>";

        $coloresC = array_merge($coloresC1, $coloresC2);
        echo "<pre>";
        var_dump($coloresC);
        echo "</pre>";
    ?>

</body>
</html>
