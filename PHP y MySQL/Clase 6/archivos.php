<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivos en PHP</title>
</head>
<body>
    
    <?php
        if(count($_POST)){
            $fp = fopen('encuesta.txt','a+');
            foreach($_POST as $name => $value) {
                fwrite($fp, "$name: $value".PHP_EOL);
            }
            fwrite($fp, "-------------------------".PHP_EOL);
            fclose($fp);
        }
    ?>

    <form action="" method="post">
        Nombre <input type="text" name="nombre">
        Apellido <input type="text" name="apellido">
        Edad <input type="text" name="edad">
        Comentarios <input type="text" name="comentarios">
        <input type="submit" value="Enviar Información">
    </form>
    <hr>
    <hr>


    <?php
        /*
        $fp = fopen('texto.txt', 'a+');
        fwrite($fp, "Hola que tal\n");
        fclose($fp);
        */
        $contador = 0;
        $fp = fopen('texto.txt','r');
        /* while($linea = fgets($fp)) { */
        while($linea = fread($fp,1024)) {
            $contador++;
            /* echo "<p>Linea $contador -> [$linea]</p>"; */
            echo "<pre>";
            echo $linea;//var_dump($linea);
            echo "</pre>";
        }
        fclose($fp);


        /*  ---------------------------------
                    CONSTANTES
         ------------------------------------*/
         define('NUMERO_PI',3.1415269);
         //define('NUMERO_PI',456789);

         echo "<p>El valor de pi es: ".NUMERO_PI."<p>";

        /*  ---------------------------------
                 CONSTANTES MÁGICAS
         ------------------------------------*/
         echo "<p>contenido de __FILE__: ".__FILE__."<p>";
         echo "<p>contenido de __DIR__: ".__DIR__."<p>";
         echo "<p>contenido de __LINE__: ".__LINE__."<p>";

         function test() {
            echo "<p>contenido de __FUNCTION__: ".__FUNCTION__."<p>";
         }
         test();
    ?>



</body>
</html>