<?php
    interface Saludable {
        public function saludar();
    }

    class Persona implements Saludable {
        public function saludar() {
            echo "Hola, soy una persona. <br>";
        }
    }

    class Robot implements Saludable {
        public function saludar() {
            echo "Beep boop, soy un robot.";
        }
    }

    $persona = new Persona();
    $persona->saludar(); // "Hola, soy una persona."
    $robot = new Robot();
    $robot->saludar(); // "Beep boop, soy un robot."
?>