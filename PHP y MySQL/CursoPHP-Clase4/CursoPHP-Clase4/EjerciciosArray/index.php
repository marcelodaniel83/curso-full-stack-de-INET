<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1 - Arrays</title>
</head>
<body>
    
    <?php
        $mesesFacturacion = Array (
            "ENE" => 500,
            "FEB" => 230,
            "MAR" => 134,
            "ABR" => 425,
            "MAY" => 815,
            "JUN" => 632,
            "JUL" => 54,
            "AGO" => 105,
            "SEP" => 123,
            "OCT" => 478,
            "NOV" => 412,
            "DIC" => 953
        );

        $max = $mesesFacturacion['ENE'];
        $maxMes = 'ENE';

        $min = $max;
        $minMes = 'ENE';

        $facturacionTotal = 0;

        foreach($mesesFacturacion as $mes => $facturacion) {
            //calculo el máximo
            if($facturacion > $max) {
                $max = $facturacion;
                $maxMes = $mes;
            }
            //calculo el mínimo
            if($facturacion < $min) {
                $min = $facturacion;
                $minMes = $mes;
            }
            
            $facturacionTotal += $facturacion;
        }

        echo "<p>El mes de máxima facturación ($max) es $maxMes</p>";
        echo "<p>El mes de mínima facturación ($min) es $minMes</p>";
        $promedio = $facturacionTotal / sizeof($mesesFacturacion);
        echo "<p>El promedio de facturación es $promedio</p>";
    ?>

</body>
</html>