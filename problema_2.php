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
            <label for="radio">Ingresa las pulgadas a convertir</label>
            <input type="text" name="pulgadas" id="pulgadas" required>
        </form>
    </div>
</body>
</html>

<?php
error_reporting(0);
    $pulgadas = $_REQUEST['pulgadas']; //Se obtiene el valor del input de pulgadas
    const equivalente_cm = 2.54;
    
    if(isset($pulgadas) and $pulgadas > 0) { //Verifica que la varibale pulgadas contenga algo y sea mayor a 0
        $centimetros = equivalente_cm * $pulgadas; //Se realiza el calculo de la conversion de pulgadas a centimetros

        echo "<h3> Las pulgadas convertidas a centimetros son {$centimetros} </h3>"; //Mensaje al usuario
    } else{
        echo "<h3> No se pudo realizar la conversion </h3>"; //Mensaje al usuario
    }   
?>