<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP / MARIADB</title>

</head>
<body style="height:2000px;">
    
    <?php
        echo "<h2>PHP / MARIADB</h2>";

        try {
            $strconn = 'mysql:host=localhost;dbname=mibase';
            $usuario = 'root';
            $clave = '';
            $pdo = new PDO($strconn, $usuario, $clave);

            echo "<h2>Base de datos conectada!</h2>";

            /* QUERY CON PDO */
            /*
            $clientes = $pdo->query('select id, email, clave from clientes where id=5');

            foreach($clientes as $cliente) {
                echo "<p>Id: $cliente[id]</p>";
                echo "<p>Email: $cliente[email]</p>";
                echo "<p>Clave: $cliente[clave]</p>";
                echo "<p> --------------------------- </p>";
            }
            */

            /* QUERY PARAMETRIZADO CON PDO (con bindValue) */
            $query = 'select id, email, clave from clientes where id=:idbuscado';
            $smtp = $pdo->prepare($query);
            $smtp->bindValue(':idbuscado','5');
            $smtp->execute();

            foreach($smtp->fetchAll(PDO::FETCH_ASSOC) as $cliente) {
                echo "<p>Id: $cliente[id]</p>";
                echo "<p>Email: $cliente[email]</p>";
                echo "<p>Clave: $cliente[clave]</p>";
                echo "<p> --------------------------- </p>";
            }

            /* CIERRO LA CONEXIÓN A LA BASE DE DATOS */
            $pdo = NULL;

            echo "<p>La conexión de base de datos está cerrada</p>";

        }
        catch(Exception $ex) {
            echo "<h2>Error en base de datos</h2>";
            echo "<h3>El error es ".$ex->getMessage()."</h3>";
        }


    ?>



</body>
</html>