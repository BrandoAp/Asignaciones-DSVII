
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h1>Conversor de Temperatura</h1>

    <form method="post">
        <label for="grados">Temperatura:</label>
        <input type="number" name="grados" step="0.01" required
            value="<?= isset($_POST['grados']) ? htmlspecialchars($_POST['grados']) : '' ?>"><br><br>

        <label for="tipo">Tipo de conversión:</label>
        <select name="tipo" required>
            <option value="faren" <?= (isset($_POST['tipo']) && $_POST['tipo'] === 'faren') ? 'selected' : '' ?>>
                Fahrenheit a Celsius
            </option>
            <option value="cel" <?= (isset($_POST['tipo']) && $_POST['tipo'] === 'cel') ? 'selected' : '' ?>>
                Celsius a Fahrenheit
            </option>
        </select><br><br>

        <input type="submit" value="Convertir">
    </form>

    <?php
    require_once 'calculos.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['grados'], $_POST['tipo'])) {
        $grados = floatval($_POST['grados']);
        $tipo = $_POST['tipo'];

        if ($tipo === 'faren') {
            $convertidor = new FarenheitCelcius($grados);
            $resultado = $convertidor->convertir();
            echo "<h2>Resultado:</h2>";
            echo "$grados °F = " . number_format($resultado, 1) . " °C";
        } elseif ($tipo === 'cel') {
            $convertidor = new CelciusFarenheit($grados);
            $resultado = $convertidor->convertir();
            echo "<h2>Resultado:</h2>";
            echo "$grados °C = " . number_format(ceil($resultado)) . " °F";
        }
    }
    ?>
</body>
</html>
