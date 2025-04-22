<?php
    class Triangulo{
        private $base;
        private $altura;

        public function calcularArea($a, $b){
            $area = ($b*$a)/2;
            return $area;
        }
    }

    $obj = new Triangulo();
    echo $obj -> calcularArea(2,4);
?>