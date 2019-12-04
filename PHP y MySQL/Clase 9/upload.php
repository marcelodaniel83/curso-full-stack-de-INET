<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Image</title>
</head>
<body>



    <?php
        /*
        http://www.gimp.org.es/descargar-gimp.html   --> GIMP (para cambiar el tamaño de las imágenes)

        // ------------------------------------------------------------------------
        // CAMBIO DE CONFIGURACION DEL SERVIDOR APACHE PARA PERMITIR SUBIR ARCHIVOS GRANDES
        // ------------------------------------------------------------------------
        // -----------------
        C:\xampp\php\php.ini
        // -----------------

        ; Maximum allowed size for uploaded files.
        ; http://php.net/upload-max-filesize
        upload_max_filesize=2M

        ; Maximum size of POST data that PHP will accept.
        ; Its value may be 0 to disable the limit. It is ignored if POST data reading
        ; is disabled through enable_post_data_reading.
        ; http://php.net/post-max-size
        post_max_size=8M
        */

    echo "<p>";
        var_dump($_FILES);
        echo "</p>";
        $upload = FALSE;
        $error = '';
        if(isset($_FILES['archivo'])) {
            //echo "<p>Archivo Subido</p>";
            $upload = FALSE;
            $error = '';
            
            $subidaOk = $_FILES['archivo']['error'] == 'UPLOAD_ERR_OK';
            if($subidaOk) {

                $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
                echo "<p>finfo_file -> ";
                $resfinfo =  finfo_file($fileInfo,$_FILES['archivo']['tmp_name']);
                echo $resfinfo;
                echo "</p>";
                //die('Interrumpi aquí');

                $esImagen = getimagesize($_FILES['archivo']['tmp_name']);
                if($esImagen) {
                    move_uploaded_file($_FILES['archivo']['tmp_name'], 'upload/'.$_FILES['archivo']['name']);
                    $upload = TRUE;
                }
                else {
                    $error = 'El archivo no es una imagen';
                }
            }
            else {
                $error = 'La archivo no pudo subirse correctamente';
            }
        }

    ?>

    <h2>
        <?php echo $upload? 'Se subió el archivo de modo correcto':''; ?>
    </h2>
    <h3 style="color:red;">
        <?php echo $error; ?>
    </h3>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="Subir Archivo">
    </form>

</body>
</html>