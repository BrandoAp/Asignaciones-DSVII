<?php
    class Coche{
        const RUEDAS=4;
    }
    echo Coche::RUEDAS;

    $miCoche = new Coche();
    echo $miCoche::RUEDAS."<br>";
?>