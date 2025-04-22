<?php require_once 'funciones.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4 a la n</title>
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

    <h2>Imprimir los N primeros múltiplos de 4</h2>

    <form method="post">
    <label for="numero">Introduce un número (N):</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Mostrar múltiplos">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $n = intval($_POST["numero"]);
    if ($n > 0) {
        echo "<h3>Resultado:</h3>";
        imprimirMultiplosDe4($n);
        } else {
        echo "<p style='color:red;'>Por favor ingresa un número mayor que 0.</p>";
        }
    }
?>
</body>
</html>