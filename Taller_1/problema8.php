<?php require_once 'funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estación del Año</title>
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
            text-align: center;
            margin-bottom: 30px;
        }

        .contenedor {
            background-color: #003f56;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            margin: auto;
            text-align: center;
        }

        input, select {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin: 10px 0;
            width: 80%;
        }

        input[type="submit"] {
            background-color: #006e90;
            color: #ffffff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0099cc;
        }

        .resultado {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #00eaff;
        }
    </style>
</head>

<body>
    <span>
        <a href="index.php">Inicio</a>
    </span>
    
<h2>¿Qué estación del año es?</h2>

<form method="post">
    <div class="contenedor">
        <label for="dia">Día:</label><br>
        <input type="number" name="dia" id="dia" min="1" max="31" required><br>

        <label for="mes">Mes:</label><br>
        <input type="number" name="mes" id="mes" min="1" max="12" required><br>

        <input type="submit" value="Calcular estación">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dia = intval($_POST["dia"]);
    $mes = intval($_POST["mes"]);

    $resultado = estacionAno($dia, $mes);

    echo "<div class='contenedor resultado'>Estación: $resultado</div>";
}
?>

</body>
</html>
