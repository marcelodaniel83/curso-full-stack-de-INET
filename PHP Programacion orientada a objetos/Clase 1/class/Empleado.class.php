<?php

    class Empleado extends Persona{
        private $sueldo = NULL;
        
        public function __construct (
            /*
            $nombre,
            $apellido,
            $edad,
            $sueldo
            */
            $nombre='???',
            $apellido='???',
            $edad='???',
            $sueldo='???'
        ) {
            Parent::__construct($nombre, $apellido, $edad);
            $this->sueldo = $sueldo;
            echo "<p>ESTOY CONSTRUIDO (Empleado: {$this->nombre})!</p>";
        }

        public function verDatos() {
            //return Parent::verDatos();
            $return = Parent::verDatos();
            $return .= "<p><i>El sueldo es {$this->sueldo}</i></p>";
            return $return;
        }

        public function trabajar() {
            echo "<p>trabajando...</p>";
        }
        /* public function caminar() {
            echo "<p>caminando y trabajando...</p>";
        } */
        public function setSueldo($nuevoSueldo) {
            $this->sueldo = $nuevoSueldo;
        }
        public function getSueldo() {
            return $this->sueldo;
        }

        public function __destruct() {
            Parent::__destruct();
            echo "<p>ESTOY DESTRUIDO (Empleado: {$this->nombre})!</p>";
        }
    }

?>