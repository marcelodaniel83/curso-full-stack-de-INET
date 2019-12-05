<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clase DateTime</title>
</head>
<body>
    
    <?php

        //https://www.php.net/manual/es/timezones.php
        date_default_timezone_set('America/Argentina/Buenos_Aires');

        // ---------------------------------------------------------
        // lectura de los usuarios de una tabla y calculo de su edad
        // ---------------------------------------------------------
        try {
            $dsn = "mysql:server=localhost;dbname=test";
            $pdo = new PDO($dsn, 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "select id,nombre,apellido,nacimiento from usuarios";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            foreach($stmt->fetchAll() as $row) {
                $fechaNacimiento = DateTime::createFromFormat('Y-m-d',$row['nacimiento']);
                $hoy = new DateTime('now');
                $diferencia = $hoy->diff($fechaNacimiento);


                echo "<p>";
                echo $row['nombre']." ";
                echo $row['apellido']." ";
                echo $row['nacimiento'];
                echo $diferencia->format(' - Tiene %Y años de edad');
                echo "</p>";
            }

            $pdo = NULL;
        }
        catch( Exception $ex) {
            echo $ex->getMessage();
        }

        echo "<hr>";


        $fecha = DateTime::createFromFormat('d/m/Y H:i:s', '4/12/2019 16:30:00');
        echo "<p>".$fecha->format('Y-m-d')."</p>";
        echo "<p>".$fecha->format('d/m/y')."</p>";

        $fecha1 = DateTime::createFromFormat('d/m/Y H:i:s', '29/11/1968 02:30:00');
        $fecha2 = DateTime::createFromFormat('d/m/Y H:i:s', '4/12/2019 16:30:00');

        echo "<p>La diferencia horaria entre fecha1 y fecha 2 es ...</p>";
        
        $diferencia = $fecha1->diff($fecha2);
        $formato = "%y años, %m meses, %d dias, %h horas, %i minutos, %s segundos";
        echo "<p>".$diferencia->format($formato)."</p>";


        date_default_timezone_set('UTC');
        $fecha1 = new DateTime('now');
        echo "<p>La fecha actual es ".$fecha1->format('Y-m-d H:i:s')."</p>";

        $timestamp = $fecha1->getTimestamp();
        echo "<p>timestamp: $timestamp</p>";

        $fecha2 = DateTime::createFromFormat('U', $timestamp - 3600);
        echo "<p>La fecha actual menos una hora es ".$fecha2->format('Y-m-d H:i:s')."</p>";

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fecha1 = new DateTime('now');
        echo "<hr>";
        echo "<p>La fecha actual es ".$fecha1->format('Y-m-d H:i:s')."</p>";
        echo "<p>La fecha actual mas 1 dia es ".$fecha1->modify('+1 day')->format('Y-m-d H:i:s')."</p>";
        echo "<p>La fecha actual menos 1 mes es ".$fecha1->modify('-1 month')->format('Y-m-d H:i:s')."</p>";

       
    ?>

</body>
</html>