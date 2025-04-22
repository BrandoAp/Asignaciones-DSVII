<?php require_once 'funciones.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Ginecológico</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

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
            width: 350px;
            margin: auto;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #006e90;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0099cc;
        }

        a {
            color: #00cfff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        span {
            display: block;
            margin-bottom: 20px;
        }

        h3 {
            text-align: center;
            color: white;
            margin-top: 20px;
        }
    </style>    
</head>
<body>
    <span>
        <a href="index.php">Inicio</a>
    </span>

    <h2>Dividir el Presupuesto del Hospital Ginecológico</h2>
    <div class="contenedor">
        <form method="post">
            <label for="presupuesto">Ingrese el presupuesto total:</label><br>
            <input type="text" id="presupuesto" name="presupuesto" required><br><br>
            <input type="submit" value="Calcular Presupuesto" name="calcular"><br><br>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['calcular'])) {
                    $presupuesto = $_POST['presupuesto'];
                    $resultado = dividirPresupuesto($presupuesto);
                    echo "<h3>Distribución del Presupuesto:</h3>";
                    echo "<ul>";
                    foreach ($resultado as $departamento => $monto) {
                        echo "<li>$departamento: $" . number_format($monto, 2) . "</li>";
                    }
                    echo "</ul>";
                }
            }
        ?>
        
    </div>
</body>
</html>