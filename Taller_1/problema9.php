<?php require_once 'funciones.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Potencia a la 15</title>
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

        form {
            background-color: #003f56;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            margin: auto;
        }

        input[type="text"] {
            width: 90%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
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
            color: #00ffcc;
            text-align: center;
        }

        ul {
            color: #ffffff;
            list-style: none;
            padding: 0;
        }

        li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <span>
        <a href="index.php">Inicio</a>
    </span>

    <h2>Potencia a la 15 potencia</h2>

    <form method="post">
        <input type="text" name="numero" placeholder="Ingresa un número" required>
        <input type="submit" value="Calcular Potencia">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if (is_numeric($numero)) {
            $resultado = pow($numero, 15);
            echo "<h3>El resultado de $numero<sup>15</sup> es: $resultado</h3>";
        } else {
            echo "<h3>Por favor, ingresa un número válido.</h3>";
        }
    }
    ?>
</body>
</html>