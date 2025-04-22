<?php require_once 'funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Estadística</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            background-color: #001b28;
            font-family: "Poppins", sans-serif;
            color: #ffffff;
            padding: 30px;
        }

        h2 {
            color: #ffffff;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }

        .contenedor {
            background-color: #003f56;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            margin: 20px auto;
            text-align: center;
        }

        input[type="submit"], button {
            background-color: #006e90;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        input[type="submit"]:hover, button:hover {
            background-color: #0099cc;
        }

        input[type="number"] {
            margin: 5px;
            padding: 5px;
            border-radius: 5px;
            border: none;
            text-align: center;
        }

        span {
            display: block;
            margin-bottom: 10px;
        }

        h3 {
            color: white;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<h2>Calculadora de Datos Estadísticos</h2>

<?php
if (!isset($_POST['cantidad']) && !isset($_POST['notas'])) {
?>
    <form method="post">
        <div class="contenedor">
            <label for="cantidad">¿Cuántas notas deseas ingresar?</label><br>
            <input type="number" name="cantidad" id="cantidad" min="1" required><br>
            <input type="submit" value="Siguiente">
        </div>
    </form>
<?php
} elseif (isset($_POST['cantidad']) && !isset($_POST['notas'])) {
    $cantidad = intval($_POST['cantidad']);
?>
    <form method="post">
        <div class="contenedor">
            <h3>Ingresa las <?php echo $cantidad; ?> notas</h3>
            <?php
            for ($i = 1; $i <= $cantidad; $i++) {
                echo "<input type='number' name='notas[]' step='0.01' required placeholder='Nota $i'><br>";
            }
            ?>
            <input type="submit" value="Calcular Estadísticas">
        </div>
    </form>
<?php
} elseif (isset($_POST['notas'])) {
    $notas = array_map('floatval', $_POST['notas']);
    calcularEstadisticas($notas);
}
?>

</body>
</html>
