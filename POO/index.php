<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Persona {
            private $nombre;
            public function inicializar($nom){
                $this->nombre = $nom;
            }
            public function imprimir(){
                echo $this -> nombre;
                echo '<br>';
            }
        }
        $per1 = new Persona();
        $per1 -> inicializar('Juan');
        $per1 -> imprimir();
        $per2 = new Persona();
        $per2 -> inicializar('Ana');
        $per2 -> imprimir();
    ?>
</body>
</html>