<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post">
        <label for="num1">Ingrese el primer numero</label>
        <input type="number" id="num1" name="num1" required><br>
        <label for="num2">Ingrese el segundo numero</label>
        <input type="number" name="num2" id="num2" required><br>
        <select name="op" id="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
        </select><br>
        <input type="submit" name="submit" value="Calcular">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) { //Verifico que el submit tenga un valor
  $num1 = $_POST['num1']; //Obtiene el valor del input de num1
  $num2 = $_POST['num2']; //Obtiene el valor del input de num2
  $op = $_POST['op']; //Obtiene el valor del operador elegido
  if (empty($num1) || empty($num2) || !is_numeric($num1) || !is_numeric($num2)) { //Verifica que los datos sean numericos y que no esten vacios
    echo "Por favor ingrese numeros validos."; //Mensaje al usuario
  } else {
    switch ($op) {
        case "+":
          $resultado = $num1 + $num2; //Se realiza la suma de los 2 numeros
          break;
        case "-":
          $resultado = $num1 - $num2; //Se realiza la resta de los 2 numeros
          break;
        case "*":
          $resultado = $num1 * $num2; //Se realiza la mulitplicacion de los 2 numeros
          break;
        default:
          echo "Operacion Invalida."; //Mensaje el usuario
      }
      echo "<p>El resultado de {$num1} {$op} {$num2} es {$resultado}.</p>"; //Mensaje el usuario
  }
}
?> 