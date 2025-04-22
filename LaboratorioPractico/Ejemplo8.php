<?php
    class Circulo {
        private $radio;
        private $perimetro;

        public function _construct($radio){
            $this -> $radio = $radio;
            $this -> $perimetro = 2*M_PI*$radio;
        }
    }

    $obj = new Circulo(3);

?>