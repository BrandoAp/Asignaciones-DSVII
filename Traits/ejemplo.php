<?php
    trait Andaluz {
        public function saludar() {
            print "Qué pasa quillo! <br>";
        }
    
        public function despedir() {
            print "Ta' luego!! <br>";
        }
    }
    
    trait Vasco {
        public function saludar() {
            print "Kaixo";
        }
    
        public function despedir() {
            print "Agur!";
        }
    }
    
    class Persona {
        use Andaluz, Vasco {
            Andaluz::saludar insteadof Vasco;   // Preferimos el método saludar de Andaluz
            Vasco::despedir insteadof Andaluz;  // Preferimos el método despedir de Vasco
            Andaluz::despedir as decirAdios;    // Creamos un alias para el método despedir de Andaluz
        }
    }
    
    $person = new Persona();
    $person->saludar();     // Qué pasa quillo!
    $person->despedir();    // Agur!
    $person->decirAdios();  // Ta' luego!!
    
?>