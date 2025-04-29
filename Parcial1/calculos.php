<?php
//Problema1
class TrianguloRectangulo {
    private $cateto1;
    private $cateto2;

    public function __construct($cateto1, $cateto2) {
        $this->cateto1 = $cateto1;
        $this->cateto2 = $cateto2;
    }

    public function Hipotenusa() {
        return sqrt(pow($this->cateto1, 2) + pow($this->cateto2, 2));
    }

    public function Area() {
        return ($this->cateto1 * $this->cateto2) / 2;
    }

    public function Perimetro() {
        return $this->cateto1 + $this->cateto2 + $this->Hipotenusa();
    }
}

//Problema2
class FarenheitCelcius {
    private $farenheit;

    public function __construct($farenheit) {
        $this->farenheit = $farenheit;
    }

    public function convertir() {
        return ($this->farenheit - 32) * 5 / 9;
    }
}

class CelciusFarenheit {
    private $celcius;

    public function __construct($celcius) {
        $this->celcius = $celcius;
    }

    public function convertir() {
        return ($this->celcius * 9 / 5) + 32;
    }
}
?>
