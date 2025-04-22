<?php require_once 'funciones.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clasificar Edades</title>
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

    <h2>Clasificar la edad de 5 personas</h2>

    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): //Utilizo un for para no escribir 5 formularios?> 
            Edad persona <?= $i ?>: <br> 
            <input type="text" name="edades[]"><br>
        <?php endfor; ?>
        <input type="submit" value="Clasificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //Verifica como fue enviado el formulario
        $edades = $_POST['edades']; //recupera las edades del formulario
        $clasificaciones = clasificarEdad($edades); //llamado a la funcion

        echo "<h3>Resultados:</h3><ul>";
        foreach ($clasificaciones as $i => $categoria) {
            echo "<li>Persona " . ($i + 1) . ": $categoria</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
