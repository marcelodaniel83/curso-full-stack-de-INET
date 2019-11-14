<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    
    <?php
        // ----------------------------------------------
        //proceso los datos del formulario por método GET
        // ----------------------------------------------
        if(isset($_GET['usuario'])) {
            $usuario = $_GET['usuario'];
            echo "<p>El usuario ingresado (get) es $usuario </p>";
            /* echo "<p>El usuario ingresado es ".$_GET['usuario']."</p>";*/
        }
        if(isset($_GET['password'])) {
            $password = $_GET['password'];
            echo "<p>El password ingresado (get) es $password </p>";
            /* echo "<p>El password ingresado es (get) ".$_GET['password']."</p>";*/
        }
        // -----------------------------------------------
        //proceso los datos del formulario por método POST
        // -----------------------------------------------
        $loginCorrecto = NULL;

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['usuario'])) {
                $usuario = $_POST['usuario'];
                echo "<p>El usuario ingresado (post) es $usuario </p>";
                /* echo "<p>El usuario ingresado es (post) ".$_POST['usuario']."</p>";*/
            }
            if(isset($_POST['password'])) {
                $password = $_POST['password'];
                echo "<p>El password ingresado (post) es $password </p>";
                /* echo "<p>El password ingresado es ".$_POST['password']."</p>";*/
            }
            if($usuario == 'pepe' && $password == '1234') {
                $loginCorrecto = TRUE;
            }
            else {
                $loginCorrecto = FALSE;
            }

        }
    ?>

    <form action="" method="post">
        <label for="">Usuario</label>
        <input type="text" name="usuario">
        
        <label for="">Password</label>
        <input type="password" name="password">

        <input type="submit" value="Login">

    </form>

    <?php
        if($loginCorrecto !== NULL) {
            if($loginCorrecto == TRUE) {
                echo "<h3>Se ha logueado correctamente<h3>";
            }
            else {
                echo "<h3>Las credenciales proporcionadas son incorrectas</h3>";
            }
        }

        $numero = "10.5";
        var_dump($numero);

    ?>


</body>
</html>
