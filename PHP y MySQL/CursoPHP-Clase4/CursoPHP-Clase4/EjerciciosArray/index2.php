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
        $personas = Array("Juan", "Martín", "Nicolás", "Miguel", "Carlos");
        sort($personas);
    ?>
    <table>
        <tr>
            <th>Indice</th>
            <th>Nombre</th>
        </tr>
        <?php
            /*
            foreach($personas as $index => $persona) {
                echo "<tr> <td>$index</td> <td>$persona</td> </tr>";
            }
            */
            for($i=0; $i<sizeof($personas); $i++) {
                echo "<tr> <td>$i</td> <td>$personas[$i]</td> </tr>";
            }
        ?>
    </table>

</body>
</html>
