<?php
    class ClaseSencilla{
        public $var = "<h1> valor perderterminado </h1>";

        public function mostrarVar(){
            echo $this -> var;
        }
    }

    $obj = new ClaseSencilla();
    $obj->mostrarVar();
?>