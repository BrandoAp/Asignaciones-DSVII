<?php
    class Foo {
        public static function unMetodoEstatico(){
            echo "Hola como estas <br>";
        }
    }

    Foo::unMetodoEstatico();

    $nombre_clase = "Foo";
    $nombre_clase::unMetodoEstatico();
?>