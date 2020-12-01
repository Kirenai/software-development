<?php include("includes/header.php"); ?>

<div class="container mt-5 ">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div id="alert"></div>
    </div>
  </div>
  <div class="row mh-100">
    <div class="col-md-4 mx-auto">
      <form action="respuesta.php" method="POST">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input class="form-control" type="text" name="username" id="nombre" placeholder="Ingrese su nombre" autofocus>
        </div>
        <div class="form-group">
          <label for="dni">DNI:</label>
          <input class="form-control" type="text" name="dni" id="dni" placeholder="Ingrese du DNI">
        </div>
        <div class="form-group">
          <label for="age">Edad:</label>
          <input class="form-control" type="number" name="age" id="age" placeholder="Ingrese su edad" min="0" max="100">
        </div>
        <button class="btn btn-primary btn-block" type="submit" id="enviar">Enviar</button>
      </form>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>