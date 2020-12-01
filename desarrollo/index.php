<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/index.css">
  <title>Blog del Programador</title>
</head>

<body>

  <div class="container">
    <h1>Bienvenidos</h1>
    <p>Alumnos de E-2</p>
    <a style="background: red; color: black; padding: 10px 25px; margin: 25px; display:inline-block" href="http://www.une.edu.pe/uneweb/" target="_black">
      Ir a la UNE
    </a>
    <p class="parrafo">
      Hablemos de paginas web
    </p>
    <p id="otroestilo">
      Hablemos de paginas web
    </p>
  </div>

  <div class="marcos">
    <div class="cuadros item1"></div>
    <div class="cuadros item2"></div>
    <div class="cuadros item3"></div>
  </div>

  <div class="container__img">
    <p class="parrafo-r">Revilla</p>
    <img class="img" src="img/java.png" alt="Java Image">
  </div>

  <br><br>
  <div class="container__form">
    <form class="form__subcontainer" action="captura.php" method="POST">
      <label for="username">
        Username: <input type="text" id="username" name="username">
      </label>
      <label for="password">
        Password: <input type="password" id="password" name="password">
      </label>
      <label for="email">
        Correo: <input type="email" id="email" name="email">
      </label>
      <input class="btn" type="submit" value="Enviar">
    </form>
  </div>

  <table class="table">
    <caption>Mi Horario</caption>
    <tr>
      <th>Hora</th>
      <th>Lunes</th>
      <th>Martes</th>
      <th>Miercoles</th>
      <th>Jueves</th>
      <th>Viernes</th>
      <th>Sabado</th>
      <th>Domingo</th>
    </tr>
    <tr>
      <td>08:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>09:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>10:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>11:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</body>

</html>