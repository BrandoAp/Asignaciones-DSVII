<?php
    class Vehicle{
        public function startEngine(): void{
            echo "Starting engine of the vehicle <br>";
        }

        public function move(): void{
            echo "Driving a vehicle <br>";
        }
    }

    class Car extends Vehicle{
        public function startEngine(): void{
            echo "Starting engine of the car with a key <br>";
        }

        public function move(): void{
            echo "Driving a car with 4 wheels <br>";
        }
    }

    Class Motorcycle extends Vehicle{
        public function startEngine(): void{
            echo "Starting engine of the motorcycle with a kick <br>";
        }

        public function move(): void{
            echo "Driving a motorcycle with 2 wheels <br>";
        }
    }

    $object1 = new Vehicle();
    $object1->startEngine();
    $object1->move();
    $object2 = new Car();
    $object2->startEngine();
    $object2->move();
    $object3 = new Motorcycle();
    $object3->startEngine();
    $object3->move();
?>