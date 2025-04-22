<?php
    class ClaseSencilla{
        public $var = "un valor predeterminado";

        public function mostrarVar(){
            echo $this->var;
        }
    }

    $obj = new ClaseSencilla();
    $obj->mostrarVar();
?>