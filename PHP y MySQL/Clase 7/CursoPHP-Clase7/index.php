<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivos Parte 2</title>
</head>
<body style="height: 2000px;">
    
    <?php
        echo "<h2>PHP Archivos Parte 2</h2>";
   
        /* ---------------------------------------------------------
           FILE (leer archivos remotos o locales en una sola linea)
        --------------------------------------------------------- */
        $archivoLocal = file('texto.txt');
        //$archivoLocal = file('https://www.google.com/');
        
        echo "<p>";
        var_dump($archivoLocal);
        echo "</p>";

        /* ---------------------------------------------------------
           FILE_EXISTS (verificar si un archivo existe)
        --------------------------------------------------------- */
        $archivo = 'texto.txt';
        if(file_exists($archivo)) {
            echo "<p>El archivo $archivo existe</p>";
        }
        else {
            echo "<p>El archivo $archivo NO existe</p>";
        }

        if(is_readable($archivo)) {
            echo "<p>El archivo $archivo está habilitado para lectura</p>";
        }
        else {
            echo "<p>El archivo $archivo NO está habilitado para lectura</p>";
        }

        if(is_writable($archivo)) {
            echo "<p>El archivo $archivo está habilitado para escritura</p>";
        }
        else {
            echo "<p>El archivo $archivo NO está habilitado para escritura</p>";
        }

        /* ---------------------------------------------------------
           RENOMBRADO y BORRANDO ARCHIVOS
        --------------------------------------------------------- */
        /*
        $archivoNuevo = 'texto.txt';
        if(is_writable($archivo)) {
            if(rename($archivo, $archivoNuevo)) {
                echo "<p>El archivo $archivo fue nombrado a $archivoNuevo</p>";
            }
            else {
                echo "<p>El archivo $archivo no pudo ser renombrado</p>";
            }
        }
        else {
            echo "<p>El archivo $archivo NO está habilitado para escritura</p>";
        }

        $archivoNuevo = 'texto.txt';
        if(file_exists($archivo)) {
            if(is_writable($archivo)) {
                if(unlink($archivo)) {
                    echo "<p>El archivo $archivo fue borrado</p>";
                }
                else {
                    echo "<p>El archivo $archivo no pudo ser borrado</p>";
                }
            }
            else {
                echo "<p>El archivo $archivo NO está habilitado para escritura</p>";
            }
        }
        else {
            echo "<p>El archivo $archivo NO EXISTE!</p>";
        }
        */
        /* ---------------------------------------------------------
            ABRIR CARPETA (directorio) y VER SU CONTENIDO
        --------------------------------------------------------- */
        echo "<h3>Estructura de ".__DIR__."</h3>";
        $dp = opendir(__DIR__);
        while($archivo = readdir($dp)) {
            $rutaCompleta = __DIR__.'\\'.$archivo;

            $tipoDeEntrada = 'un ARCHIVO';
            if(is_dir($rutaCompleta)) {
                $tipoDeEntrada = 'una CARPETA';
            }
            echo "<p>La entrada $archivo es $tipoDeEntrada</p>";
        }
        closedir($dp);

        /* ---------------------------------------------------------
            CREAR CARPETA (directorio)
        --------------------------------------------------------- */
        /*
        $nombreCarpeta = "imagenes";
        if(mkdir($nombreCarpeta)) {
            echo "<p>Se ha creado la carpeta $nombreCarpeta</p>";
        }
        */










    ?>

</body>
</html>