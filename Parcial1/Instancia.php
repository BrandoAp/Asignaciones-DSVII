<?php   
class person{
    $name;
    $surname;
    $age;


    function __construct($name, $surname, $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getAge() {
        return $this->age;
    }
}


new person("Juan", "Pérez", 30);









?>