<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
</head>
<body>
    
    <div class="container">
        <?php
            session_start();


            $usuario = '';
            $clave = '';
            $usuarioLogueado = isset($_SESSION['logueado']);

            if(!$usuarioLogueado && isset($_POST['usuario']) && isset($_POST['clave'])) {
                $usuario = $_POST['usuario'];
                $clave = $_POST['clave'];
                /* echo "<div class='alert alert-info mt-3'>";
                echo "El usuario es $usuario, con clave $clave";
                echo "</div>"; */

                if($usuario == 'Pepe' && $clave == 1234) {
                    $usuarioLogueado = TRUE;
                    $_SESSION['logueado'] = TRUE;
                }
            }
        ?>

        <?php
            //echo "<p>$usuarioLogueado</p>";
            if($usuarioLogueado) {
                require('login-ok.php');
            }
            else {
                require('form-login.php');
            }
        ?>
    </div>
</body>
</html>