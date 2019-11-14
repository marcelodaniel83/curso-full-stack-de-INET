<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciclos de iteración</title>

    <style>
        table,tr,th,td {
            border: 1px solid black;
            border-collapse : collapse;
        }
    </style>

</head>
<body>
    
    <h1><u>Ciclos de iteración</u></h1>
    <?php
        echo "<h2>Estructura do-while</h2>";
        $contador = 0;
        do {
            echo "$contador<br>";
            $contador++;
        }
        while($contador < 10);
    ?>
    <hr>
    <?php
        echo "<h2>Estructura while</h2>";
        $contador = 0;
        while($contador < 10) {
            echo "$contador<br>";
            $contador++;
        }
    ?>
    <hr>
    <?php
        echo "<h2>Estructura for</h2>";
        for($contador=0; $contador<10; $contador++) {
            echo "$contador<br>";
        }
    ?>
    <hr>
    <?php
        echo "<h2>pre-incremento / post-incremento</h2>";
        $dato = 50;
        echo "dato: $dato<br>";

        $preIncrementoDato = ++$dato;
        echo "preIncrementoDato: $preIncrementoDato<br>";

        $dato = 50;
        $postIncrementoDato = $dato++;
        echo "postIncrementoDato: $postIncrementoDato<br>";
    ?>

    <?php
        echo "<hr>";

        echo "<h2>Lista desordenada con for</h2>";
        echo "<ul>";
        for($item=1; $item<=3; $item++) {
            echo "<li>item$item</li>";
        }
        echo "</ul>";
        echo "<hr>";

        echo "<h2>Lista desordenada con while</h2>";
        echo "<ul>";
        $item=1;
        while($item<=3) {
            echo "<li>item$item</li>";
            $item++;
        }
        echo "</ul>";
        echo "<hr>";

        echo "<h2>Lista desordenada con do while</h2>";
        echo "<ul>";
        $item=1;
        do {
            echo "<li>item$item</li>";
            $item++;
        }
        while($item<=3);
        echo "</ul>";
        echo "<hr>";

        echo "<h2>Tabla con For</h2>";

        $cantidadDeFilas = 20;
        echo "<table>";
        for($fila=0; $fila<$cantidadDeFilas; $fila++) {
            //if($fila == 7) continue;
            //if($fila % 2) continue;
            $color = ($fila % 2)?'orange':'brown';
            if($fila == 0) $color = 'magenta';

            echo "<tr style='color:$color;'>";
                if($fila == 0) {
                    echo "<th>ITEM</th> <th>PRECIO</th>";
                }
                else {
                    echo "<td>$fila</td> <td>USD$fila</td>";
                }
            echo "</tr>";
            //if($fila == 7) break;
        }
        echo "</table>";

        echo "<hr>";
        echo "<h2>Tabla Dinámica</h2>";

        $cantFilas = 30;
        $cantidadColumnas = 35;
        echo "<table>";
            for($fila=0; $fila<$cantFilas; $fila++) {
                echo "<tr>";
                    for($columna=0; $columna<$cantidadColumnas; $columna++) {
                        $color = 'white';
                        $bgc = ($columna % 2)? 'blue': 'lightblue';
                        
                        //bgc por fila
                        if($fila == 1) $bgc = 'teal';
                        else if($fila == 2) $bgc = 'red';
                        else if($fila == 3) $bgc = 'green';

                        /*
                        //bgc por columna (con if else if)
                        if($columna == 1) $bgc = 'orange';
                        else if($columna == 2) $bgc = 'olive';
                        else if($columna == 3) $bgc = 'cornflowerblue';
                        */
                        switch($columna) {
                            case 1:
                                $bgc = 'orange';
                                break;

                            case 2:
                                $bgc = 'olive';
                                break;

                            case 3: 
                                $bgc = 'cornflowerblue';
                                break;

                            case 4: 
                                $bgc = 'limegreen';
                                break;

                            default:
                                break;
                        }

                        //bgc por celda
                        if($fila == 4 && $columna == 8) $bgc = 'magenta';
                        

                        echo "<td style='background-color:$bgc; color: $color;'>";
                            echo "($fila,$columna)";
                        echo "</td>";
                    }
                echo "</tr>";
            }
        echo "</table>";

    ?>



</body>
</html>
