<?php
    function validar($usuario, $alias, $clave) {
        if($usuario == 'Juan' && $alias == 'cito' && $clave == '1234') {
            echo "<p>Bienvenido $usuario, llamado $alias</p>";
        }
        else {
            echo "<p>Las credenciales ingresadas son incorrectas</p>";
        }
    }
?>

