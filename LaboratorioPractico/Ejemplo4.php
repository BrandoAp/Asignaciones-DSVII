<?php
    class Persona {
        public $nombre;
        public $edad;
        public $ciudad;

        public function __construct($nombre, $edad, $ciudad){
            $this -> nombre = $nombre;
            $this -> edad = $edad;
            $this -> ciudad = $ciudad;
        }
    }

    $personas = array (
        new Persona("Juan", 25, "Buenos Aires"),
        new Persona("María", 30, "Madrid"),
        new Persona("Pedro", 35, "México"),
    );

    foreach($personas as $persona){
        echo $persona -> nombre . " tiene " . $persona ->edad . " años y vive en " . $persona ->ciudad . ".<br>";
    }

?>