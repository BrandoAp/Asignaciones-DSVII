<?php
    class Animal {
        public $name;
        public $color;

        function set_name($name){
            $this -> name = $name;
        }
        function get_name(){
            return $this -> name;
        }
    }
    $dog = new Animal();
    $cat = new Animal();

    $dog -> set_name("Tom");
    $cat -> set_name("Mickey");
    echo $dog -> get_name();
    echo "<br>";
    echo $cat -> get_name();
?>