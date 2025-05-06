<?php
    Class A{
        public static function metodoEstatico(){
            echo __CLASS__;
        }
        public static function otraFunction(){
            static::metodoEstatico();
        }
    }

    Class B extends A{
        public static function metodoEstatico(){
            echo __CLASS__ ;
        }
    }

    B::otraFunction(); // Imprime B, porque el método estático se resuelve en la clase que lo llama.
?>