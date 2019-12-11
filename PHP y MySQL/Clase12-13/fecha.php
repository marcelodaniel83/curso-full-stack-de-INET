<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fecha desde DB</title>
</head>
<body>
    
    <a href="enviar-mail">Enviar mail</a>

    <?php

        echo "<p>Leer fecha dB</p>";

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        //$fecha = DateTime::createFromFormat('d/m/Y H:i:s','03/05/2001 14:45:00');
        $fecha = new DateTime('now');
        echo "<p>".$fecha->format('Y-m-d')."</p>";    
        echo "<p>".$fecha->format('d/m/y')."</p>";    
        die();

        $fecha1 = DateTime::createFromFormat('d/m/Y H:i:s','03/05/2001 14:45:00');
        $fecha2 = DateTime::createFromFormat('d/m/Y H:i:s','18/07/2011 08:50:00');
        $diferencia = $fecha1->diff($fecha2);

        $formato = "difrencia = %Y, %m , %d, --- %h, %i, %s";
        echo "<p>".$diferencia->format($formato)."</p>";    
        die();


        date_default_timezone_set('UTC');
        $fecha = new DateTime('now');
        echo "La fecha actual es ".$fecha->format('d/m/y h:i:s');
        $timestamp = $fecha->getTimestamp();
        echo "<p>$timestamp</p>";

        $fecha2 = DateTime::createFromFormat('U',$timestamp-3600);
        echo "La fecha  menos una hora es ".$fecha2->format('d/m/y h:i:s');

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        echo "<p> fecha actu mas un dia: ".$fecha->modify('+1 day')->format('d/m/Y h:i:s')."</p>";
        echo "<p>fecha actu menos un mes: ".$fecha->modify('-1 month')->format('d/m/Y h:i:s')."</p>";


        die();
        
        try {
            $dsn = "mysql:server=localhost;dbname=test";
            $pdo = new PDO($dsn,'root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "select id,nombre,apellido, nacimiento from usuarios";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            foreach($stmt->fetchAll() as $row) {
                $fecha = DateTime::createFromFormat('Y-m-d', $row['nacimiento']);
                $hoy = new Datetime('now');
                $diferencia = $hoy->diff($fecha);

                echo "<p>";
                echo $row['nombre'];
                echo " ";
                echo $row['apellido'];
                echo " -> ";
                echo $row['nacimiento'];
                echo " -> ";
                echo $fecha->format('d/m/Y');
                echo " -> ";
                echo $diferencia->format('tiene %Y años');
                echo "</p>";
            }
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    ?>

</body>
</html>