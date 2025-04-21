<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perimetro y Area de un circulo</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="radio">Ingresa el radio del circulo</label>
            <input type="text" name="radio" id="radio" required>
        </form>
    </div>
</body>
</html>

<?php
error_reporting(0);
    $radio = $_REQUEST['radio']; //Se obtiene el valor del input de radio
    const PI = 3.1416;
    
    if(isset($radio) and $radio > 0) {
        $area = PI * $radio*$radio; //Se calcula el area del circulo
        $perimetro = 2*PI*$radio; //Se calcula el perimetro del circulo

        echo "<h3> El area del circulo es {$area} y el perimetro es {$perimetro} </h3>"; //Mensaje el usuario
    } else{
        echo "<h3> No se puede calcular ni el area ni el perimetro </h3>"; //Mensaje el usuario
    }   
?>