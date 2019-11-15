<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2 - Arrays</title>

    <style>
        table,th,th,td {
            border: 1px solid black;
            border-collapse:  collapse;
        }
    
    </style>


</head>
<body>
    
    <?php
        $alumnos = Array(
            "Juan" => 5,
            "Martín" => 7,
            "Nicolás" => 10,
            "Miguel" => 2,
            "Carlos" => 8
        );

        $max = $alumnos['Juan'];
        $min = $max;
        $sumaTotal = 0;
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
        </tr>
        <?php
            foreach($alumnos as $nombre => $nota) {
                echo "<tr> <td>$nombre</td> <td>$nota</td> </tr>";

                //calculo el máximo
                if($nota > $max) {
                    $max = $nota;
                }
                //calculo el mínimo
                if($nota < $min) {
                    $min = $nota;
                }
                
                $sumaTotal += $nota;                
            }
        ?>
    </table>

    <?php
        echo "<p>La nota máxima es $max</p>";
        echo "<p>La nota mínima es $min</p>";
        $promedio = $sumaTotal / sizeof($alumnos);
        echo "<p>El promedio de notas es $promedio</p>";
    ?>


</body>
</html>
