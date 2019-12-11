<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clase 1 - PHP POO </title>
</head>
<body style="height:2000px;">
    
    <?php
        echo "<h1 style='color: blue;'>Clase 1 - PHP/POO</h1>";
        echo "<hr>";
        echo "<hr>";

        require("class/Persona.class.php");
        require("class/Empleado.class.php");

        if(FALSE) {
            // ------------------------------------------------------------------------
            $persona1 = new Persona('Tomás','Salguero',28);
            //$persona1->nombre = 'Juan';
            //$persona1->apellido = 'Perez';
            $persona1->peso = 76;
            //$persona1->edad = 32;
            $persona1->altura = 1.75;
            $persona1->profesion = 'Programador';

            /* echo "<p>La edad de {$persona1->nombre} es {$persona1->edad}</p>"; */
            if($persona1->esMayorDeEdad()) {
                echo "<p>{$persona1->nombre} tiene {$persona1->edad}, es mayor de edad</p>";
            }
            else {
                echo "<p>{$persona1->nombre} tiene {$persona1->edad}, es menor de edad</p>";
            }
            $persona1->caminar();

            echo "<hr>";

            // ------------------------------------------------------------------------
            $persona2 = new Persona('Cecilia','Juarez',16);
            //$persona2->nombre = 'Ana';
            //$persona2->apellido = 'Lopez';
            $persona2->peso = 61;
            //$persona2->edad = 28;
            $persona2->altura = 1.70;
            $persona2->profesion = 'Programadora';

            //echo "<p>La edad de {$persona2->nombre} es {$persona2->edad}</p>";
            if($persona2->esMayorDeEdad()) {
                echo "<p>{$persona2->nombre} tiene {$persona2->edad}, es mayor de edad</p>";
            }
            else {
                echo "<p>{$persona2->nombre} tiene {$persona2->edad}, es menor de edad</p>";
            }
            $persona2->caminar();
            // ------------------------------------------------------------------------
            echo "<hr>";

            /* echo "<h3 style='color:red;'>".$persona1->nombre."</h3>"; */
            echo "<h3 style='color:red;'>Nombre: {$persona1->nombre}, Apellido: {$persona1->apellido}, Edad: {$persona1->edad}</h3>";
            
            echo "<h3 style='color:red;'>Nombre: ".$persona2->nombre.", Apellido: ".$persona2->apellido."</h3>";


            /*$persona3 = new Persona();
            $persona4 = new Persona();
            $persona5 = new Persona();
            $persona6 = new Persona(); */
        }

        // -------------------------------------------------------
        $empleado1 = new Empleado('Diego','Salguero',28, 10000);
        //$empleado1->nombre = 'Juan';
        $empleado2 = new Empleado('Lucia','Juarez',16, 12000);
        //$empleado2->nombre = 'Ana';

        echo "<hr>";
        echo "<p>el sueldo de {$empleado1->nombre} es {$empleado1->getSueldo()}</p>";
        echo "<p>el sueldo de {$empleado2->nombre} es {$empleado2->getSueldo()}</p>";
        //$empleado1->sueldo = 13000;
        $empleado1->setSueldo(13000);
        echo "<p>el nuevo sueldo de {$empleado1->nombre} es {$empleado1->getSueldo()}</p>";

        $empleado1->trabajar();
        $empleado1->caminar();

        echo "<hr>";
        echo $empleado1->verDatos();
        echo "<hr>";

        $empleado3 = new Empleado('Luis');
        echo "<p>el sueldo de {$empleado3->nombre} {$empleado3->apellido} es {$empleado3->getSueldo()}, tiene {$empleado3->edad} años.</p>";

        echo "<hr>";
        unset($empleado2);

        echo "<hr>";
        echo "<hr>";
        echo "<h2 style='color: blue;'>El Script Terminó!</h2>";

    ?>

</body>
</html>