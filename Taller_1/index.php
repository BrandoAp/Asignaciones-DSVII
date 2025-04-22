<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Taller N°1 DS VII</title>
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    body{
        font-family: 'Poppins', sans-serif;
        background-color: #001b28;
        color: white;
    }
    .title-container{
        display: flex;
        justify-content: center;
        margin-bottom: 1rem;
    }
    .parent {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      grid-template-rows: repeat(5, 1fr);
      gap: 8px;
    }

    .div1 {
      background-color: #003f56;
      grid-column: span 2 / span 2;
      grid-row: span 5 / span 5;
      border-radius: 1rem;
      padding: 0.5rem;
      box-shadow: rgba(150, 149, 149, 0.24) 0px 3px 8px;;
    }

    .div2 {
      background-color: #006e90;
      grid-column: span 3 / span 3;
      grid-row: span 5 / span 5;
      grid-column-start: 3;
      border-radius: 1rem;
      padding: 0.5rem;
      box-shadow: rgba(150, 149, 149, 0.24) 0px 3px 8px;
    }

    ul{

      list-style-type: none;
      font-weight: bold;
    }

    li{
      color: white;
    }

    a{
      color: white;
      text-decoration: none;
    }
  </style>
  <body>
    <div class="title-container">
      <h2>Taller N°1</h2>
    </div>

    <div class="parent">
      <div class="div1">
            <h2>Universidad Tecnológica de Panamá</h3>
            <h4>Materia: Desarrollo de Software VII</h3>
            <p>Profesora: Ing. Irina Fong</p>
            <p>Brando Avila   8 - 1010 - 1501</p>
            <p>Gerald Rios    </p>
            <p>Grupo: 1GS133</p>
            <p>Año: 2025</p>
      </div>
      <div class="div2">
        <h2>Lista de Problemas</h2>
        <ul>
          <li><a href="problema1.php">Problema 1</a></li>
          <li><a href="problema2.php">Problema 2</a></li>
          <li><a href="problema3.php">Problema 3</a></li>
          <li><a href="problema4.php">Problema 4</a></li>
          <li><a href="problema5.php">Problema 5</a></li>
        </ul>
      </div>
    </div>
  </body>
</html>
