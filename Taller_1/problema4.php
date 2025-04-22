<?php require_once 'funciones.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma Pares e Impares</title>
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
            width: 400px;
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

    <h2>Suma de números pares e impares del 1 al 200</h2>
    <div class="contenedor">
        <form method="post">
            <input type="submit" value="Calcular Sumas">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { //se verifica como se envio el formulario
            $resultado = sumaParesEImpares(); //se llamada a la funcion
            echo "<h3>Suma de Pares: " . number_format($resultado['pares']) . "</h3>"; //mensaje al usuario con el resultado
            echo "<h3>Suma de Impares: " . number_format($resultado['impares']) . "</h3>"; //mensaje al usuario con el resultados
        }
        ?>
    </div>
</body>
</html>
