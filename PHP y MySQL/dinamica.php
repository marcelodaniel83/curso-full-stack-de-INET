<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dinámica</title>
</head>
<body>
    
    <h1>Bienvenido a PHP</h1>
    <?php
        echo "Mensaje escrito mediante PHP";
    ?>

    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio ratione cum quia at minus animi eveniet, inventore fugit tempora laudantium veniam aliquid. Laudantium itaque maiores ab magnam nobis consequatur. Provident?
    </p>

    <form action="" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Apellido</label>
        <input type="text" name="apellido">

        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST['nombre'])) {
            echo $_POST['nombre'];
        }
        echo "<br>";
        if(isset($_POST['apellido'])) {
            echo $_POST['apellido'];
        }
    ?>


</body>
</html>