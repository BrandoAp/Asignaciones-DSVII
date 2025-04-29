<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit a Celsius</title>
</head>
<body>
    <h1>Conversor de Fahrenheit a Celsius</h1>
    <form method="post">
        <label for="farenheit">Grados Fahrenheit:</label>
        <input type="number" name="farenheit" step="0.01" required><br><br>
        <input type="submit" value="Convertir">
    </form>
    
    <?php
    require_once 'calculos.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $farenheit = floatval($_POST['farenheit']);
        $convertidor = new FarenheitCelcius($farenheit);
        echo "<h2>Resultado:</h2>";
        echo "$farenheit °F es igual a " . number_format($convertidor->convertir(), 2) . " °C";
    }
    ?>

    <h1>Conversor de Celsius a Fahrenheit</h1>
    <form method="post">
        <label for="celcius">Grados Celsius:</label>
        <input type="number" name="celcius" step="0.01" required><br><br>
        <input type="submit" value="Convertir">
    </form>
    
    <?php
    require_once 'calculos.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['celcius'])) {
        $celcius = floatval($_POST['celcius']);
        $convertidor = new CelciusFarenheit($celcius);
        echo "<h2>Resultado:</h2>";
        echo "$celcius °C es igual a " . number_format($convertidor->convertir(), 2) . " °F";
    }
    ?>
</body>
</html>