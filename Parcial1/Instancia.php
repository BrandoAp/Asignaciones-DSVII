<?php   
class person{
    public $name;
    public $surname;
    public $age;


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

$person1 = new person("Juan", "Pérez", 30);

echo "Nombre: " . $person1->getName() . "<br>";
echo "Apellido: " . $person1->getSurname() . "<br>";
echo "Edad: " . $person1->getAge() . "<br>";









?>