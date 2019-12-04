<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP/MARIADB CRUD </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous"> 

    <style>
        table,tr,th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    
    </style>

</head>
<body>
    
    <div class="container">
        <div class="jumbotron mt-3">
            <?php
                echo "<h2>PHP/MARIADB CRUD</h2>";

                try {
                    $dsn = "mysql:host=localhost;dbname=mibaseNew;charset=utf8";
                    $usuario = "root";
                    $password = "";
                    $pdo = new PDO($dsn,$usuario,$password);
                    //habilito los errores PDO
                    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                    echo "<p>Base de datos conectada!</p>";
                    // ----------------------------------------------------------
                    // C R U D (Create Read Update Delete)
                    // ----------------------------------------------------------
                    //  ACCIÓN      - SQL       - HTTP      - OPERACIÓN  - CRUD
                    // ----------------------------------------------------------
                    //  CREAR       - INSERT    - POST/PUT  - WRITE      - CREATE
                    //  LEER        - SELECT    - GET       - READ       - READ  
                    //  ACTUALIZAR  - UPDATE    - PUT       - WRITE      - UPDATE
                    //  BORRAR      - DELETE    - DELETE    - DISPOSE    - DELETE
                    // ----------------------------------------------------------
                    $montoDeDeuda = 40;

                    //-----------------------------------------------------------
                    //                         CREATE
                    //-----------------------------------------------------------
                    //$query = "insert into clientes (nombre,apellido,deuda) values ('Cecilia','Perez',150)"; //CREATE

                    //-----------------------------------------------------------
                    //                          READ
                    //-----------------------------------------------------------
                    $query = "select id,nombre,apellido,deuda from clientes where deuda>=:deudaDeLaPersona order by deuda desc"; //READ

                    //-----------------------------------------------------------
                    //                         UPDATE
                    //-----------------------------------------------------------
                    //$query = "update clientes set deuda=500 where id=5";

                    //-----------------------------------------------------------
                    //                         DELETE
                    //-----------------------------------------------------------
                    //$query = "delete from clientes where id=3"; //DELETE


                    //$query = "select count(*) from clientes"; //Query para obtener la cantidad total de columnas (*)
                    $stmt = $pdo->prepare($query);
                    $stmt->bindValue(':deudaDeLaPersona',$montoDeDeuda);
                    $stmt->execute();
                    //die('Fin del programa!');

                    echo "<p>Cantidad de registros leídos: {$stmt->rowCount()}</p>";
                    
                    //funciona con el query (*)
                    //echo "<p>Cantidad total de columnas: {$stmt->fetchColumn()}</p>";

                    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    /* echo "<table class='table'>";
                    echo "<tr class='bg-success text-white'> <th>Nombre</th> <th>Apellido</th> <th>Deuda</th> </tr>"; */
                    require("tabla-head.html");

                    foreach($resultados as $resultado){
                        require("tabla-body.html");
                        /* echo "<tr class='bg-info text-white'>";
                            echo "<td>$resultado[nombre]</td> <td>$resultado[apellido]</td> <td>$resultado[deuda]</td>";
                        echo "</tr>"; */

                        /* echo "<p>$resultado[nombre] - $resultado[apellido] - $resultado[deuda]</p>"; */
                        
                        /* echo "<p>";
                        var_dump($resultado);
                        echo "</p>"; */
                    }
                    require("tabla-footer.html");
                    /* echo "</table>"; */

                    $pdo = NULL;

                }
                catch(Exception $ex) {
                    echo "<p>Error en conexión de base de datos<p>";
                    /* echo "<p>El error es ".$ex->getMessage()."</p>"; */
                    echo "<p>El error es {$ex->getMessage()}</p>";
                }

            ?>
        </div>
    </div>

</body>
</html>

<!-- 

create database mibaseNew;

use mibaseNew;

create table clientes(
	id int not null auto_increment,
	nombre varchar(30) not null,
	apellido varchar(30) not null,
    deuda int unsigned not null,
    primary key(id)
);

desc clientes;

show tables;

show databases;

select * from clientes;

insert into clientes values (null, 'Juan','Gomez', 300),
							(null, 'Lucas','Perez', 400),
							(null, 'Ana','Mei', 200),
							(null, 'Maria','Picos', 700),
							(null, 'Diego','Gonzalez', 800);



 -->