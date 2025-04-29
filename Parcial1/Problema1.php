
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Triángulo Rectángulo</title>
</head>
<body>
    <h1>Calculadora de Hipotenusa, Área y Perímetro</h1>

    <form method="post">
        <label for="cateto1">Cateto 1:</label>
        <input type="number" name="cateto1" step="0.01" required><br><br>

        <label for="cateto2">Cateto 2:</label>
        <input type="number" name="cateto2" step="0.01" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    require_once 'calculos.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cateto1 = floatval($_POST['cateto1']);
        $cateto2 = floatval($_POST['cateto2']);

        if ($cateto1 > 0 && $cateto2 > 0) {
            $triangulo = new TrianguloRectangulo($cateto1, $cateto2);

            echo "<h2>Resultados:</h2>";      
            echo "Hipotenusa: " . number_format($triangulo->Hipotenusa(), 2) . "<br>";
            echo "Área: " . number_format($triangulo->Area(), 2) . "<br>";
            echo "Perímetro: " . number_format($triangulo->Perimetro(), 2) . "<br>";
        } else {
            echo "<p style='color:red;'>Los valores deben ser mayores a cero.</p>";
        }
    }
    ?>
</body>
</html>
