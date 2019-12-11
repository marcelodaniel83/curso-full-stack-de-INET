<?php

    abstract class Persona {
        //propiedades (cualidades)
        public $nombre = NULL;
        public $apellido = NULL;
        public $peso = NULL;
        public $altura = NULL;
        public $profesion = NULL;
        public $edad = NULL;

        //metodos (acciones)
        public function __construct($nombre, $apellido, $edad) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
            echo "<p>ESTOY CONSTRUIDO (Persona: {$this->nombre})!</p>";
        }

        public function verDatos() {
            $return = "<p><b>El nombre es {$this->nombre} {$this->apellido}</b></p>";
            return $return;
        }

        final public function caminar() {
            echo "<p>{$this->nombre} está caminando</p>";
        }

        public function esMayorDeEdad() {
            return $this->edad >= 18;
            /* if($this->edad >= 18) {
                return true;
            }
            else {
                return false;
            } */
            /*
            if($this->edad >= 18) {
                return true;
            }
            return false;
            */
        }

        public function __destruct() {
            echo "<p>ESTOY DESTRUIDO (Persona: {$this->nombre})!</p>";
        }

    }


?>