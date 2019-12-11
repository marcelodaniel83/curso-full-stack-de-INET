<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPMailer</title>
</head>
<body>
    
    <?php
        /*Lo primero es añadir al script la clase phpmailer desde la ubicación en que esté*/
        require("PHPMailer-master/src/PHPMailer.php");
        require("PHPMailer-master/src/SMTP.php");
        require("PHPMailer-master/src/Exception.php");

        
        //Crear una instancia de PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer();//PHPMailer();
        /*
        $mail -> From = "cursonodeav@gmail.com";
        $mail -> FromName = "Algo";
        $mail -> AddAddress ("danielsanchez1968@gmail.com");
        $mail -> Subject = "Test";
        $mail -> Body = "<h3>desde gmail!</h3>";
        $mail -> IsHTML (true);
        
        $mail->IsSMTP();
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = 'cursonodeav@gmail.com';
        $mail->Password = 'NodeAv-123';
        
        if(!$mail->Send()) {
           echo 'Error: ' . $mail->ErrorInfo;
        }
        else {
           echo 'Mail enviado!';
        }
        die();
        */
        //Definir que vamos a usar SMTP
        $mail->IsSMTP();
        //Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
        // 0 = off (producción)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug  = 2;
        //Ahora definimos gmail como servidor que aloja nuestro SMTP
        $mail->Host       = 'smtp.gmail.com';
        //El puerto será el 587 ya que usamos encriptación TLS
        $mail->Port       = 587;
        //Definmos la seguridad como TLS
        $mail->SMTPSecure = 'tls';
        //Tenemos que usar gmail autenticados, así que esto a TRUE
        $mail->SMTPAuth   = true;
        //Definimos la cuenta que vamos a usar. Dirección completa de la misma
        $mail->Username   = "cursonodeav@gmail.com";
        //Introducimos nuestra contraseña de gmail
        $mail->Password   = "NodeAv-123";
        //Definimos el remitente (dirección y, opcionalmente, nombre)
        $mail->SetFrom('cursonodeav@gmail.com', 'Daniel');
        //Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
        $mail->AddReplyTo('replyto@correoquesea.com','El de la réplica');
        //Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
        $mail->AddAddress('danielsanchez1968@gmail.com', 'El Destinatario');
        //Definimos el tema del email
        $mail->Subject = 'Fotos de paisajes';
        //Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
        //$mail->MsgHTML(file_get_contents('correomaquetado.html'), dirname(ruta_al_archivo));
        $mail->MsgHTML('Mira estas fotos!!!');
        //Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
        $mail->AltBody = 'This is a plain-text message body';

        //Attach an image file
        $mail->addAttachment('imagenes/paisaje1.jpg');
        $mail->addAttachment('imagenes/paisaje2.jpg');

        //Enviamos el correo
        if(!$mail->Send()) {
            echo "Error: " . $mail->ErrorInfo;
        } else {
            echo "Enviado!";
        }
    ?>

</body>
</html>